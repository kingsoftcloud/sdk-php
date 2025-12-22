<?php
namespace  Ksyun\Client\Kcs\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetTimingSnapshotRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AvailableZone" => null,
         /**String**/
        "TimingSwitch" => null,
         /**String**/
        "CacheId" => null,
         /**String**/
        "Timezone" => null,
         /**Boolean**/
        "Bigkey" => null,
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
        if (array_key_exists("AvailableZone",$param) and $param["AvailableZone"] !== null) {
            if(is_bool($param["AvailableZone"])){
                $this->RequestParams["AvailableZone"] = $param["AvailableZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailableZone"] = $param["AvailableZone"];
            }
        }
        if (array_key_exists("TimingSwitch",$param) and $param["TimingSwitch"] !== null) {
            if(is_bool($param["TimingSwitch"])){
                $this->RequestParams["TimingSwitch"] = $param["TimingSwitch"] ? "true" : "false";
            } else {
                $this->RequestParams["TimingSwitch"] = $param["TimingSwitch"];
            }
        }
        if (array_key_exists("CacheId",$param) and $param["CacheId"] !== null) {
            if(is_bool($param["CacheId"])){
                $this->RequestParams["CacheId"] = $param["CacheId"] ? "true" : "false";
            } else {
                $this->RequestParams["CacheId"] = $param["CacheId"];
            }
        }
        if (array_key_exists("Timezone",$param) and $param["Timezone"] !== null) {
            if(is_bool($param["Timezone"])){
                $this->RequestParams["Timezone"] = $param["Timezone"] ? "true" : "false";
            } else {
                $this->RequestParams["Timezone"] = $param["Timezone"];
            }
        }
        if (array_key_exists("Bigkey",$param) and $param["Bigkey"] !== null) {
            if(is_bool($param["Bigkey"])){
                $this->RequestParams["Bigkey"] = $param["Bigkey"] ? "true" : "false";
            } else {
                $this->RequestParams["Bigkey"] = $param["Bigkey"];
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