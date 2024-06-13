<?php
namespace  Ksyun\Client\Postgresql\V20181225\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeDBInstancesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBInstanceIdentifier" => null,
         /**String**/
        "DBInstanceType" => null,
         /**String**/
        "Keyword" => null,
         /**Int**/
        "Marker" => null,
         /**Int**/
        "MaxRecords" => null,
         /**String**/
        "GroupId" => null,
         /**String**/
        "ProjectId" => null,
         /**String**/
        "DBInstanceIdentifierIn" => null,
         /**String**/
        "DBInstanceNameIn" => null,
         /**String**/
        "VipIn" => null,
         /**Int**/
        "ExpiryDateLessThan" => null,
         /**String**/
        "Order" => null,
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
        if (array_key_exists("DBInstanceType",$param) and $param["DBInstanceType"] !== null) {
            if(is_bool($param["DBInstanceType"])){
                $this->RequestParams["DBInstanceType"] = $param["DBInstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceType"] = $param["DBInstanceType"];
            }
        }
        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            if(is_bool($param["Keyword"])){
                $this->RequestParams["Keyword"] = $param["Keyword"] ? "true" : "false";
            } else {
                $this->RequestParams["Keyword"] = $param["Keyword"];
            }
        }
        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            if(is_bool($param["Marker"])){
                $this->RequestParams["Marker"] = $param["Marker"] ? "true" : "false";
            } else {
                $this->RequestParams["Marker"] = $param["Marker"];
            }
        }
        if (array_key_exists("MaxRecords",$param) and $param["MaxRecords"] !== null) {
            if(is_bool($param["MaxRecords"])){
                $this->RequestParams["MaxRecords"] = $param["MaxRecords"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxRecords"] = $param["MaxRecords"];
            }
        }
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            if(is_bool($param["GroupId"])){
                $this->RequestParams["GroupId"] = $param["GroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["GroupId"] = $param["GroupId"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("DBInstanceIdentifierIn",$param) and $param["DBInstanceIdentifierIn"] !== null) {
            if(is_bool($param["DBInstanceIdentifierIn"])){
                $this->RequestParams["DBInstanceIdentifierIn"] = $param["DBInstanceIdentifierIn"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceIdentifierIn"] = $param["DBInstanceIdentifierIn"];
            }
        }
        if (array_key_exists("DBInstanceNameIn",$param) and $param["DBInstanceNameIn"] !== null) {
            if(is_bool($param["DBInstanceNameIn"])){
                $this->RequestParams["DBInstanceNameIn"] = $param["DBInstanceNameIn"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceNameIn"] = $param["DBInstanceNameIn"];
            }
        }
        if (array_key_exists("VipIn",$param) and $param["VipIn"] !== null) {
            if(is_bool($param["VipIn"])){
                $this->RequestParams["VipIn"] = $param["VipIn"] ? "true" : "false";
            } else {
                $this->RequestParams["VipIn"] = $param["VipIn"];
            }
        }
        if (array_key_exists("ExpiryDateLessThan",$param) and $param["ExpiryDateLessThan"] !== null) {
            if(is_bool($param["ExpiryDateLessThan"])){
                $this->RequestParams["ExpiryDateLessThan"] = $param["ExpiryDateLessThan"] ? "true" : "false";
            } else {
                $this->RequestParams["ExpiryDateLessThan"] = $param["ExpiryDateLessThan"];
            }
        }
        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            if(is_bool($param["Order"])){
                $this->RequestParams["Order"] = $param["Order"] ? "true" : "false";
            } else {
                $this->RequestParams["Order"] = $param["Order"];
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