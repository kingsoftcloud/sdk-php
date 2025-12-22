<?php
namespace  Ksyun\Client\Tidb\V20210520\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyAccountPrivilegesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "AccountName" => null,
         /**String**/
        "OldPrivileges" => null,
         /**String**/
        "NewPrivileges" => null,
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            if(is_bool($param["AccountName"])){
                $this->RequestParams["AccountName"] = $param["AccountName"] ? "true" : "false";
            } else {
                $this->RequestParams["AccountName"] = $param["AccountName"];
            }
        }
        if (array_key_exists("OldPrivileges",$param) and $param["OldPrivileges"] !== null) {
            if(is_bool($param["OldPrivileges"])){
                $this->RequestParams["OldPrivileges"] = $param["OldPrivileges"] ? "true" : "false";
            } else {
                $this->RequestParams["OldPrivileges"] = $param["OldPrivileges"];
            }
        }
        if (array_key_exists("NewPrivileges",$param) and $param["NewPrivileges"] !== null) {
            if(is_bool($param["NewPrivileges"])){
                $this->RequestParams["NewPrivileges"] = $param["NewPrivileges"] ? "true" : "false";
            } else {
                $this->RequestParams["NewPrivileges"] = $param["NewPrivileges"];
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