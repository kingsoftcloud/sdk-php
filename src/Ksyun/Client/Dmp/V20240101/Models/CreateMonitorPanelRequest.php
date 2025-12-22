<?php
namespace  Ksyun\Client\Dmp\V20240101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateMonitorPanelRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PanelName" => null,
         /**String**/
        "PanelType" => null,
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
        if (array_key_exists("PanelName",$param) and $param["PanelName"] !== null) {
            if(is_bool($param["PanelName"])){
                $this->RequestParams["PanelName"] = $param["PanelName"] ? "true" : "false";
            } else {
                $this->RequestParams["PanelName"] = $param["PanelName"];
            }
        }
        if (array_key_exists("PanelType",$param) and $param["PanelType"] !== null) {
            if(is_bool($param["PanelType"])){
                $this->RequestParams["PanelType"] = $param["PanelType"] ? "true" : "false";
            } else {
                $this->RequestParams["PanelType"] = $param["PanelType"];
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