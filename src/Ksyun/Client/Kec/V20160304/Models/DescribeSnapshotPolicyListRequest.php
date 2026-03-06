<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeSnapshotPolicyListRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FileSystemId" => null,
         /**String**/
        "AutoSnapshotPolicyName" => null,
         /**String**/
        "Sort" => null,
         /**Int**/
        "PageNum" => null,
         /**Int**/
        "PageSize" => null,
    ];

     /**特殊参数类型:Filter**/
    public $AutoSnapshotPolicyId = [];
 
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
        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $res = $this->formatFilterParams("AutoSnapshotPolicyId",$param["AutoSnapshotPolicyId"]);
            $this->_unserialize("AutoSnapshotPolicyId",$res);
        }
        if (array_key_exists("AutoSnapshotPolicyName",$param) and $param["AutoSnapshotPolicyName"] !== null) {
            if(is_bool($param["AutoSnapshotPolicyName"])){
                $this->RequestParams["AutoSnapshotPolicyName"] = $param["AutoSnapshotPolicyName"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoSnapshotPolicyName"] = $param["AutoSnapshotPolicyName"];
            }
        }
        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            if(is_bool($param["Sort"])){
                $this->RequestParams["Sort"] = $param["Sort"] ? "true" : "false";
            } else {
                $this->RequestParams["Sort"] = $param["Sort"];
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