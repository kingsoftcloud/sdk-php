<?php
namespace  Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdateDashboardRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DashboardId" => null,
         /**String**/
        "DashboardName" => null,
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
        if (array_key_exists("DashboardId",$param) and $param["DashboardId"] !== null) {
            if(is_bool($param["DashboardId"])){
                $this->RequestParams["DashboardId"] = $param["DashboardId"] ? "true" : "false";
            } else {
                $this->RequestParams["DashboardId"] = $param["DashboardId"];
            }
        }
        if (array_key_exists("DashboardName",$param) and $param["DashboardName"] !== null) {
            if(is_bool($param["DashboardName"])){
                $this->RequestParams["DashboardName"] = $param["DashboardName"] ? "true" : "false";
            } else {
                $this->RequestParams["DashboardName"] = $param["DashboardName"];
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