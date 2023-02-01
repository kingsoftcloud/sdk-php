<?php
namespace  Ksyun\Client\Bill_union\V20211209\Models;

use Ksyun\Common\BaseModel;

class DescribeCostBillRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "billMonth" => null,
         /**Int**/
        "statisticalItem" => null,
         /**String**/
        "instanceIds" => null,
         /**Int**/
        "pageNo" => null,
         /**Int**/
        "pageSize" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("billMonth",$param) and $param["billMonth"] !== null) {
            if(is_bool($param["billMonth"])){
                $this->RequestParams["billMonth"] = $param["billMonth"] ? "true" : "false";
            } else {
                $this->RequestParams["billMonth"] = $param["billMonth"];
            }
        }
        if (array_key_exists("statisticalItem",$param) and $param["statisticalItem"] !== null) {
            if(is_bool($param["statisticalItem"])){
                $this->RequestParams["statisticalItem"] = $param["statisticalItem"] ? "true" : "false";
            } else {
                $this->RequestParams["statisticalItem"] = $param["statisticalItem"];
            }
        }
        if (array_key_exists("instanceIds",$param) and $param["instanceIds"] !== null) {
            if(is_bool($param["instanceIds"])){
                $this->RequestParams["instanceIds"] = $param["instanceIds"] ? "true" : "false";
            } else {
                $this->RequestParams["instanceIds"] = $param["instanceIds"];
            }
        }
        if (array_key_exists("pageNo",$param) and $param["pageNo"] !== null) {
            if(is_bool($param["pageNo"])){
                $this->RequestParams["pageNo"] = $param["pageNo"] ? "true" : "false";
            } else {
                $this->RequestParams["pageNo"] = $param["pageNo"];
            }
        }
        if (array_key_exists("pageSize",$param) and $param["pageSize"] !== null) {
            if(is_bool($param["pageSize"])){
                $this->RequestParams["pageSize"] = $param["pageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["pageSize"] = $param["pageSize"];
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