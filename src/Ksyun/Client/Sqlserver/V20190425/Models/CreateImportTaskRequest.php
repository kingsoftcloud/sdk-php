<?php
namespace  Ksyun\Client\Sqlserver\V20190425\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateImportTaskRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBInstanceIdentifier" => null,
         /**String**/
        "KS3Region" => null,
         /**String**/
        "KS3Bucket" => null,
         /**String**/
        "KS3Key" => null,
         /**String**/
        "KS3FileSize" => null,
         /**String**/
        "ImportTaskId" => null,
         /**String**/
        "DBName" => null,
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
        if (array_key_exists("KS3Region",$param) and $param["KS3Region"] !== null) {
            if(is_bool($param["KS3Region"])){
                $this->RequestParams["KS3Region"] = $param["KS3Region"] ? "true" : "false";
            } else {
                $this->RequestParams["KS3Region"] = $param["KS3Region"];
            }
        }
        if (array_key_exists("KS3Bucket",$param) and $param["KS3Bucket"] !== null) {
            if(is_bool($param["KS3Bucket"])){
                $this->RequestParams["KS3Bucket"] = $param["KS3Bucket"] ? "true" : "false";
            } else {
                $this->RequestParams["KS3Bucket"] = $param["KS3Bucket"];
            }
        }
        if (array_key_exists("KS3Key",$param) and $param["KS3Key"] !== null) {
            if(is_bool($param["KS3Key"])){
                $this->RequestParams["KS3Key"] = $param["KS3Key"] ? "true" : "false";
            } else {
                $this->RequestParams["KS3Key"] = $param["KS3Key"];
            }
        }
        if (array_key_exists("KS3FileSize",$param) and $param["KS3FileSize"] !== null) {
            if(is_bool($param["KS3FileSize"])){
                $this->RequestParams["KS3FileSize"] = $param["KS3FileSize"] ? "true" : "false";
            } else {
                $this->RequestParams["KS3FileSize"] = $param["KS3FileSize"];
            }
        }
        if (array_key_exists("ImportTaskId",$param) and $param["ImportTaskId"] !== null) {
            if(is_bool($param["ImportTaskId"])){
                $this->RequestParams["ImportTaskId"] = $param["ImportTaskId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImportTaskId"] = $param["ImportTaskId"];
            }
        }
        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            if(is_bool($param["DBName"])){
                $this->RequestParams["DBName"] = $param["DBName"] ? "true" : "false";
            } else {
                $this->RequestParams["DBName"] = $param["DBName"];
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