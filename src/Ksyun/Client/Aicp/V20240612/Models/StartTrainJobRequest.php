<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class StartTrainJobRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "TrainJobId" => null,
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
        if (array_key_exists("TrainJobId",$param) and $param["TrainJobId"] !== null) {
            if(is_bool($param["TrainJobId"])){
                $this->RequestParams["TrainJobId"] = $param["TrainJobId"] ? "true" : "false";
            } else {
                $this->RequestParams["TrainJobId"] = $param["TrainJobId"];
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