<?php
namespace  Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyZoneRecordRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ZoneId" => null,
         /**String**/
        "RecordId" => null,
         /**Int**/
        "RecordTtl" => null,
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            if(is_bool($param["ZoneId"])){
                $this->RequestParams["ZoneId"] = $param["ZoneId"] ? "true" : "false";
            } else {
                $this->RequestParams["ZoneId"] = $param["ZoneId"];
            }
        }
        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            if(is_bool($param["RecordId"])){
                $this->RequestParams["RecordId"] = $param["RecordId"] ? "true" : "false";
            } else {
                $this->RequestParams["RecordId"] = $param["RecordId"];
            }
        }
        if (array_key_exists("RecordTtl",$param) and $param["RecordTtl"] !== null) {
            if(is_bool($param["RecordTtl"])){
                $this->RequestParams["RecordTtl"] = $param["RecordTtl"] ? "true" : "false";
            } else {
                $this->RequestParams["RecordTtl"] = $param["RecordTtl"];
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