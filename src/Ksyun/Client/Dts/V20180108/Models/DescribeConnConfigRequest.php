<?php
namespace  Ksyun\Client\Dts\V20180108\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeConnConfigRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ConnConfigId" => null,
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
        if (array_key_exists("ConnConfigId",$param) and $param["ConnConfigId"] !== null) {
            if(is_bool($param["ConnConfigId"])){
                $this->RequestParams["ConnConfigId"] = $param["ConnConfigId"] ? "true" : "false";
            } else {
                $this->RequestParams["ConnConfigId"] = $param["ConnConfigId"];
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