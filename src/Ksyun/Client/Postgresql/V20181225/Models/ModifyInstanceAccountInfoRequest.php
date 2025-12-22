<?php
namespace  Ksyun\Client\Postgresql\V20181225\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyInstanceAccountInfoRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBInstanceIdentifier" => null,
         /**String**/
        "AccountName" => null,
         /**String**/
        "AccountPassword" => null,
         /**String**/
        "AccountDescription" => null,
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
        if (array_key_exists("AccountDescription",$param) and $param["AccountDescription"] !== null) {
            if(is_bool($param["AccountDescription"])){
                $this->RequestParams["AccountDescription"] = $param["AccountDescription"] ? "true" : "false";
            } else {
                $this->RequestParams["AccountDescription"] = $param["AccountDescription"];
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