<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SlowLogDetailRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBInstanceIdentifier" => null,
         /**String**/
        "StartTime" => null,
         /**String**/
        "EndTime" => null,
         /**String**/
        "SortBy" => null,
         /**String**/
        "SortWay" => null,
         /**String**/
        "HeadKey" => null,
         /**String**/
        "FingerPrint" => null,
         /**String**/
        "checksum" => null,
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            if(is_bool($param["StartTime"])){
                $this->RequestParams["StartTime"] = $param["StartTime"] ? "true" : "false";
            } else {
                $this->RequestParams["StartTime"] = $param["StartTime"];
            }
        }
        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            if(is_bool($param["EndTime"])){
                $this->RequestParams["EndTime"] = $param["EndTime"] ? "true" : "false";
            } else {
                $this->RequestParams["EndTime"] = $param["EndTime"];
            }
        }
        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            if(is_bool($param["SortBy"])){
                $this->RequestParams["SortBy"] = $param["SortBy"] ? "true" : "false";
            } else {
                $this->RequestParams["SortBy"] = $param["SortBy"];
            }
        }
        if (array_key_exists("SortWay",$param) and $param["SortWay"] !== null) {
            if(is_bool($param["SortWay"])){
                $this->RequestParams["SortWay"] = $param["SortWay"] ? "true" : "false";
            } else {
                $this->RequestParams["SortWay"] = $param["SortWay"];
            }
        }
        if (array_key_exists("HeadKey",$param) and $param["HeadKey"] !== null) {
            if(is_bool($param["HeadKey"])){
                $this->RequestParams["HeadKey"] = $param["HeadKey"] ? "true" : "false";
            } else {
                $this->RequestParams["HeadKey"] = $param["HeadKey"];
            }
        }
        if (array_key_exists("FingerPrint",$param) and $param["FingerPrint"] !== null) {
            if(is_bool($param["FingerPrint"])){
                $this->RequestParams["FingerPrint"] = $param["FingerPrint"] ? "true" : "false";
            } else {
                $this->RequestParams["FingerPrint"] = $param["FingerPrint"];
            }
        }
        if (array_key_exists("checksum",$param) and $param["checksum"] !== null) {
            if(is_bool($param["checksum"])){
                $this->RequestParams["checksum"] = $param["checksum"] ? "true" : "false";
            } else {
                $this->RequestParams["checksum"] = $param["checksum"];
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