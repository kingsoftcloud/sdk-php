<?php
namespace  Ksyun\Client\Cen\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyCenBandWidthPackageRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "CenBandWidthPackageId" => null,
         /**Int**/
        "PackageBandWidth" => null,
         /**String**/
        "CenBandWidthPackageName" => null,
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
        if (array_key_exists("CenBandWidthPackageId",$param) and $param["CenBandWidthPackageId"] !== null) {
            if(is_bool($param["CenBandWidthPackageId"])){
                $this->RequestParams["CenBandWidthPackageId"] = $param["CenBandWidthPackageId"] ? "true" : "false";
            } else {
                $this->RequestParams["CenBandWidthPackageId"] = $param["CenBandWidthPackageId"];
            }
        }
        if (array_key_exists("PackageBandWidth",$param) and $param["PackageBandWidth"] !== null) {
            if(is_bool($param["PackageBandWidth"])){
                $this->RequestParams["PackageBandWidth"] = $param["PackageBandWidth"] ? "true" : "false";
            } else {
                $this->RequestParams["PackageBandWidth"] = $param["PackageBandWidth"];
            }
        }
        if (array_key_exists("CenBandWidthPackageName",$param) and $param["CenBandWidthPackageName"] !== null) {
            if(is_bool($param["CenBandWidthPackageName"])){
                $this->RequestParams["CenBandWidthPackageName"] = $param["CenBandWidthPackageName"] ? "true" : "false";
            } else {
                $this->RequestParams["CenBandWidthPackageName"] = $param["CenBandWidthPackageName"];
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