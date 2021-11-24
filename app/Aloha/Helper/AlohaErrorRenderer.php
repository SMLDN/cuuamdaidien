<?php
namespace Aloha\Helper;

use Slim\Interfaces\ErrorRendererInterface;
use Throwable;

class AlohaErrorRenderer implements ErrorRendererInterface
{
    public function __invoke(Throwable $exception, bool $displayErrorDetails): string
    {
        return "<h1>404 - Phát sinh lỗi</h1><div>Vui lòng kiểm tra lại đường link, hoặc thử lại sau.</div><a style=\"margin-top: 10px; display: block;\" href=\"/\"> &lt; Trang chủ</a>";
    }
}