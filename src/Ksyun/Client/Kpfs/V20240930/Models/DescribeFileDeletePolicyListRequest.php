<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeFileDeletePolicyListRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FileSystemId" => null,
         /**String**/
        "DeletePolicyStatus" => null,
         /**String**/
        "DirPath" => null,
         /**Array**/
        "FileDeletePolicyId" => null,
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            if(is_bool($param["FileSystemId"])){
                $this->RequestParams["FileSystemId"] = $param["FileSystemId"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSystemId"] = $param["FileSystemId"];
            }
        }
        if (array_key_exists("DeletePolicyStatus",$param) and $param["DeletePolicyStatus"] !== null) {
            if(is_bool($param["DeletePolicyStatus"])){
                $this->RequestParams["DeletePolicyStatus"] = $param["DeletePolicyStatus"] ? "true" : "false";
            } else {
                $this->RequestParams["DeletePolicyStatus"] = $param["DeletePolicyStatus"];
            }
        }
        if (array_key_exists("DirPath",$param) and $param["DirPath"] !== null) {
            if(is_bool($param["DirPath"])){
                $this->RequestParams["DirPath"] = $param["DirPath"] ? "true" : "false";
            } else {
                $this->RequestParams["DirPath"] = $param["DirPath"];
            }
        }
        if (array_key_exists("FileDeletePolicyId",$param) and $param["FileDeletePolicyId"] !== null) {
            if(is_bool($param["FileDeletePolicyId"])){
                $this->RequestParams["FileDeletePolicyId"] = $param["FileDeletePolicyId"] ? "true" : "false";
            } else {
                $this->RequestParams["FileDeletePolicyId"] = $param["FileDeletePolicyId"];
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