<?php
namespace  Ksyun\Client\Dmp\V20240101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyMonitorPanelInfoRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PanelId" => null,
         /**String**/
        "PanelName" => null,
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
        if (array_key_exists("PanelId",$param) and $param["PanelId"] !== null) {
            if(is_bool($param["PanelId"])){
                $this->RequestParams["PanelId"] = $param["PanelId"] ? "true" : "false";
            } else {
                $this->RequestParams["PanelId"] = $param["PanelId"];
            }
        }
        if (array_key_exists("PanelName",$param) and $param["PanelName"] !== null) {
            if(is_bool($param["PanelName"])){
                $this->RequestParams["PanelName"] = $param["PanelName"] ? "true" : "false";
            } else {
                $this->RequestParams["PanelName"] = $param["PanelName"];
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