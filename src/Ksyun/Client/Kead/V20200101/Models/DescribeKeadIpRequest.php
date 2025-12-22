<?php
namespace  Ksyun\Client\Kead\V20200101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeKeadIpRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Ip" => null,
         /**Int**/
        "PageSize" => null,
         /**Int**/
        "OffSet" => null,
    ];

     /**特殊参数类型:Filter**/
    public $ProjectId = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            if(is_bool($param["Ip"])){
                $this->RequestParams["Ip"] = $param["Ip"] ? "true" : "false";
            } else {
                $this->RequestParams["Ip"] = $param["Ip"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $res = $this->formatFilterParams("ProjectId",$param["ProjectId"]);
            $this->_unserialize("ProjectId",$res);
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
            }
        }
        if (array_key_exists("OffSet",$param) and $param["OffSet"] !== null) {
            if(is_bool($param["OffSet"])){
                $this->RequestParams["OffSet"] = $param["OffSet"] ? "true" : "false";
            } else {
                $this->RequestParams["OffSet"] = $param["OffSet"];
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