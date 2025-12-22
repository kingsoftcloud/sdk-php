<?php
namespace  Ksyun\Client\Dmp\V20240101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeMonitorPanelListRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PanelIds" => null,
         /**String**/
        "PanelType" => null,
         /**Int**/
        "Page" => null,
         /**Int**/
        "PageSize" => null,
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
        if (array_key_exists("PanelIds",$param) and $param["PanelIds"] !== null) {
            if(is_bool($param["PanelIds"])){
                $this->RequestParams["PanelIds"] = $param["PanelIds"] ? "true" : "false";
            } else {
                $this->RequestParams["PanelIds"] = $param["PanelIds"];
            }
        }
        if (array_key_exists("PanelType",$param) and $param["PanelType"] !== null) {
            if(is_bool($param["PanelType"])){
                $this->RequestParams["PanelType"] = $param["PanelType"] ? "true" : "false";
            } else {
                $this->RequestParams["PanelType"] = $param["PanelType"];
            }
        }
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            if(is_bool($param["Page"])){
                $this->RequestParams["Page"] = $param["Page"] ? "true" : "false";
            } else {
                $this->RequestParams["Page"] = $param["Page"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
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