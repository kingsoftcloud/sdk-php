<?php
namespace  Ksyun\Client\Kmr\V20231231\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ListAutoScaleHistoryRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "ExecAtStart" => null,
         /**String**/
        "ExecAtEnd" => null,
         /**String**/
        "PolicyName" => null,
         /**Int**/
        "PageNumber" => null,
         /**Int**/
        "PageSize" => null,
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("ExecAtStart",$param) and $param["ExecAtStart"] !== null) {
            if(is_bool($param["ExecAtStart"])){
                $this->RequestParams["ExecAtStart"] = $param["ExecAtStart"] ? "true" : "false";
            } else {
                $this->RequestParams["ExecAtStart"] = $param["ExecAtStart"];
            }
        }
        if (array_key_exists("ExecAtEnd",$param) and $param["ExecAtEnd"] !== null) {
            if(is_bool($param["ExecAtEnd"])){
                $this->RequestParams["ExecAtEnd"] = $param["ExecAtEnd"] ? "true" : "false";
            } else {
                $this->RequestParams["ExecAtEnd"] = $param["ExecAtEnd"];
            }
        }
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            if(is_bool($param["PolicyName"])){
                $this->RequestParams["PolicyName"] = $param["PolicyName"] ? "true" : "false";
            } else {
                $this->RequestParams["PolicyName"] = $param["PolicyName"];
            }
        }
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            if(is_bool($param["PageNumber"])){
                $this->RequestParams["PageNumber"] = $param["PageNumber"] ? "true" : "false";
            } else {
                $this->RequestParams["PageNumber"] = $param["PageNumber"];
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