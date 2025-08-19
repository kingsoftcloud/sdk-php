<?php
namespace  Ksyun\Client\Bill_union\V20250801\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class QueryProductTypesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ProductGroupCode" => null,
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
        if (array_key_exists("ProductGroupCode",$param) and $param["ProductGroupCode"] !== null) {
            if(is_bool($param["ProductGroupCode"])){
                $this->RequestParams["ProductGroupCode"] = $param["ProductGroupCode"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductGroupCode"] = $param["ProductGroupCode"];
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