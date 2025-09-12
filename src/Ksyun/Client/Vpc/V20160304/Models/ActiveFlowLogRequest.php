<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ActiveFlowLogRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FlowLogId" => null,
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
        if (array_key_exists("FlowLogId",$param) and $param["FlowLogId"] !== null) {
            if(is_bool($param["FlowLogId"])){
                $this->RequestParams["FlowLogId"] = $param["FlowLogId"] ? "true" : "false";
            } else {
                $this->RequestParams["FlowLogId"] = $param["FlowLogId"];
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