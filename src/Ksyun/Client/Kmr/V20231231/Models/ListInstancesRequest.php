<?php
namespace  Ksyun\Client\Kmr\V20231231\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ListInstancesRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "PageNumber" => null,
         /**Int**/
        "PageSize" => null,
         /**Array**/
        "InstanceStatus" => null,
         /**String**/
        "InstanceNameOrId" => null,
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            if(is_bool($param["PageNumber"])){
                $this->RequestParams["PageNumber"] = $param["PageNumber"] ? "true" : "false";
            } else {
                $this->RequestParams["PageNumber"] = $param["PageNumber"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
            }
        }
        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            if(is_bool($param["InstanceStatus"])){
                $this->RequestParams["InstanceStatus"] = $param["InstanceStatus"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceStatus"] = $param["InstanceStatus"];
            }
        }
        if (array_key_exists("InstanceNameOrId",$param) and $param["InstanceNameOrId"] !== null) {
            if(is_bool($param["InstanceNameOrId"])){
                $this->RequestParams["InstanceNameOrId"] = $param["InstanceNameOrId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceNameOrId"] = $param["InstanceNameOrId"];
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