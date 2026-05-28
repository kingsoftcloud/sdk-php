<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeFileSystemClientInfoRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FileSystemId" => null,
         /**String**/
        "CacheGroup" => null,
         /**String**/
        "CacheGroupRole" => null,
         /**String**/
        "HostNamePrefix" => null,
         /**Int**/
        "PageSize" => null,
         /**Int**/
        "PageNum" => null,
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
        if (array_key_exists("CacheGroup",$param) and $param["CacheGroup"] !== null) {
            if(is_bool($param["CacheGroup"])){
                $this->RequestParams["CacheGroup"] = $param["CacheGroup"] ? "true" : "false";
            } else {
                $this->RequestParams["CacheGroup"] = $param["CacheGroup"];
            }
        }
        if (array_key_exists("CacheGroupRole",$param) and $param["CacheGroupRole"] !== null) {
            if(is_bool($param["CacheGroupRole"])){
                $this->RequestParams["CacheGroupRole"] = $param["CacheGroupRole"] ? "true" : "false";
            } else {
                $this->RequestParams["CacheGroupRole"] = $param["CacheGroupRole"];
            }
        }
        if (array_key_exists("HostNamePrefix",$param) and $param["HostNamePrefix"] !== null) {
            if(is_bool($param["HostNamePrefix"])){
                $this->RequestParams["HostNamePrefix"] = $param["HostNamePrefix"] ? "true" : "false";
            } else {
                $this->RequestParams["HostNamePrefix"] = $param["HostNamePrefix"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
            }
        }
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            if(is_bool($param["PageNum"])){
                $this->RequestParams["PageNum"] = $param["PageNum"] ? "true" : "false";
            } else {
                $this->RequestParams["PageNum"] = $param["PageNum"];
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