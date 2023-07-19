<?php
namespace  Ksyun\Client\Monitor\V20210101\Models;

use Ksyun\Common\BaseModel;

class GetAlertUserRequest extends BaseModel
{
    public $RequestParams = [
    ];

     /**特殊参数类型:Filter**/
    public $UserGrpId = [];
 
    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("UserGrpId",$param) and $param["UserGrpId"] !== null) {
            $res = $this->formatFilterParams("UserGrpId",$param["UserGrpId"]);
            $this->_unserialize("UserGrpId",$res);
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