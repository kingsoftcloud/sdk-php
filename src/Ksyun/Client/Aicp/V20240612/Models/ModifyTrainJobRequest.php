<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyTrainJobRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "TrainJobId" => null,
         /**String**/
        "Priority" => null,
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
        if (array_key_exists("TrainJobId",$param) and $param["TrainJobId"] !== null) {
            if(is_bool($param["TrainJobId"])){
                $this->RequestParams["TrainJobId"] = $param["TrainJobId"] ? "true" : "false";
            } else {
                $this->RequestParams["TrainJobId"] = $param["TrainJobId"];
            }
        }
        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            if(is_bool($param["Priority"])){
                $this->RequestParams["Priority"] = $param["Priority"] ? "true" : "false";
            } else {
                $this->RequestParams["Priority"] = $param["Priority"];
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