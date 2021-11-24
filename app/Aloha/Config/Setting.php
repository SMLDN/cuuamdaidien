<?php

namespace Aloha\Config;

class Setting
{
    protected $defaultSettings;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->defaultSettings = [
            "errorMiddleware" => [
                "displayErrorDetails" => $_ENV["MODE"] == "development" ? true : false,
                "logErrors" => true,
                "logErrorDetails" => true,
            ],
            "db" => [
                "driver" => "pgsql",
                "host" => $_ENV["DB_HOST"],
                "database" => $_ENV["DB_DATABASE"],
                "username" => $_ENV["DB_USERNAME"],
                "password" => $_ENV["DB_PASSWORD"],
                "charset" => "utf8",
            ],
        ];
    }

    /**
     * Lấy giá trị từ Thiết lập mặc định
     * Phân tách phần từ con bởi dấu chấm
     * VD: "errorMiddleware.displayErrorDetails"
     *
     * @param string $props
     * @return void
     */
    public function get(string $props)
    {
        $frags = explode(".", $props);
        $result = $this->defaultSettings;
        foreach ($frags as $frag) {
            if (isset($result[$frag])) {
                $result = $result[$frag];
            } else {
                return null;
            }
        }
        return $result;
    }
}