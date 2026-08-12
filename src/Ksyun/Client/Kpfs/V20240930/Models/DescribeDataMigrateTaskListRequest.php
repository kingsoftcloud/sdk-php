<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeDataMigrateTaskListRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FileSystemId" => null,
         /**String**/
        "TaskIds" => null,
         /**String**/
        "TaskName" => null,
         /**String**/
        "TaskType" => null,
         /**String**/
        "DirPath" => null,
         /**String**/
        "Bucket" => null,
         /**String**/
        "BucketPrefix" => null,
         /**Int**/
        "PageNum" => null,
         /**Int**/
        "PageSize" => null,
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            if(is_bool($param["FileSystemId"])){
                $this->RequestParams["FileSystemId"] = $param["FileSystemId"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSystemId"] = $param["FileSystemId"];
            }
        }
        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            if(is_bool($param["TaskIds"])){
                $this->RequestParams["TaskIds"] = $param["TaskIds"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskIds"] = $param["TaskIds"];
            }
        }
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            if(is_bool($param["TaskName"])){
                $this->RequestParams["TaskName"] = $param["TaskName"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskName"] = $param["TaskName"];
            }
        }
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            if(is_bool($param["TaskType"])){
                $this->RequestParams["TaskType"] = $param["TaskType"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskType"] = $param["TaskType"];
            }
        }
        if (array_key_exists("DirPath",$param) and $param["DirPath"] !== null) {
            if(is_bool($param["DirPath"])){
                $this->RequestParams["DirPath"] = $param["DirPath"] ? "true" : "false";
            } else {
                $this->RequestParams["DirPath"] = $param["DirPath"];
            }
        }
        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            if(is_bool($param["Bucket"])){
                $this->RequestParams["Bucket"] = $param["Bucket"] ? "true" : "false";
            } else {
                $this->RequestParams["Bucket"] = $param["Bucket"];
            }
        }
        if (array_key_exists("BucketPrefix",$param) and $param["BucketPrefix"] !== null) {
            if(is_bool($param["BucketPrefix"])){
                $this->RequestParams["BucketPrefix"] = $param["BucketPrefix"] ? "true" : "false";
            } else {
                $this->RequestParams["BucketPrefix"] = $param["BucketPrefix"];
            }
        }
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            if(is_bool($param["PageNum"])){
                $this->RequestParams["PageNum"] = $param["PageNum"] ? "true" : "false";
            } else {
                $this->RequestParams["PageNum"] = $param["PageNum"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
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