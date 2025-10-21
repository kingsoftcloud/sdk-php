<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteSoKeyPairsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SoZoneId" => null,
    ];

     /**特殊参数类型:Filter**/
    public $KeyPairNames = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("KeyPairNames",$param) and $param["KeyPairNames"] !== null) {
            $res = $this->formatFilterParams("KeyPairNames",$param["KeyPairNames"]);
            $this->_unserialize("KeyPairNames",$res);
        }
        if (array_key_exists("SoZoneId",$param) and $param["SoZoneId"] !== null) {
            if(is_bool($param["SoZoneId"])){
                $this->RequestParams["SoZoneId"] = $param["SoZoneId"] ? "true" : "false";
            } else {
                $this->RequestParams["SoZoneId"] = $param["SoZoneId"];
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