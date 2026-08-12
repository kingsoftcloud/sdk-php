<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateDataFlowStrategyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FileSystemId" => null,
         /**String**/
        "StrategyName" => null,
         /**String**/
        "StrategyType" => null,
         /**String**/
        "Bind" => null,
         /**String**/
        "DataLoadingMode" => null,
         /**String**/
        "DirPath" => null,
         /**String**/
        "Bucket" => null,
         /**String**/
        "BucketPrefix" => null,
         /**String**/
        "DuplicateProcess" => null,
         /**String**/
        "Subscribe" => null,
         /**Boolean**/
        "CleanSourceFile" => null,
         /**String**/
        "BandWidthLimit" => null,
         /**Int**/
        "ArchiveRule" => null,
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
        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            if(is_bool($param["StrategyName"])){
                $this->RequestParams["StrategyName"] = $param["StrategyName"] ? "true" : "false";
            } else {
                $this->RequestParams["StrategyName"] = $param["StrategyName"];
            }
        }
        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            if(is_bool($param["StrategyType"])){
                $this->RequestParams["StrategyType"] = $param["StrategyType"] ? "true" : "false";
            } else {
                $this->RequestParams["StrategyType"] = $param["StrategyType"];
            }
        }
        if (array_key_exists("Bind",$param) and $param["Bind"] !== null) {
            if(is_bool($param["Bind"])){
                $this->RequestParams["Bind"] = $param["Bind"] ? "true" : "false";
            } else {
                $this->RequestParams["Bind"] = $param["Bind"];
            }
        }
        if (array_key_exists("DataLoadingMode",$param) and $param["DataLoadingMode"] !== null) {
            if(is_bool($param["DataLoadingMode"])){
                $this->RequestParams["DataLoadingMode"] = $param["DataLoadingMode"] ? "true" : "false";
            } else {
                $this->RequestParams["DataLoadingMode"] = $param["DataLoadingMode"];
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
        if (array_key_exists("DuplicateProcess",$param) and $param["DuplicateProcess"] !== null) {
            if(is_bool($param["DuplicateProcess"])){
                $this->RequestParams["DuplicateProcess"] = $param["DuplicateProcess"] ? "true" : "false";
            } else {
                $this->RequestParams["DuplicateProcess"] = $param["DuplicateProcess"];
            }
        }
        if (array_key_exists("Subscribe",$param) and $param["Subscribe"] !== null) {
            if(is_bool($param["Subscribe"])){
                $this->RequestParams["Subscribe"] = $param["Subscribe"] ? "true" : "false";
            } else {
                $this->RequestParams["Subscribe"] = $param["Subscribe"];
            }
        }
        if (array_key_exists("CleanSourceFile",$param) and $param["CleanSourceFile"] !== null) {
            if(is_bool($param["CleanSourceFile"])){
                $this->RequestParams["CleanSourceFile"] = $param["CleanSourceFile"] ? "true" : "false";
            } else {
                $this->RequestParams["CleanSourceFile"] = $param["CleanSourceFile"];
            }
        }
        if (array_key_exists("BandWidthLimit",$param) and $param["BandWidthLimit"] !== null) {
            if(is_bool($param["BandWidthLimit"])){
                $this->RequestParams["BandWidthLimit"] = $param["BandWidthLimit"] ? "true" : "false";
            } else {
                $this->RequestParams["BandWidthLimit"] = $param["BandWidthLimit"];
            }
        }
        if (array_key_exists("ArchiveRule",$param) and $param["ArchiveRule"] !== null) {
            if(is_bool($param["ArchiveRule"])){
                $this->RequestParams["ArchiveRule"] = $param["ArchiveRule"] ? "true" : "false";
            } else {
                $this->RequestParams["ArchiveRule"] = $param["ArchiveRule"];
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