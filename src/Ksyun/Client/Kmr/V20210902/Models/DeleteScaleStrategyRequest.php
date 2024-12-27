<?php
namespace  Ksyun\Client\Kmr\V20210902\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteScaleStrategyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusterId" => null,
         /**String**/
        "StrategyId" => null,
         /**String**/
        "StrategyModule" => null,
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            if(is_bool($param["ClusterId"])){
                $this->RequestParams["ClusterId"] = $param["ClusterId"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterId"] = $param["ClusterId"];
            }
        }
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            if(is_bool($param["StrategyId"])){
                $this->RequestParams["StrategyId"] = $param["StrategyId"] ? "true" : "false";
            } else {
                $this->RequestParams["StrategyId"] = $param["StrategyId"];
            }
        }
        if (array_key_exists("StrategyModule",$param) and $param["StrategyModule"] !== null) {
            if(is_bool($param["StrategyModule"])){
                $this->RequestParams["StrategyModule"] = $param["StrategyModule"] ? "true" : "false";
            } else {
                $this->RequestParams["StrategyModule"] = $param["StrategyModule"];
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