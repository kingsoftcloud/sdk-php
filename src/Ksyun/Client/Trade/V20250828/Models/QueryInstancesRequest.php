<?php
namespace  Ksyun\Client\Trade\V20250828\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class QueryInstancesRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "associatedUserId" => null,
         /**Array**/
        "instanceIds" => null,
         /**Int**/
        "status" => null,
         /**Int**/
        "productGroup" => null,
         /**Int**/
        "renewStrategy" => null,
         /**String**/
        "billingBeginTimeFrom" => null,
         /**String**/
        "billingBeginTimeTo" => null,
         /**String**/
        "billingEndTimeFrom" => null,
         /**String**/
        "billingEndTimeTo" => null,
         /**String**/
        "serviceBeginTimeFrom" => null,
         /**String**/
        "serviceBeginTimeTo" => null,
         /**Int**/
        "page" => null,
         /**Int**/
        "size" => null,
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
        if (array_key_exists("associatedUserId",$param) and $param["associatedUserId"] !== null) {
            if(is_bool($param["associatedUserId"])){
                $this->RequestParams["associatedUserId"] = $param["associatedUserId"] ? "true" : "false";
            } else {
                $this->RequestParams["associatedUserId"] = $param["associatedUserId"];
            }
        }
        if (array_key_exists("instanceIds",$param) and $param["instanceIds"] !== null) {
            if(is_bool($param["instanceIds"])){
                $this->RequestParams["instanceIds"] = $param["instanceIds"] ? "true" : "false";
            } else {
                $this->RequestParams["instanceIds"] = $param["instanceIds"];
            }
        }
        if (array_key_exists("status",$param) and $param["status"] !== null) {
            if(is_bool($param["status"])){
                $this->RequestParams["status"] = $param["status"] ? "true" : "false";
            } else {
                $this->RequestParams["status"] = $param["status"];
            }
        }
        if (array_key_exists("productGroup",$param) and $param["productGroup"] !== null) {
            if(is_bool($param["productGroup"])){
                $this->RequestParams["productGroup"] = $param["productGroup"] ? "true" : "false";
            } else {
                $this->RequestParams["productGroup"] = $param["productGroup"];
            }
        }
        if (array_key_exists("renewStrategy",$param) and $param["renewStrategy"] !== null) {
            if(is_bool($param["renewStrategy"])){
                $this->RequestParams["renewStrategy"] = $param["renewStrategy"] ? "true" : "false";
            } else {
                $this->RequestParams["renewStrategy"] = $param["renewStrategy"];
            }
        }
        if (array_key_exists("billingBeginTimeFrom",$param) and $param["billingBeginTimeFrom"] !== null) {
            if(is_bool($param["billingBeginTimeFrom"])){
                $this->RequestParams["billingBeginTimeFrom"] = $param["billingBeginTimeFrom"] ? "true" : "false";
            } else {
                $this->RequestParams["billingBeginTimeFrom"] = $param["billingBeginTimeFrom"];
            }
        }
        if (array_key_exists("billingBeginTimeTo",$param) and $param["billingBeginTimeTo"] !== null) {
            if(is_bool($param["billingBeginTimeTo"])){
                $this->RequestParams["billingBeginTimeTo"] = $param["billingBeginTimeTo"] ? "true" : "false";
            } else {
                $this->RequestParams["billingBeginTimeTo"] = $param["billingBeginTimeTo"];
            }
        }
        if (array_key_exists("billingEndTimeFrom",$param) and $param["billingEndTimeFrom"] !== null) {
            if(is_bool($param["billingEndTimeFrom"])){
                $this->RequestParams["billingEndTimeFrom"] = $param["billingEndTimeFrom"] ? "true" : "false";
            } else {
                $this->RequestParams["billingEndTimeFrom"] = $param["billingEndTimeFrom"];
            }
        }
        if (array_key_exists("billingEndTimeTo",$param) and $param["billingEndTimeTo"] !== null) {
            if(is_bool($param["billingEndTimeTo"])){
                $this->RequestParams["billingEndTimeTo"] = $param["billingEndTimeTo"] ? "true" : "false";
            } else {
                $this->RequestParams["billingEndTimeTo"] = $param["billingEndTimeTo"];
            }
        }
        if (array_key_exists("serviceBeginTimeFrom",$param) and $param["serviceBeginTimeFrom"] !== null) {
            if(is_bool($param["serviceBeginTimeFrom"])){
                $this->RequestParams["serviceBeginTimeFrom"] = $param["serviceBeginTimeFrom"] ? "true" : "false";
            } else {
                $this->RequestParams["serviceBeginTimeFrom"] = $param["serviceBeginTimeFrom"];
            }
        }
        if (array_key_exists("serviceBeginTimeTo",$param) and $param["serviceBeginTimeTo"] !== null) {
            if(is_bool($param["serviceBeginTimeTo"])){
                $this->RequestParams["serviceBeginTimeTo"] = $param["serviceBeginTimeTo"] ? "true" : "false";
            } else {
                $this->RequestParams["serviceBeginTimeTo"] = $param["serviceBeginTimeTo"];
            }
        }
        if (array_key_exists("page",$param) and $param["page"] !== null) {
            if(is_bool($param["page"])){
                $this->RequestParams["page"] = $param["page"] ? "true" : "false";
            } else {
                $this->RequestParams["page"] = $param["page"];
            }
        }
        if (array_key_exists("size",$param) and $param["size"] !== null) {
            if(is_bool($param["size"])){
                $this->RequestParams["size"] = $param["size"] ? "true" : "false";
            } else {
                $this->RequestParams["size"] = $param["size"];
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