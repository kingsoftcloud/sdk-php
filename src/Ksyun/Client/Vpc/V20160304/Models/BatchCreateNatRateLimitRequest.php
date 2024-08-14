<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class BatchCreateNatRateLimitRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "BandwidthLimit" => null,
         /**Int**/
        "InBandwidthLimit" => null,
    ];

     /**特殊参数类型:Filter**/
    public $NetworkInterfaceId = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("BandwidthLimit",$param) and $param["BandwidthLimit"] !== null) {
            if(is_bool($param["BandwidthLimit"])){
                $this->RequestParams["BandwidthLimit"] = $param["BandwidthLimit"] ? "true" : "false";
            } else {
                $this->RequestParams["BandwidthLimit"] = $param["BandwidthLimit"];
            }
        }
        if (array_key_exists("InBandwidthLimit",$param) and $param["InBandwidthLimit"] !== null) {
            if(is_bool($param["InBandwidthLimit"])){
                $this->RequestParams["InBandwidthLimit"] = $param["InBandwidthLimit"] ? "true" : "false";
            } else {
                $this->RequestParams["InBandwidthLimit"] = $param["InBandwidthLimit"];
            }
        }
        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $res = $this->formatFilterParams("NetworkInterfaceId",$param["NetworkInterfaceId"]);
            $this->_unserialize("NetworkInterfaceId",$res);
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