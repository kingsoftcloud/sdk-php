<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetFileSystemResourceProtectRequest extends BaseModel
{
    public $RequestParams = [
         /**Array**/
        "FileSystemIds" => null,
         /**Boolean**/
        "IsProtection" => null,
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
        if (array_key_exists("FileSystemIds",$param) and $param["FileSystemIds"] !== null) {
            if(is_bool($param["FileSystemIds"])){
                $this->RequestParams["FileSystemIds"] = $param["FileSystemIds"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSystemIds"] = $param["FileSystemIds"];
            }
        }
        if (array_key_exists("IsProtection",$param) and $param["IsProtection"] !== null) {
            if(is_bool($param["IsProtection"])){
                $this->RequestParams["IsProtection"] = $param["IsProtection"] ? "true" : "false";
            } else {
                $this->RequestParams["IsProtection"] = $param["IsProtection"];
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