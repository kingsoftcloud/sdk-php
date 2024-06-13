<?php
namespace  Ksyun\Client\Postgresql\V20181225\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class StatisticDBInstancesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ExpiryDateLessThan" => null,
         /**String**/
        "GroupId" => null,
         /**String**/
        "Keyword" => null,
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
        if (array_key_exists("ExpiryDateLessThan",$param) and $param["ExpiryDateLessThan"] !== null) {
            if(is_bool($param["ExpiryDateLessThan"])){
                $this->RequestParams["ExpiryDateLessThan"] = $param["ExpiryDateLessThan"] ? "true" : "false";
            } else {
                $this->RequestParams["ExpiryDateLessThan"] = $param["ExpiryDateLessThan"];
            }
        }
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            if(is_bool($param["GroupId"])){
                $this->RequestParams["GroupId"] = $param["GroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["GroupId"] = $param["GroupId"];
            }
        }
        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            if(is_bool($param["Keyword"])){
                $this->RequestParams["Keyword"] = $param["Keyword"] ? "true" : "false";
            } else {
                $this->RequestParams["Keyword"] = $param["Keyword"];
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