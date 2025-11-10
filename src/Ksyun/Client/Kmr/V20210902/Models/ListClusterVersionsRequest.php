<?php
namespace  Ksyun\Client\Kmr\V20210902\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ListClusterVersionsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DistributionVersion" => null,
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
        if (array_key_exists("DistributionVersion",$param) and $param["DistributionVersion"] !== null) {
            if(is_bool($param["DistributionVersion"])){
                $this->RequestParams["DistributionVersion"] = $param["DistributionVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["DistributionVersion"] = $param["DistributionVersion"];
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