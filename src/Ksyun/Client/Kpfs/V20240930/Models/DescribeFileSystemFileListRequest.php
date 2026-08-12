<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeFileSystemFileListRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FileSystemId" => null,
         /**String**/
        "Dir" => null,
         /**String**/
        "FileName" => null,
         /**Long**/
        "PageNum" => null,
         /**Long**/
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
        if (array_key_exists("Dir",$param) and $param["Dir"] !== null) {
            if(is_bool($param["Dir"])){
                $this->RequestParams["Dir"] = $param["Dir"] ? "true" : "false";
            } else {
                $this->RequestParams["Dir"] = $param["Dir"];
            }
        }
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            if(is_bool($param["FileName"])){
                $this->RequestParams["FileName"] = $param["FileName"] ? "true" : "false";
            } else {
                $this->RequestParams["FileName"] = $param["FileName"];
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