<?php
namespace  Ksyun\Client\Influxdb\V20191010\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GrantAccountPrivilegeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "AccountName" => null,
         /**String**/
        "DatabaseName" => null,
         /**String**/
        "AccountPrivilege" => null,
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            if(is_bool($param["DatabaseName"])){
                $this->RequestParams["DatabaseName"] = $param["DatabaseName"] ? "true" : "false";
            } else {
                $this->RequestParams["DatabaseName"] = $param["DatabaseName"];
            }
        }
        if (array_key_exists("AccountPrivilege",$param) and $param["AccountPrivilege"] !== null) {
            if(is_bool($param["AccountPrivilege"])){
                $this->RequestParams["AccountPrivilege"] = $param["AccountPrivilege"] ? "true" : "false";
            } else {
                $this->RequestParams["AccountPrivilege"] = $param["AccountPrivilege"];
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