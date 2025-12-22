<?php
namespace  Ksyun\Client\Dmp\V20240101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeDefaultMonitorItemsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PanelType" => null,
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