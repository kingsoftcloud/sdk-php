<?php
namespace  Ksyun\Client\Kci\V20200702\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeContainerGroupEventsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ContainerGroupId" => null,
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