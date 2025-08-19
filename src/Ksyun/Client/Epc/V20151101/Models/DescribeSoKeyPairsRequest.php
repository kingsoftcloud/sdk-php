<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeSoKeyPairsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FingerPrint" => null,
         /**String**/
        "KeyPairName" => null,
         /**Int**/
        "MaxResults" => null,
         /**String**/
        "NextToken" => null,
    ];

     /**特殊参数类型:Filter**/
    public $KeyPairIds = [];
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
        if (array_key_exists("FingerPrint",$param) and $param["FingerPrint"] !== null) {
            if(is_bool($param["FingerPrint"])){
                $this->RequestParams["FingerPrint"] = $param["FingerPrint"] ? "true" : "false";
            } else {
                $this->RequestParams["FingerPrint"] = $param["FingerPrint"];
            }
        }
        if (array_key_exists("KeyPairIds",$param) and $param["KeyPairIds"] !== null) {
            $res = $this->formatFilterParams("KeyPairIds",$param["KeyPairIds"]);
            $this->_unserialize("KeyPairIds",$res);
        }
        if (array_key_exists("KeyPairName",$param) and $param["KeyPairName"] !== null) {
            if(is_bool($param["KeyPairName"])){
                $this->RequestParams["KeyPairName"] = $param["KeyPairName"] ? "true" : "false";
            } else {
                $this->RequestParams["KeyPairName"] = $param["KeyPairName"];
            }
        }
        if (array_key_exists("KeyPairNames",$param) and $param["KeyPairNames"] !== null) {
            $res = $this->formatFilterParams("KeyPairNames",$param["KeyPairNames"]);
            $this->_unserialize("KeyPairNames",$res);
        }
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            if(is_bool($param["MaxResults"])){
                $this->RequestParams["MaxResults"] = $param["MaxResults"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxResults"] = $param["MaxResults"];
            }
        }
        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            if(is_bool($param["NextToken"])){
                $this->RequestParams["NextToken"] = $param["NextToken"] ? "true" : "false";
            } else {
                $this->RequestParams["NextToken"] = $param["NextToken"];
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