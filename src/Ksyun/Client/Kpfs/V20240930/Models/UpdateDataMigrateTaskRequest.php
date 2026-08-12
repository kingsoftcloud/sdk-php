<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdateDataMigrateTaskRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "TaskId" => null,
         /**String**/
        "TaskName" => null,
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            if(is_bool($param["TaskId"])){
                $this->RequestParams["TaskId"] = $param["TaskId"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskId"] = $param["TaskId"];
            }
        }
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            if(is_bool($param["TaskName"])){
                $this->RequestParams["TaskName"] = $param["TaskName"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskName"] = $param["TaskName"];
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