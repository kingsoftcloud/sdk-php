<?php
namespace  Ksyun\Client\Bill_union\V20221222\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class QueryFinanceUnitConsumeOfMonthRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "CustomerBillMonth" => null,
         /**Int**/
        "Page" => null,
         /**Int**/
        "Size" => null,
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
        if (array_key_exists("CustomerBillMonth",$param) and $param["CustomerBillMonth"] !== null) {
            if(is_bool($param["CustomerBillMonth"])){
                $this->RequestParams["CustomerBillMonth"] = $param["CustomerBillMonth"] ? "true" : "false";
            } else {
                $this->RequestParams["CustomerBillMonth"] = $param["CustomerBillMonth"];
            }
        }
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            if(is_bool($param["Page"])){
                $this->RequestParams["Page"] = $param["Page"] ? "true" : "false";
            } else {
                $this->RequestParams["Page"] = $param["Page"];
            }
        }
        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            if(is_bool($param["Size"])){
                $this->RequestParams["Size"] = $param["Size"] ? "true" : "false";
            } else {
                $this->RequestParams["Size"] = $param["Size"];
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