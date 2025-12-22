<?php
namespace  Ksyun\Client\Dmp\V20240101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class OperateMonitorPanelRequest extends BaseModel
{
    public $RequestParams = [
         /**Array**/
        "AddInstanceIds" => null,
         /**Array**/
        "RemoveInstanceIds" => null,
         /**Array**/
        "AddMonitorItems" => null,
         /**Array**/
        "RemoveMonitorItems" => null,
         /**String**/
        "PanelId" => null,
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
        if (array_key_exists("AddInstanceIds",$param) and $param["AddInstanceIds"] !== null) {
            if(is_bool($param["AddInstanceIds"])){
                $this->RequestParams["AddInstanceIds"] = $param["AddInstanceIds"] ? "true" : "false";
            } else {
                $this->RequestParams["AddInstanceIds"] = $param["AddInstanceIds"];
            }
        }
        if (array_key_exists("RemoveInstanceIds",$param) and $param["RemoveInstanceIds"] !== null) {
            if(is_bool($param["RemoveInstanceIds"])){
                $this->RequestParams["RemoveInstanceIds"] = $param["RemoveInstanceIds"] ? "true" : "false";
            } else {
                $this->RequestParams["RemoveInstanceIds"] = $param["RemoveInstanceIds"];
            }
        }
        if (array_key_exists("AddMonitorItems",$param) and $param["AddMonitorItems"] !== null) {
            if(is_bool($param["AddMonitorItems"])){
                $this->RequestParams["AddMonitorItems"] = $param["AddMonitorItems"] ? "true" : "false";
            } else {
                $this->RequestParams["AddMonitorItems"] = $param["AddMonitorItems"];
            }
        }
        if (array_key_exists("RemoveMonitorItems",$param) and $param["RemoveMonitorItems"] !== null) {
            if(is_bool($param["RemoveMonitorItems"])){
                $this->RequestParams["RemoveMonitorItems"] = $param["RemoveMonitorItems"] ? "true" : "false";
            } else {
                $this->RequestParams["RemoveMonitorItems"] = $param["RemoveMonitorItems"];
            }
        }
        if (array_key_exists("PanelId",$param) and $param["PanelId"] !== null) {
            if(is_bool($param["PanelId"])){
                $this->RequestParams["PanelId"] = $param["PanelId"] ? "true" : "false";
            } else {
                $this->RequestParams["PanelId"] = $param["PanelId"];
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