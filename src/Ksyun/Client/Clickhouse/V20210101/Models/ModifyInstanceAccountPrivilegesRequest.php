<?php
namespace  Ksyun\Client\Clickhouse\V20210101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyInstanceAccountPrivilegesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "InstanceAccountName" => null,
    ];

     /**特殊参数类型:Filter**/
    public $InstanceAccountPrivileges = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("InstanceAccountName",$param) and $param["InstanceAccountName"] !== null) {
            if(is_bool($param["InstanceAccountName"])){
                $this->RequestParams["InstanceAccountName"] = $param["InstanceAccountName"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceAccountName"] = $param["InstanceAccountName"];
            }
        }
        if (array_key_exists("InstanceAccountPrivileges",$param) and $param["InstanceAccountPrivileges"] !== null) {
            $res = $this->formatFilterParams("InstanceAccountPrivileges",$param["InstanceAccountPrivileges"]);
            $this->_unserialize("InstanceAccountPrivileges",$res);
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