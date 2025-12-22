<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifySnapshotTypeRequest extends BaseModel
{
    public $RequestParams = [
         /**Array**/
        "SnapshotIds" => null,
         /**String**/
        "SnapshotId" => null,
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
        if (array_key_exists("SnapshotIds",$param) and $param["SnapshotIds"] !== null) {
            if(is_bool($param["SnapshotIds"])){
                $this->RequestParams["SnapshotIds"] = $param["SnapshotIds"] ? "true" : "false";
            } else {
                $this->RequestParams["SnapshotIds"] = $param["SnapshotIds"];
            }
        }
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            if(is_bool($param["SnapshotId"])){
                $this->RequestParams["SnapshotId"] = $param["SnapshotId"] ? "true" : "false";
            } else {
                $this->RequestParams["SnapshotId"] = $param["SnapshotId"];
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