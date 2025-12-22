<?php
namespace  Ksyun\Client\Postgresql\V20181225\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateInstanceDatabaseRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBInstanceIdentifier" => null,
         /**String**/
        "InstanceDatabaseName" => null,
         /**String**/
        "InstanceDatabaseCollation" => null,
         /**String**/
        "InstanceDatabaseCharacterSet" => null,
         /**String**/
        "InstanceDatabaseCharacterSetType" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "InstanceDatabaseOwner" => null,
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
        if (array_key_exists("DBInstanceIdentifier",$param) and $param["DBInstanceIdentifier"] !== null) {
            if(is_bool($param["DBInstanceIdentifier"])){
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"];
            }
        }
        if (array_key_exists("InstanceDatabaseName",$param) and $param["InstanceDatabaseName"] !== null) {
            if(is_bool($param["InstanceDatabaseName"])){
                $this->RequestParams["InstanceDatabaseName"] = $param["InstanceDatabaseName"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceDatabaseName"] = $param["InstanceDatabaseName"];
            }
        }
        if (array_key_exists("InstanceDatabaseCollation",$param) and $param["InstanceDatabaseCollation"] !== null) {
            if(is_bool($param["InstanceDatabaseCollation"])){
                $this->RequestParams["InstanceDatabaseCollation"] = $param["InstanceDatabaseCollation"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceDatabaseCollation"] = $param["InstanceDatabaseCollation"];
            }
        }
        if (array_key_exists("InstanceDatabaseCharacterSet",$param) and $param["InstanceDatabaseCharacterSet"] !== null) {
            if(is_bool($param["InstanceDatabaseCharacterSet"])){
                $this->RequestParams["InstanceDatabaseCharacterSet"] = $param["InstanceDatabaseCharacterSet"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceDatabaseCharacterSet"] = $param["InstanceDatabaseCharacterSet"];
            }
        }
        if (array_key_exists("InstanceDatabaseCharacterSetType",$param) and $param["InstanceDatabaseCharacterSetType"] !== null) {
            if(is_bool($param["InstanceDatabaseCharacterSetType"])){
                $this->RequestParams["InstanceDatabaseCharacterSetType"] = $param["InstanceDatabaseCharacterSetType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceDatabaseCharacterSetType"] = $param["InstanceDatabaseCharacterSetType"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("InstanceDatabaseOwner",$param) and $param["InstanceDatabaseOwner"] !== null) {
            if(is_bool($param["InstanceDatabaseOwner"])){
                $this->RequestParams["InstanceDatabaseOwner"] = $param["InstanceDatabaseOwner"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceDatabaseOwner"] = $param["InstanceDatabaseOwner"];
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