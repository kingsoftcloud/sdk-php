<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteTerminatePolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "TerminatePolicyId" => null,
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
        if (array_key_exists("TerminatePolicyId",$param) and $param["TerminatePolicyId"] !== null) {
            if(is_bool($param["TerminatePolicyId"])){
                $this->RequestParams["TerminatePolicyId"] = $param["TerminatePolicyId"] ? "true" : "false";
            } else {
                $this->RequestParams["TerminatePolicyId"] = $param["TerminatePolicyId"];
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