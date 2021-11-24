<?php
namespace Aloha\Middleware;

use Aloha\Factory\AlohaResponseFactory;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class ApiResponseMiddleware implements MiddlewareInterface
{

    /**
     * @inheritDoc
     *
     * @param ServerRequestInterface $request
     * @param RequestHandlerInterface $handler
     * @return ResponseInterface
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        try {
            return $handler->handle($request);
        } catch (\Exception $e) {
            $errorMsg = "0";
            if ($_ENV["MODE"] == "development") {
                $errorMsg = $e->getMessage();
            }
            return (new AlohaResponseFactory)->createResponse()->withError($errorMsg);
        }
    }
}