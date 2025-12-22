<?php
namespace  Ksyun\Client\Cen\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateCenRegionBandwidthRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "LocalRegion" => null,
         /**String**/
        "RemoteRegion" => null,
         /**String**/
        "CenBandWidthPackageId" => null,
         /**Int**/
        "InterBandWidth" => null,
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
        if (array_key_exists("LocalRegion",$param) and $param["LocalRegion"] !== null) {
            if(is_bool($param["LocalRegion"])){
                $this->RequestParams["LocalRegion"] = $param["LocalRegion"] ? "true" : "false";
            } else {
                $this->RequestParams["LocalRegion"] = $param["LocalRegion"];
            }
        }
        if (array_key_exists("RemoteRegion",$param) and $param["RemoteRegion"] !== null) {
            if(is_bool($param["RemoteRegion"])){
                $this->RequestParams["RemoteRegion"] = $param["RemoteRegion"] ? "true" : "false";
            } else {
                $this->RequestParams["RemoteRegion"] = $param["RemoteRegion"];
            }
        }
        if (array_key_exists("CenBandWidthPackageId",$param) and $param["CenBandWidthPackageId"] !== null) {
            if(is_bool($param["CenBandWidthPackageId"])){
                $this->RequestParams["CenBandWidthPackageId"] = $param["CenBandWidthPackageId"] ? "true" : "false";
            } else {
                $this->RequestParams["CenBandWidthPackageId"] = $param["CenBandWidthPackageId"];
            }
        }
        if (array_key_exists("InterBandWidth",$param) and $param["InterBandWidth"] !== null) {
            if(is_bool($param["InterBandWidth"])){
                $this->RequestParams["InterBandWidth"] = $param["InterBandWidth"] ? "true" : "false";
            } else {
                $this->RequestParams["InterBandWidth"] = $param["InterBandWidth"];
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