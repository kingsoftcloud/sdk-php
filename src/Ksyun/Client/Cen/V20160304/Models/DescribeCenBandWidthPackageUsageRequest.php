<?php
namespace  Ksyun\Client\Cen\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeCenBandWidthPackageUsageRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "CenBandWidthPackageId" => null,
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
        if (array_key_exists("CenBandWidthPackageId",$param) and $param["CenBandWidthPackageId"] !== null) {
            if(is_bool($param["CenBandWidthPackageId"])){
                $this->RequestParams["CenBandWidthPackageId"] = $param["CenBandWidthPackageId"] ? "true" : "false";
            } else {
                $this->RequestParams["CenBandWidthPackageId"] = $param["CenBandWidthPackageId"];
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