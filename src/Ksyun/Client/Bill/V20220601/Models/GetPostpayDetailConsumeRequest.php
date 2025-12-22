<?php
namespace  Ksyun\Client\Bill\V20220601\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetPostpayDetailConsumeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "BillMonth" => null,
         /**String**/
        "ProductCode" => null,
         /**String**/
        "ProjectId" => null,
         /**Int**/
        "PageNo" => null,
         /**Int**/
        "PageSize" => null,
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
        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            if(is_bool($param["ProductCode"])){
                $this->RequestParams["ProductCode"] = $param["ProductCode"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductCode"] = $param["ProductCode"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            if(is_bool($param["PageNo"])){
                $this->RequestParams["PageNo"] = $param["PageNo"] ? "true" : "false";
            } else {
                $this->RequestParams["PageNo"] = $param["PageNo"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
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