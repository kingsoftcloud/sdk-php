<?php
namespace  Ksyun\Client\Kcs\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AnalyzeDailySwitchRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "CacheId" => null,
         /**Boolean**/
        "ServiceLog" => null,
         /**Boolean**/
        "SlowLog" => null,
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
        if (array_key_exists("CacheId",$param) and $param["CacheId"] !== null) {
            if(is_bool($param["CacheId"])){
                $this->RequestParams["CacheId"] = $param["CacheId"] ? "true" : "false";
            } else {
                $this->RequestParams["CacheId"] = $param["CacheId"];
            }
        }
        if (array_key_exists("ServiceLog",$param) and $param["ServiceLog"] !== null) {
            if(is_bool($param["ServiceLog"])){
                $this->RequestParams["ServiceLog"] = $param["ServiceLog"] ? "true" : "false";
            } else {
                $this->RequestParams["ServiceLog"] = $param["ServiceLog"];
            }
        }
        if (array_key_exists("SlowLog",$param) and $param["SlowLog"] !== null) {
            if(is_bool($param["SlowLog"])){
                $this->RequestParams["SlowLog"] = $param["SlowLog"] ? "true" : "false";
            } else {
                $this->RequestParams["SlowLog"] = $param["SlowLog"];
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