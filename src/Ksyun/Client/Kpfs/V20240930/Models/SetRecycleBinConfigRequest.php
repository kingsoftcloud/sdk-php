<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetRecycleBinConfigRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FileSystemId" => null,
         /**String**/
        "Enabled" => null,
         /**Int**/
        "ExpireTime" => null,
         /**String**/
        "ExpireType" => null,
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            if(is_bool($param["Enabled"])){
                $this->RequestParams["Enabled"] = $param["Enabled"] ? "true" : "false";
            } else {
                $this->RequestParams["Enabled"] = $param["Enabled"];
            }
        }
        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            if(is_bool($param["ExpireTime"])){
                $this->RequestParams["ExpireTime"] = $param["ExpireTime"] ? "true" : "false";
            } else {
                $this->RequestParams["ExpireTime"] = $param["ExpireTime"];
            }
        }
        if (array_key_exists("ExpireType",$param) and $param["ExpireType"] !== null) {
            if(is_bool($param["ExpireType"])){
                $this->RequestParams["ExpireType"] = $param["ExpireType"] ? "true" : "false";
            } else {
                $this->RequestParams["ExpireType"] = $param["ExpireType"];
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