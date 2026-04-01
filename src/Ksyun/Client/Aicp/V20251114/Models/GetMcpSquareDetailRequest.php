<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetMcpSquareDetailRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "McpServerId" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("McpServerId",$param) and $param["McpServerId"] !== null) {
            if(is_bool($param["McpServerId"])){
                $this->RequestParams["McpServerId"] = $param["McpServerId"] ? "true" : "false";
            } else {
                $this->RequestParams["McpServerId"] = $param["McpServerId"];
            }
        }

    }

    private function _unserialize($name,$params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value){
            $this->$name[$key] = $value;
        }

    }
}