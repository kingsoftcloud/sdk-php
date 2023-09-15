<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyInstanceAccountInfoRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBInstanceIdentifier" => null,
         /**String**/
        "InstanceAccountName" => null,
         /**String**/
        "InstanceAccountPassword" => null,
         /**String**/
        "InstanceAccountDescription" => null,
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
        if (array_key_exists("InstanceAccountName",$param) and $param["InstanceAccountName"] !== null) {
            if(is_bool($param["InstanceAccountName"])){
                $this->RequestParams["InstanceAccountName"] = $param["InstanceAccountName"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceAccountName"] = $param["InstanceAccountName"];
            }
        }
        if (array_key_exists("InstanceAccountPassword",$param) and $param["InstanceAccountPassword"] !== null) {
            if(is_bool($param["InstanceAccountPassword"])){
                $this->RequestParams["InstanceAccountPassword"] = $param["InstanceAccountPassword"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceAccountPassword"] = $param["InstanceAccountPassword"];
            }
        }
        if (array_key_exists("InstanceAccountDescription",$param) and $param["InstanceAccountDescription"] !== null) {
            if(is_bool($param["InstanceAccountDescription"])){
                $this->RequestParams["InstanceAccountDescription"] = $param["InstanceAccountDescription"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceAccountDescription"] = $param["InstanceAccountDescription"];
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