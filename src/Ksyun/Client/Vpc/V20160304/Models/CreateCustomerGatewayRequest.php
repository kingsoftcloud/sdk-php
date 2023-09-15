<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateCustomerGatewayRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "CustomerGatewayName" => null,
         /**String**/
        "CustomerGatewayAddress" => null,
         /**String**/
        "HaCustomerGatewayAddress" => null,
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
        if (array_key_exists("CustomerGatewayName",$param) and $param["CustomerGatewayName"] !== null) {
            if(is_bool($param["CustomerGatewayName"])){
                $this->RequestParams["CustomerGatewayName"] = $param["CustomerGatewayName"] ? "true" : "false";
            } else {
                $this->RequestParams["CustomerGatewayName"] = $param["CustomerGatewayName"];
            }
        }
        if (array_key_exists("CustomerGatewayAddress",$param) and $param["CustomerGatewayAddress"] !== null) {
            if(is_bool($param["CustomerGatewayAddress"])){
                $this->RequestParams["CustomerGatewayAddress"] = $param["CustomerGatewayAddress"] ? "true" : "false";
            } else {
                $this->RequestParams["CustomerGatewayAddress"] = $param["CustomerGatewayAddress"];
            }
        }
        if (array_key_exists("HaCustomerGatewayAddress",$param) and $param["HaCustomerGatewayAddress"] !== null) {
            if(is_bool($param["HaCustomerGatewayAddress"])){
                $this->RequestParams["HaCustomerGatewayAddress"] = $param["HaCustomerGatewayAddress"] ? "true" : "false";
            } else {
                $this->RequestParams["HaCustomerGatewayAddress"] = $param["HaCustomerGatewayAddress"];
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