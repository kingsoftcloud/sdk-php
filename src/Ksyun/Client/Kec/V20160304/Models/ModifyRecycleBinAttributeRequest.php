<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyRecycleBinAttributeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FileSystemId" => null,
         /**Boolean**/
        "IsTrashEnable" => null,
         /**Boolean**/
        "IsTrashVisible" => null,
         /**Int**/
        "IntervalTrash" => null,
         /**Int**/
        "RecycleOpPermission" => null,
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
        if (array_key_exists("IsTrashEnable",$param) and $param["IsTrashEnable"] !== null) {
            if(is_bool($param["IsTrashEnable"])){
                $this->RequestParams["IsTrashEnable"] = $param["IsTrashEnable"] ? "true" : "false";
            } else {
                $this->RequestParams["IsTrashEnable"] = $param["IsTrashEnable"];
            }
        }
        if (array_key_exists("IsTrashVisible",$param) and $param["IsTrashVisible"] !== null) {
            if(is_bool($param["IsTrashVisible"])){
                $this->RequestParams["IsTrashVisible"] = $param["IsTrashVisible"] ? "true" : "false";
            } else {
                $this->RequestParams["IsTrashVisible"] = $param["IsTrashVisible"];
            }
        }
        if (array_key_exists("IntervalTrash",$param) and $param["IntervalTrash"] !== null) {
            if(is_bool($param["IntervalTrash"])){
                $this->RequestParams["IntervalTrash"] = $param["IntervalTrash"] ? "true" : "false";
            } else {
                $this->RequestParams["IntervalTrash"] = $param["IntervalTrash"];
            }
        }
        if (array_key_exists("RecycleOpPermission",$param) and $param["RecycleOpPermission"] !== null) {
            if(is_bool($param["RecycleOpPermission"])){
                $this->RequestParams["RecycleOpPermission"] = $param["RecycleOpPermission"] ? "true" : "false";
            } else {
                $this->RequestParams["RecycleOpPermission"] = $param["RecycleOpPermission"];
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