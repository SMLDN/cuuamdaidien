<?php

namespace Cadd\Controller;

use Aloha\Helper\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ApiController
{

    protected function doSendMsg($channelId, $msg)
    {
        if (strlen($channelId) <= 0) {
            return;
        }
        if (strlen($msg) <= 0) {
            return;
        }
        $channelId = "1055497571893776438";
        if (str_contains($msg, "Đăng nhập.") or str_contains($msg, "Đăng xuất.")) {
            $channelId = "1055870250186457269";
        }

        $url = "https://discord.com/api/v9/channels/" . $channelId . "/messages";
        $token = "Bot " . $_ENV["DC_TOKEN"];

        $postData = [
            "content" => $msg
        ];

        $postDataString = json_encode($postData);

        $headers = [
            "Content-Type: application/json",
            "Authorization:" . $token,
            "X-Ratelimit-Precision: millisecond",
            "User-Agent: zdn bot",
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postDataString);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);

        curl_close($ch);
    }
    public function sendDiscordMsg(ServerRequestInterface $request, ResponseInterface $response, $args)
    {
        if ($args["footprint"] == "zdndoilacaidinh") {
            $param = $request->getParsedBody();
            if (isset($param["msg"])) {
                $this->doSendMsg($args["channelId"], $param["msg"]);
            }
        }
        $response = new Response();
        $response->withJson(["result" => "ok"]);
        return $response;
    }
}
