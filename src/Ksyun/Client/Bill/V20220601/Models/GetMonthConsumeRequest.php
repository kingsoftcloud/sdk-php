<?php
namespace  Ksyun\Client\Bill\V20220601\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetMonthConsumeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "BillMonth" => null,
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
        if (array_key_exists("BillMonth",$param) and $param["BillMonth"] !== null) {
            if(is_bool($param["BillMonth"])){
                $this->RequestParams["BillMonth"] = $param["BillMonth"] ? "true" : "false";
            } else {
                $this->RequestParams["BillMonth"] = $param["BillMonth"];
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