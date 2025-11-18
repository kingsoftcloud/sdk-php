<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeTrainJobPodLogsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ResourcePoolId" => null,
         /**String**/
        "TrainJobId" => null,
         /**String**/
        "PodName" => null,
         /**Int**/
        "SinceSeconds" => null,
         /**Int**/
        "TailLines" => null,
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
        if (array_key_exists("ResourcePoolId",$param) and $param["ResourcePoolId"] !== null) {
            if(is_bool($param["ResourcePoolId"])){
                $this->RequestParams["ResourcePoolId"] = $param["ResourcePoolId"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourcePoolId"] = $param["ResourcePoolId"];
            }
        }
        if (array_key_exists("TrainJobId",$param) and $param["TrainJobId"] !== null) {
            if(is_bool($param["TrainJobId"])){
                $this->RequestParams["TrainJobId"] = $param["TrainJobId"] ? "true" : "false";
            } else {
                $this->RequestParams["TrainJobId"] = $param["TrainJobId"];
            }
        }
        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            if(is_bool($param["PodName"])){
                $this->RequestParams["PodName"] = $param["PodName"] ? "true" : "false";
            } else {
                $this->RequestParams["PodName"] = $param["PodName"];
            }
        }
        if (array_key_exists("SinceSeconds",$param) and $param["SinceSeconds"] !== null) {
            if(is_bool($param["SinceSeconds"])){
                $this->RequestParams["SinceSeconds"] = $param["SinceSeconds"] ? "true" : "false";
            } else {
                $this->RequestParams["SinceSeconds"] = $param["SinceSeconds"];
            }
        }
        if (array_key_exists("TailLines",$param) and $param["TailLines"] !== null) {
            if(is_bool($param["TailLines"])){
                $this->RequestParams["TailLines"] = $param["TailLines"] ? "true" : "false";
            } else {
                $this->RequestParams["TailLines"] = $param["TailLines"];
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