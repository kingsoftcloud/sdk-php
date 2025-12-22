<?php
namespace  Ksyun\Client\Dts\V20180108\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribePrecheckRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PrecheckId" => null,
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
        if (array_key_exists("PrecheckId",$param) and $param["PrecheckId"] !== null) {
            if(is_bool($param["PrecheckId"])){
                $this->RequestParams["PrecheckId"] = $param["PrecheckId"] ? "true" : "false";
            } else {
                $this->RequestParams["PrecheckId"] = $param["PrecheckId"];
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