<?php

namespace Aloha\Helper;

use Aloha\Utility\Upload;
use Fig\Http\Message\StatusCodeInterface;
use Slim\Interfaces\RouteParserInterface;
use Slim\Psr7\Response as SlimResponse;
use Slim\Psr7\Stream;

class Response extends SlimResponse
{
    protected $router;

    /**
     * Construct
     *
     * @param integer $status
     * @param RouteParserInterface $router
     */
    public function __construct(int $status = StatusCodeInterface::STATUS_OK, RouteParserInterface $router = null)
    {
        $this->router = $router;
        parent::__construct($status);
    }

    /**
     * Redirect về 1 trang chỉ định
     *
     * @param [type] $url
     * @param [type] $status
     * @return void
     */
    public function withRedirect($url, $status = null)
    {
        $responseWithRedirect = $this->withHeader("Location", (string) $url);
        if (is_null($status) && $this->getStatusCode() === StatusCodeInterface::STATUS_OK) {
            $status = StatusCodeInterface::STATUS_FOUND;
        }
        if (!is_null($status)) {
            return $responseWithRedirect->withStatus($status);
        }
        return $responseWithRedirect;
    }

    public function withError($msg)
    {
        $this->getBody()->write($msg);
        return $this->withStatus(StatusCodeInterface::STATUS_INTERNAL_SERVER_ERROR);
    }

    /**
     * Response với Attach file
     *
     * @return void
     */
    public function withAttach($resource, string $mime = "image/jpeg")
    {
        $this->getBody()->write(Upload::decodeToStream($resource));
        return $this->withHeader("Content-Type", $mime);
    }

    public function withAttachContent($resource, string $mime = "image/jpeg")
    {
        $stream = new Stream($resource);
        $this->getBody()->write($stream->getContents());
        return $this->withHeader("Content-Type", $mime);
    }

    /**
     * JSON
     *
     * @param [type] $data
     * @return void
     */
    public function withJson($data)
    {
        $payload = json_encode($data);
        $this->getBody()->write($payload);
        return $this->withHeader("Content-Type", "application/json");
    }

    /**
     * Redirect đến địa chỉ dựa theo route
     *
     * @return void
     */
    public function redirectTo($routeName, $status = null)
    {
        return $this->withRedirect($this->router->urlFor($routeName), $status);
    }

    /**
     * setRouter
     *
     * @param RouteParserInterface $router
     * @return void
     */
    public function setRouter(RouteParserInterface $router)
    {
        $this->router = $router;
    }

    /**
     * getRouter
     *
     * @return void
     */
    public function getRouter()
    {
        return $this->router;
    }
}