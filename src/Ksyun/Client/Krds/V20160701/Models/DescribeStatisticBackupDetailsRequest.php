<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeStatisticBackupDetailsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DataType" => null,
         /**String**/
        "BackupType" => null,
         /**Int**/
        "Marker" => null,
         /**Int**/
        "MaxRecords" => null,
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
        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            if(is_bool($param["DataType"])){
                $this->RequestParams["DataType"] = $param["DataType"] ? "true" : "false";
            } else {
                $this->RequestParams["DataType"] = $param["DataType"];
            }
        }
        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            if(is_bool($param["BackupType"])){
                $this->RequestParams["BackupType"] = $param["BackupType"] ? "true" : "false";
            } else {
                $this->RequestParams["BackupType"] = $param["BackupType"];
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