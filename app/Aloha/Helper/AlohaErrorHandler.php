<?php
namespace Aloha\Helper;

use Fig\Http\Message\StatusCodeInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Interfaces\ErrorHandlerInterface;
use Slim\Views\Twig;
use Throwable;

class AlohaErrorHandler implements ErrorHandlerInterface
{
    private $view;
    private $responseFactory;

    public function __construct(Twig $view, $responseFactory)
    {
        $this->view = $view;
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
        return $this->view->render($response, "common/404.t");
    }
}