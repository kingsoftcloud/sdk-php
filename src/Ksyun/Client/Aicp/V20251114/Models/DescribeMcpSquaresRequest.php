<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeMcpSquaresRequest extends BaseModel
{
    public $RequestParams = [
         /**Array**/
        "McpServerIds" => null,
         /**String**/
        "NameKeyword" => null,
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
        if (array_key_exists("McpServerIds",$param) and $param["McpServerIds"] !== null) {
            if(is_bool($param["McpServerIds"])){
                $this->RequestParams["McpServerIds"] = $param["McpServerIds"] ? "true" : "false";
            } else {
                $this->RequestParams["McpServerIds"] = $param["McpServerIds"];
            }
        }
        if (array_key_exists("NameKeyword",$param) and $param["NameKeyword"] !== null) {
            if(is_bool($param["NameKeyword"])){
                $this->RequestParams["NameKeyword"] = $param["NameKeyword"] ? "true" : "false";
            } else {
                $this->RequestParams["NameKeyword"] = $param["NameKeyword"];
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