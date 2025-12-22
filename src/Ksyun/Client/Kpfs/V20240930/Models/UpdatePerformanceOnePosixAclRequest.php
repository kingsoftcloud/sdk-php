<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdatePerformanceOnePosixAclRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PosixAclId" => null,
         /**Array**/
        "FileSystemList" => null,
         /**Array**/
        "Ips" => null,
         /**Boolean**/
        "AutoMount" => null,
         /**String**/
        "Desc" => null,
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
        if (array_key_exists("PosixAclId",$param) and $param["PosixAclId"] !== null) {
            if(is_bool($param["PosixAclId"])){
                $this->RequestParams["PosixAclId"] = $param["PosixAclId"] ? "true" : "false";
            } else {
                $this->RequestParams["PosixAclId"] = $param["PosixAclId"];
            }
        }
        if (array_key_exists("FileSystemList",$param) and $param["FileSystemList"] !== null) {
            if(is_bool($param["FileSystemList"])){
                $this->RequestParams["FileSystemList"] = $param["FileSystemList"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSystemList"] = $param["FileSystemList"];
            }
        }
        if (array_key_exists("Ips",$param) and $param["Ips"] !== null) {
            if(is_bool($param["Ips"])){
                $this->RequestParams["Ips"] = $param["Ips"] ? "true" : "false";
            } else {
                $this->RequestParams["Ips"] = $param["Ips"];
            }
        }
        if (array_key_exists("AutoMount",$param) and $param["AutoMount"] !== null) {
            if(is_bool($param["AutoMount"])){
                $this->RequestParams["AutoMount"] = $param["AutoMount"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoMount"] = $param["AutoMount"];
            }
        }
        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            if(is_bool($param["Desc"])){
                $this->RequestParams["Desc"] = $param["Desc"] ? "true" : "false";
            } else {
                $this->RequestParams["Desc"] = $param["Desc"];
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