<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

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
        "DBInstanceStatus" => null,
         /**String**/
        "Keyword" => null,
         /**String**/
        "Order" => null,
         /**String**/
        "ProjectId" => null,
         /**Int**/
        "Marker" => null,
         /**Int**/
        "MaxRecords" => null,
         /**Int**/
        "ExpiryDateLessThan" => null,
    ];

     /**特殊参数类型:Filter**/
    public $DBInstanceIdentifierIn = [];
      /**特殊参数类型:Filter**/
    public $DBInstanceNameIn = [];
      /**特殊参数类型:Filter**/
    public $VipIn = [];
      /**特殊参数类型:Filter**/
    public $EIPIn = [];
 
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
        if (array_key_exists("DBInstanceType",$param) and $param["DBInstanceType"] !== null) {
            if(is_bool($param["DBInstanceType"])){
                $this->RequestParams["DBInstanceType"] = $param["DBInstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceType"] = $param["DBInstanceType"];
            }
        }
        if (array_key_exists("DBInstanceStatus",$param) and $param["DBInstanceStatus"] !== null) {
            if(is_bool($param["DBInstanceStatus"])){
                $this->RequestParams["DBInstanceStatus"] = $param["DBInstanceStatus"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceStatus"] = $param["DBInstanceStatus"];
            }
        }
        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            if(is_bool($param["Keyword"])){
                $this->RequestParams["Keyword"] = $param["Keyword"] ? "true" : "false";
            } else {
                $this->RequestParams["Keyword"] = $param["Keyword"];
            }
        }
        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            if(is_bool($param["Order"])){
                $this->RequestParams["Order"] = $param["Order"] ? "true" : "false";
            } else {
                $this->RequestParams["Order"] = $param["Order"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
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
        if (array_key_exists("DBInstanceIdentifierIn",$param) and $param["DBInstanceIdentifierIn"] !== null) {
            $res = $this->formatFilterParams("DBInstanceIdentifierIn",$param["DBInstanceIdentifierIn"]);
            $this->_unserialize("DBInstanceIdentifierIn",$res);
        }
        if (array_key_exists("DBInstanceNameIn",$param) and $param["DBInstanceNameIn"] !== null) {
            $res = $this->formatFilterParams("DBInstanceNameIn",$param["DBInstanceNameIn"]);
            $this->_unserialize("DBInstanceNameIn",$res);
        }
        if (array_key_exists("VipIn",$param) and $param["VipIn"] !== null) {
            $res = $this->formatFilterParams("VipIn",$param["VipIn"]);
            $this->_unserialize("VipIn",$res);
        }
        if (array_key_exists("EIPIn",$param) and $param["EIPIn"] !== null) {
            $res = $this->formatFilterParams("EIPIn",$param["EIPIn"]);
            $this->_unserialize("EIPIn",$res);
        }
        if (array_key_exists("ExpiryDateLessThan",$param) and $param["ExpiryDateLessThan"] !== null) {
            if(is_bool($param["ExpiryDateLessThan"])){
                $this->RequestParams["ExpiryDateLessThan"] = $param["ExpiryDateLessThan"] ? "true" : "false";
            } else {
                $this->RequestParams["ExpiryDateLessThan"] = $param["ExpiryDateLessThan"];
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