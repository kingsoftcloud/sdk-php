<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyVolumePresetRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VolumeId" => null,
         /**Int**/
        "ProvisionedIops" => null,
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
        if (array_key_exists("VolumeId",$param) and $param["VolumeId"] !== null) {
            if(is_bool($param["VolumeId"])){
                $this->RequestParams["VolumeId"] = $param["VolumeId"] ? "true" : "false";
            } else {
                $this->RequestParams["VolumeId"] = $param["VolumeId"];
            }
        }
        if (array_key_exists("ProvisionedIops",$param) and $param["ProvisionedIops"] !== null) {
            if(is_bool($param["ProvisionedIops"])){
                $this->RequestParams["ProvisionedIops"] = $param["ProvisionedIops"] ? "true" : "false";
            } else {
                $this->RequestParams["ProvisionedIops"] = $param["ProvisionedIops"];
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