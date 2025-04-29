<?php

namespace Ksyun\Client\Kmr\V20240814\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DetailWorkspaceRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "WorkspaceId" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("WorkspaceId", $param) and $param["WorkspaceId"] !== null) {
            if (is_bool($param["WorkspaceId"])) {
                $this->RequestParams["WorkspaceId"] = $param["WorkspaceId"] ? "true" : "false";
            } else {
                $this->RequestParams["WorkspaceId"] = $param["WorkspaceId"];
            }
        }

    }

    private function _unserialize($name, $params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value) {
            $this->$name[$key] = $value;
        }

    }
}