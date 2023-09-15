<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyInstanceAccountPrivilegesActionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBInstanceIdentifier" => null,
         /**String**/
        "InstanceAccountName" => null,
         /**Array**/
        "InstanceAccountPrivileges" => null,
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
        if (array_key_exists("DBInstanceIdentifier",$param) and $param["DBInstanceIdentifier"] !== null) {
            if(is_bool($param["DBInstanceIdentifier"])){
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"];
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
            if(is_bool($param["InstanceAccountPrivileges"])){
                $this->RequestParams["InstanceAccountPrivileges"] = $param["InstanceAccountPrivileges"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceAccountPrivileges"] = $param["InstanceAccountPrivileges"];
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