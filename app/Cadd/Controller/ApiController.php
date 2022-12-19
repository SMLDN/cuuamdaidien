<?php

namespace Cadd\Controller;

use Aloha\Helper\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ApiController
{
    public function noiCong(ServerRequestInterface $request, ResponseInterface $response, $args)
    {
        $response = new Response();
        $response->withJson([
            "effect" => [
                "",
                "每隔15秒后,下次攻击将造成2倍伤害并附加额外阳伤害,如果击中未招架敌人，可使目标残废（定身）2秒",
                "每隔25秒后,下次攻击将造成2倍伤害并附加额外阳伤害,如果击中未招架敌人，可使目标残废（定身）10秒",
            ],
            "type" => 0,
            "maxLevel" => 64,
            "attributes" => [
                [
                    "level" => 1,
                    "lucTay" => 13,
                    "thanPhap" => 3,
                    "noiTuc" => 2,
                    "canhKhi" => 2,
                    "thePhach" => 11,
                    "maxHp" => 380,
                    "maxMp" => 105,
                    "maxParry" => 140,
                    "innerDef" => 25,
                    "effectLevel" => 0,
                ],
                [
                    "level" => 2,
                    "lucTay" => 14,
                    "thanPhap" => 3,
                    "noiTuc" => 2,
                    "canhKhi" => 2,
                    "thePhach" => 12,
                    "maxHp" => 410,
                    "maxMp" => 110,
                    "maxParry" => 170,
                    "innerDef" => 25,
                    "effectLevel" => 1,
                ],
            ],
        ]);
        return $response;
    }

    protected function doSendMsg($channelId, $msg)
    {

        if (strlen($channelId) <= 0) {
            return;
        }
        if (strlen($msg) <= 0) {
            return;
        }
        $url = "https://discord.com/api/v9/channels/" . $channelId . "/messages";
        $token = "Bot MTAzOTM3MDQ0NDc1MjU1MTk0Ng.GARAG7.ipqWMeFyoyfvqjplsNVSnaKbNvUkNcwfBCPADY";

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
            $this->doSendMsg($args["channelId"], $args["msg"]);
        }
        $response = new Response();
        $response->withJson(["result" => "ok"]);
        return $response;
    }
}
