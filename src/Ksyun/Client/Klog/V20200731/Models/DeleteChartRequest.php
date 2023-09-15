<?php
namespace  Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteChartRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ChartId" => null,
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
        if (array_key_exists("ChartId",$param) and $param["ChartId"] !== null) {
            if(is_bool($param["ChartId"])){
                $this->RequestParams["ChartId"] = $param["ChartId"] ? "true" : "false";
            } else {
                $this->RequestParams["ChartId"] = $param["ChartId"];
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