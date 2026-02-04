<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetPerformanceOneNfsAclRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FileSystemId" => null,
         /**String**/
        "ExportPath" => null,
         /**Array**/
        "Ips" => null,
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            if(is_bool($param["FileSystemId"])){
                $this->RequestParams["FileSystemId"] = $param["FileSystemId"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSystemId"] = $param["FileSystemId"];
            }
        }
        if (array_key_exists("ExportPath",$param) and $param["ExportPath"] !== null) {
            if(is_bool($param["ExportPath"])){
                $this->RequestParams["ExportPath"] = $param["ExportPath"] ? "true" : "false";
            } else {
                $this->RequestParams["ExportPath"] = $param["ExportPath"];
            }
        }
        if (array_key_exists("Ips",$param) and $param["Ips"] !== null) {
            if(is_bool($param["Ips"])){
                $this->RequestParams["Ips"] = $param["Ips"] ? "true" : "false";
            } else {
                $this->RequestParams["Ips"] = $param["Ips"];
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