<?php
namespace Aloha\Helper;

use Fig\Http\Message\StatusCodeInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Interfaces\ErrorHandlerInterface;
use Throwable;

class AlohaErrorHandler implements ErrorHandlerInterface
{
    private $responseFactory;

    public function __construct($responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function __invoke(
        ServerRequestInterface $request,
        Throwable $exception,
        bool $displayErrorDetails,
        bool $logErrors,
        bool $logErrorDetails
    ): ResponseInterface {
        $response = $this->responseFactory->createResponse(StatusCodeInterface::STATUS_NOT_FOUND);
        return $response->withError("Có lỗi xảy ra vui lòng truy cập lại sau!");
    }
}