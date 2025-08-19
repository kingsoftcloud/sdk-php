<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyProcessRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "OperationProcessId" => null,
         /**String**/
        "Confirm" => null,
         /**String**/
        "Status" => null,
         /**String**/
        "Content" => null,
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
        if (array_key_exists("OperationProcessId",$param) and $param["OperationProcessId"] !== null) {
            if(is_bool($param["OperationProcessId"])){
                $this->RequestParams["OperationProcessId"] = $param["OperationProcessId"] ? "true" : "false";
            } else {
                $this->RequestParams["OperationProcessId"] = $param["OperationProcessId"];
            }
        }
        if (array_key_exists("Confirm",$param) and $param["Confirm"] !== null) {
            if(is_bool($param["Confirm"])){
                $this->RequestParams["Confirm"] = $param["Confirm"] ? "true" : "false";
            } else {
                $this->RequestParams["Confirm"] = $param["Confirm"];
            }
        }
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            if(is_bool($param["Status"])){
                $this->RequestParams["Status"] = $param["Status"] ? "true" : "false";
            } else {
                $this->RequestParams["Status"] = $param["Status"];
            }
        }
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            if(is_bool($param["Content"])){
                $this->RequestParams["Content"] = $param["Content"] ? "true" : "false";
            } else {
                $this->RequestParams["Content"] = $param["Content"];
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