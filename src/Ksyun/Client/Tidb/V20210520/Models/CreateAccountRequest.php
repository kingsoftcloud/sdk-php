<?php
namespace  Ksyun\Client\Tidb\V20210520\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateAccountRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "AccountName" => null,
         /**String**/
        "AccountPassword" => null,
         /**String**/
        "Describe" => null,
         /**String**/
        "Privileges" => null,
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
        if (array_key_exists("AccountPassword",$param) and $param["AccountPassword"] !== null) {
            if(is_bool($param["AccountPassword"])){
                $this->RequestParams["AccountPassword"] = $param["AccountPassword"] ? "true" : "false";
            } else {
                $this->RequestParams["AccountPassword"] = $param["AccountPassword"];
            }
        }
        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            if(is_bool($param["Describe"])){
                $this->RequestParams["Describe"] = $param["Describe"] ? "true" : "false";
            } else {
                $this->RequestParams["Describe"] = $param["Describe"];
            }
        }
        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            if(is_bool($param["Privileges"])){
                $this->RequestParams["Privileges"] = $param["Privileges"] ? "true" : "false";
            } else {
                $this->RequestParams["Privileges"] = $param["Privileges"];
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