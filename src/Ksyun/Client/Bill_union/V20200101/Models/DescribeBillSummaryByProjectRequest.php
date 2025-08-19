<?php
namespace  Ksyun\Client\Bill_union\V20200101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeBillSummaryByProjectRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "BillBeginMonth" => null,
         /**String**/
        "BillEndMonth" => null,
         /**Int**/
        "SubAccount" => null,
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
        if (array_key_exists("BillBeginMonth",$param) and $param["BillBeginMonth"] !== null) {
            if(is_bool($param["BillBeginMonth"])){
                $this->RequestParams["BillBeginMonth"] = $param["BillBeginMonth"] ? "true" : "false";
            } else {
                $this->RequestParams["BillBeginMonth"] = $param["BillBeginMonth"];
            }
        }
        if (array_key_exists("BillEndMonth",$param) and $param["BillEndMonth"] !== null) {
            if(is_bool($param["BillEndMonth"])){
                $this->RequestParams["BillEndMonth"] = $param["BillEndMonth"] ? "true" : "false";
            } else {
                $this->RequestParams["BillEndMonth"] = $param["BillEndMonth"];
            }
        }
        if (array_key_exists("SubAccount",$param) and $param["SubAccount"] !== null) {
            if(is_bool($param["SubAccount"])){
                $this->RequestParams["SubAccount"] = $param["SubAccount"] ? "true" : "false";
            } else {
                $this->RequestParams["SubAccount"] = $param["SubAccount"];
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