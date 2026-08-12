<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteRecycledFilesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FileSystemId" => null,
         /**String**/
        "RecycledPath" => null,
         /**Array**/
        "Files" => null,
         /**Array**/
        "Inodes" => null,
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
        if (array_key_exists("RecycledPath",$param) and $param["RecycledPath"] !== null) {
            if(is_bool($param["RecycledPath"])){
                $this->RequestParams["RecycledPath"] = $param["RecycledPath"] ? "true" : "false";
            } else {
                $this->RequestParams["RecycledPath"] = $param["RecycledPath"];
            }
        }
        if (array_key_exists("Files",$param) and $param["Files"] !== null) {
            if(is_bool($param["Files"])){
                $this->RequestParams["Files"] = $param["Files"] ? "true" : "false";
            } else {
                $this->RequestParams["Files"] = $param["Files"];
            }
        }
        if (array_key_exists("Inodes",$param) and $param["Inodes"] !== null) {
            if(is_bool($param["Inodes"])){
                $this->RequestParams["Inodes"] = $param["Inodes"] ? "true" : "false";
            } else {
                $this->RequestParams["Inodes"] = $param["Inodes"];
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