<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateDataMigrateTaskRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FileSystemId" => null,
         /**String**/
        "TaskName" => null,
         /**String**/
        "TaskType" => null,
         /**Object**/
        "BucketConfig" => null,
         /**String**/
        "DirPath" => null,
         /**String**/
        "Description" => null,
         /**Int**/
        "BandWidthLimit" => null,
         /**Boolean**/
        "CleanSourceFile" => null,
         /**String**/
        "ExportTaskPeriodEnabled" => null,
         /**Object**/
        "ExportTaskPeriodConfig" => null,
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            if(is_bool($param["FileSystemId"])){
                $this->RequestParams["FileSystemId"] = $param["FileSystemId"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSystemId"] = $param["FileSystemId"];
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
        if (array_key_exists("BucketConfig",$param) and $param["BucketConfig"] !== null) {
            if(is_bool($param["BucketConfig"])){
                $this->RequestParams["BucketConfig"] = $param["BucketConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["BucketConfig"] = $param["BucketConfig"];
            }
        }
        if (array_key_exists("DirPath",$param) and $param["DirPath"] !== null) {
            if(is_bool($param["DirPath"])){
                $this->RequestParams["DirPath"] = $param["DirPath"] ? "true" : "false";
            } else {
                $this->RequestParams["DirPath"] = $param["DirPath"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("BandWidthLimit",$param) and $param["BandWidthLimit"] !== null) {
            if(is_bool($param["BandWidthLimit"])){
                $this->RequestParams["BandWidthLimit"] = $param["BandWidthLimit"] ? "true" : "false";
            } else {
                $this->RequestParams["BandWidthLimit"] = $param["BandWidthLimit"];
            }
        }
        if (array_key_exists("CleanSourceFile",$param) and $param["CleanSourceFile"] !== null) {
            if(is_bool($param["CleanSourceFile"])){
                $this->RequestParams["CleanSourceFile"] = $param["CleanSourceFile"] ? "true" : "false";
            } else {
                $this->RequestParams["CleanSourceFile"] = $param["CleanSourceFile"];
            }
        }
        if (array_key_exists("ExportTaskPeriodEnabled",$param) and $param["ExportTaskPeriodEnabled"] !== null) {
            if(is_bool($param["ExportTaskPeriodEnabled"])){
                $this->RequestParams["ExportTaskPeriodEnabled"] = $param["ExportTaskPeriodEnabled"] ? "true" : "false";
            } else {
                $this->RequestParams["ExportTaskPeriodEnabled"] = $param["ExportTaskPeriodEnabled"];
            }
        }
        if (array_key_exists("ExportTaskPeriodConfig",$param) and $param["ExportTaskPeriodConfig"] !== null) {
            if(is_bool($param["ExportTaskPeriodConfig"])){
                $this->RequestParams["ExportTaskPeriodConfig"] = $param["ExportTaskPeriodConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["ExportTaskPeriodConfig"] = $param["ExportTaskPeriodConfig"];
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