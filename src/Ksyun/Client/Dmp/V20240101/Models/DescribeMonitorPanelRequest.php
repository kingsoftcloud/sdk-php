<?php
namespace  Ksyun\Client\Dmp\V20240101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeMonitorPanelRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PanelId" => null,
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