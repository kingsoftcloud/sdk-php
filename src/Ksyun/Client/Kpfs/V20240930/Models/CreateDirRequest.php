<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateDirRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FileSystemId" => null,
         /**String**/
        "StoreClass" => null,
         /**String**/
        "ClusterName" => null,
         /**String**/
        "FileSystemName" => null,
         /**String**/
        "DirPath" => null,
         /**Int**/
        "FileSysOwnerUserId" => null,
         /**Int**/
        "FileSysOwnerGroupId" => null,
         /**Int**/
        "FileSysPosixPermission" => null,
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
        if (array_key_exists("StoreClass",$param) and $param["StoreClass"] !== null) {
            if(is_bool($param["StoreClass"])){
                $this->RequestParams["StoreClass"] = $param["StoreClass"] ? "true" : "false";
            } else {
                $this->RequestParams["StoreClass"] = $param["StoreClass"];
            }
        }
        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            if(is_bool($param["ClusterName"])){
                $this->RequestParams["ClusterName"] = $param["ClusterName"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterName"] = $param["ClusterName"];
            }
        }
        if (array_key_exists("FileSystemName",$param) and $param["FileSystemName"] !== null) {
            if(is_bool($param["FileSystemName"])){
                $this->RequestParams["FileSystemName"] = $param["FileSystemName"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSystemName"] = $param["FileSystemName"];
            }
        }
        if (array_key_exists("DirPath",$param) and $param["DirPath"] !== null) {
            if(is_bool($param["DirPath"])){
                $this->RequestParams["DirPath"] = $param["DirPath"] ? "true" : "false";
            } else {
                $this->RequestParams["DirPath"] = $param["DirPath"];
            }
        }
        if (array_key_exists("FileSysOwnerUserId",$param) and $param["FileSysOwnerUserId"] !== null) {
            if(is_bool($param["FileSysOwnerUserId"])){
                $this->RequestParams["FileSysOwnerUserId"] = $param["FileSysOwnerUserId"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSysOwnerUserId"] = $param["FileSysOwnerUserId"];
            }
        }
        if (array_key_exists("FileSysOwnerGroupId",$param) and $param["FileSysOwnerGroupId"] !== null) {
            if(is_bool($param["FileSysOwnerGroupId"])){
                $this->RequestParams["FileSysOwnerGroupId"] = $param["FileSysOwnerGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSysOwnerGroupId"] = $param["FileSysOwnerGroupId"];
            }
        }
        if (array_key_exists("FileSysPosixPermission",$param) and $param["FileSysPosixPermission"] !== null) {
            if(is_bool($param["FileSysPosixPermission"])){
                $this->RequestParams["FileSysPosixPermission"] = $param["FileSysPosixPermission"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSysPosixPermission"] = $param["FileSysPosixPermission"];
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