<?php
namespace  Ksyun\Client\Kad\V20161122\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeForwardSourceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ForwardConfId" => null,
    ];

     /**特殊参数类型:Filter**/
    public $ForwardSourceId = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ForwardConfId",$param) and $param["ForwardConfId"] !== null) {
            if(is_bool($param["ForwardConfId"])){
                $this->RequestParams["ForwardConfId"] = $param["ForwardConfId"] ? "true" : "false";
            } else {
                $this->RequestParams["ForwardConfId"] = $param["ForwardConfId"];
            }
        }
        if (array_key_exists("ForwardSourceId",$param) and $param["ForwardSourceId"] !== null) {
            $res = $this->formatFilterParams("ForwardSourceId",$param["ForwardSourceId"]);
            $this->_unserialize("ForwardSourceId",$res);
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