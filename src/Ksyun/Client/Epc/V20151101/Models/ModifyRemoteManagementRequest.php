<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyRemoteManagementRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "RemoteManagementId" => null,
         /**String**/
        "DynamicCode" => null,
         /**String**/
        "Pin" => null,
         /**String**/
        "NewPhoneNumber" => null,
         /**String**/
        "NewPin" => null,
         /**String**/
        "Name" => null,
         /**Long**/
        "VersionId" => null,
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
        if (array_key_exists("RemoteManagementId",$param) and $param["RemoteManagementId"] !== null) {
            if(is_bool($param["RemoteManagementId"])){
                $this->RequestParams["RemoteManagementId"] = $param["RemoteManagementId"] ? "true" : "false";
            } else {
                $this->RequestParams["RemoteManagementId"] = $param["RemoteManagementId"];
            }
        }
        if (array_key_exists("DynamicCode",$param) and $param["DynamicCode"] !== null) {
            if(is_bool($param["DynamicCode"])){
                $this->RequestParams["DynamicCode"] = $param["DynamicCode"] ? "true" : "false";
            } else {
                $this->RequestParams["DynamicCode"] = $param["DynamicCode"];
            }
        }
        if (array_key_exists("Pin",$param) and $param["Pin"] !== null) {
            if(is_bool($param["Pin"])){
                $this->RequestParams["Pin"] = $param["Pin"] ? "true" : "false";
            } else {
                $this->RequestParams["Pin"] = $param["Pin"];
            }
        }
        if (array_key_exists("NewPhoneNumber",$param) and $param["NewPhoneNumber"] !== null) {
            if(is_bool($param["NewPhoneNumber"])){
                $this->RequestParams["NewPhoneNumber"] = $param["NewPhoneNumber"] ? "true" : "false";
            } else {
                $this->RequestParams["NewPhoneNumber"] = $param["NewPhoneNumber"];
            }
        }
        if (array_key_exists("NewPin",$param) and $param["NewPin"] !== null) {
            if(is_bool($param["NewPin"])){
                $this->RequestParams["NewPin"] = $param["NewPin"] ? "true" : "false";
            } else {
                $this->RequestParams["NewPin"] = $param["NewPin"];
            }
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            if(is_bool($param["Name"])){
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            if(is_bool($param["VersionId"])){
                $this->RequestParams["VersionId"] = $param["VersionId"] ? "true" : "false";
            } else {
                $this->RequestParams["VersionId"] = $param["VersionId"];
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