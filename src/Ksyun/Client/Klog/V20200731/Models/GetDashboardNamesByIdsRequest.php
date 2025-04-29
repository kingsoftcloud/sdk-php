<?php

namespace Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetDashboardNamesByIdsRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ProjectName" => null,
        /**String**/
        "DashboardIds" => null,
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
        if (array_key_exists("ProjectName", $param) and $param["ProjectName"] !== null) {
            if (is_bool($param["ProjectName"])) {
                $this->RequestParams["ProjectName"] = $param["ProjectName"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectName"] = $param["ProjectName"];
            }
        }
        if (array_key_exists("DashboardIds", $param) and $param["DashboardIds"] !== null) {
            if (is_bool($param["DashboardIds"])) {
                $this->RequestParams["DashboardIds"] = $param["DashboardIds"] ? "true" : "false";
            } else {
                $this->RequestParams["DashboardIds"] = $param["DashboardIds"];
            }
        }

    }

    private function _unserialize($name, $params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value) {
            $this->$name[$key] = $value;
        }

    }
}