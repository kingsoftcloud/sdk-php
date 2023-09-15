<?php
namespace  Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateDashboardRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ProjectName" => null,
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
        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            if(is_bool($param["ProjectName"])){
                $this->RequestParams["ProjectName"] = $param["ProjectName"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectName"] = $param["ProjectName"];
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