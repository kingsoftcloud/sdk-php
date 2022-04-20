<?php
namespace  Ksyun\Client\Kad\V20161122\Models;

use Ksyun\Common\BaseModel;

class DescribeForwardConfRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "KadId" => null,
    ];

     /**特殊参数类型:Filter**/
    public $ForwardConfId = [];
 
    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("KadId",$param) and $param["KadId"] !== null) {
            if(is_bool($param["KadId"])){
                $this->RequestParams["KadId"] = $param["KadId"] ? "true" : "false";
            } else {
                $this->RequestParams["KadId"] = $param["KadId"];
            }
        }
        if (array_key_exists("ForwardConfId",$param) and $param["ForwardConfId"] !== null) {
            $res = $this->formatFilterParams("ForwardConfId",$param["ForwardConfId"]);
            $this->_unserialize("ForwardConfId",$res);
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