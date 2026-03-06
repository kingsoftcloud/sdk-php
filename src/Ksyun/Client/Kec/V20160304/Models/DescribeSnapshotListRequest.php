<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeSnapshotListRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SnapshotName" => null,
         /**String**/
        "SnapshotType" => null,
         /**String**/
        "Sort" => null,
         /**Int**/
        "PageNum" => null,
         /**Int**/
        "PageSize" => null,
    ];

     /**特殊参数类型:Filter**/
    public $FileSystemId = [];
      /**特殊参数类型:Filter**/
    public $SnapshotId = [];
 
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
            $res = $this->formatFilterParams("FileSystemId",$param["FileSystemId"]);
            $this->_unserialize("FileSystemId",$res);
        }
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $res = $this->formatFilterParams("SnapshotId",$param["SnapshotId"]);
            $this->_unserialize("SnapshotId",$res);
        }
        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            if(is_bool($param["SnapshotName"])){
                $this->RequestParams["SnapshotName"] = $param["SnapshotName"] ? "true" : "false";
            } else {
                $this->RequestParams["SnapshotName"] = $param["SnapshotName"];
            }
        }
        if (array_key_exists("SnapshotType",$param) and $param["SnapshotType"] !== null) {
            if(is_bool($param["SnapshotType"])){
                $this->RequestParams["SnapshotType"] = $param["SnapshotType"] ? "true" : "false";
            } else {
                $this->RequestParams["SnapshotType"] = $param["SnapshotType"];
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