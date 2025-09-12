<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyFlowLogRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FlowLogId" => null,
         /**String**/
        "FlowLogName" => null,
         /**Int**/
        "WindowTime" => null,
         /**String**/
        "Description" => null,
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
        if (array_key_exists("FlowLogId",$param) and $param["FlowLogId"] !== null) {
            if(is_bool($param["FlowLogId"])){
                $this->RequestParams["FlowLogId"] = $param["FlowLogId"] ? "true" : "false";
            } else {
                $this->RequestParams["FlowLogId"] = $param["FlowLogId"];
            }
        }
        if (array_key_exists("FlowLogName",$param) and $param["FlowLogName"] !== null) {
            if(is_bool($param["FlowLogName"])){
                $this->RequestParams["FlowLogName"] = $param["FlowLogName"] ? "true" : "false";
            } else {
                $this->RequestParams["FlowLogName"] = $param["FlowLogName"];
            }
        }
        if (array_key_exists("WindowTime",$param) and $param["WindowTime"] !== null) {
            if(is_bool($param["WindowTime"])){
                $this->RequestParams["WindowTime"] = $param["WindowTime"] ? "true" : "false";
            } else {
                $this->RequestParams["WindowTime"] = $param["WindowTime"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
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