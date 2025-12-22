<?php
namespace  Ksyun\Client\Cen\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DetachNetworkInstanceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "CenId" => null,
         /**String**/
        "NetworkInstanceId" => null,
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
        if (array_key_exists("CenId",$param) and $param["CenId"] !== null) {
            if(is_bool($param["CenId"])){
                $this->RequestParams["CenId"] = $param["CenId"] ? "true" : "false";
            } else {
                $this->RequestParams["CenId"] = $param["CenId"];
            }
        }
        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            if(is_bool($param["NetworkInstanceId"])){
                $this->RequestParams["NetworkInstanceId"] = $param["NetworkInstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkInstanceId"] = $param["NetworkInstanceId"];
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