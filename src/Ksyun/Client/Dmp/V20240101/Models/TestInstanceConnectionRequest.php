<?php
namespace  Ksyun\Client\Dmp\V20240101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class TestInstanceConnectionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "DatabaseType" => null,
         /**String**/
        "DatabaseVersion" => null,
         /**String**/
        "Username" => null,
         /**String**/
        "Password" => null,
         /**Boolean**/
        "UseSourceUser" => null,
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
        if (array_key_exists("DatabaseType",$param) and $param["DatabaseType"] !== null) {
            if(is_bool($param["DatabaseType"])){
                $this->RequestParams["DatabaseType"] = $param["DatabaseType"] ? "true" : "false";
            } else {
                $this->RequestParams["DatabaseType"] = $param["DatabaseType"];
            }
        }
        if (array_key_exists("DatabaseVersion",$param) and $param["DatabaseVersion"] !== null) {
            if(is_bool($param["DatabaseVersion"])){
                $this->RequestParams["DatabaseVersion"] = $param["DatabaseVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["DatabaseVersion"] = $param["DatabaseVersion"];
            }
        }
        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            if(is_bool($param["Username"])){
                $this->RequestParams["Username"] = $param["Username"] ? "true" : "false";
            } else {
                $this->RequestParams["Username"] = $param["Username"];
            }
        }
        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            if(is_bool($param["Password"])){
                $this->RequestParams["Password"] = $param["Password"] ? "true" : "false";
            } else {
                $this->RequestParams["Password"] = $param["Password"];
            }
        }
        if (array_key_exists("UseSourceUser",$param) and $param["UseSourceUser"] !== null) {
            if(is_bool($param["UseSourceUser"])){
                $this->RequestParams["UseSourceUser"] = $param["UseSourceUser"] ? "true" : "false";
            } else {
                $this->RequestParams["UseSourceUser"] = $param["UseSourceUser"];
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