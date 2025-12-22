<?php
namespace  Ksyun\Client\Kci\V20200702\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeContainerLogRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ContainerGroupId" => null,
         /**String**/
        "ContainerName" => null,
         /**Int**/
        "Tail" => null,
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
        if (array_key_exists("ContainerGroupId",$param) and $param["ContainerGroupId"] !== null) {
            if(is_bool($param["ContainerGroupId"])){
                $this->RequestParams["ContainerGroupId"] = $param["ContainerGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["ContainerGroupId"] = $param["ContainerGroupId"];
            }
        }
        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            if(is_bool($param["ContainerName"])){
                $this->RequestParams["ContainerName"] = $param["ContainerName"] ? "true" : "false";
            } else {
                $this->RequestParams["ContainerName"] = $param["ContainerName"];
            }
        }
        if (array_key_exists("Tail",$param) and $param["Tail"] !== null) {
            if(is_bool($param["Tail"])){
                $this->RequestParams["Tail"] = $param["Tail"] ? "true" : "false";
            } else {
                $this->RequestParams["Tail"] = $param["Tail"];
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