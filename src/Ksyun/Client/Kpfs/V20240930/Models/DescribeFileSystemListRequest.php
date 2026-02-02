<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeFileSystemListRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Region" => null,
         /**String**/
        "FileSystemName" => null,
         /**String**/
        "FileSystemIds" => null,
         /**String**/
        "StoreClasses" => null,
         /**String**/
        "ProjectId" => null,
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            if(is_bool($param["Region"])){
                $this->RequestParams["Region"] = $param["Region"] ? "true" : "false";
            } else {
                $this->RequestParams["Region"] = $param["Region"];
            }
        }
        if (array_key_exists("FileSystemName",$param) and $param["FileSystemName"] !== null) {
            if(is_bool($param["FileSystemName"])){
                $this->RequestParams["FileSystemName"] = $param["FileSystemName"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSystemName"] = $param["FileSystemName"];
            }
        }
        if (array_key_exists("FileSystemIds",$param) and $param["FileSystemIds"] !== null) {
            if(is_bool($param["FileSystemIds"])){
                $this->RequestParams["FileSystemIds"] = $param["FileSystemIds"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSystemIds"] = $param["FileSystemIds"];
            }
        }
        if (array_key_exists("StoreClasses",$param) and $param["StoreClasses"] !== null) {
            if(is_bool($param["StoreClasses"])){
                $this->RequestParams["StoreClasses"] = $param["StoreClasses"] ? "true" : "false";
            } else {
                $this->RequestParams["StoreClasses"] = $param["StoreClasses"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
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