<?php
namespace  Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyNodeTemplateRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusterId" => null,
         /**String**/
        "NodePoolId" => null,
         /**Object**/
        "NodeTemplate" => null,
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            if(is_bool($param["ClusterId"])){
                $this->RequestParams["ClusterId"] = $param["ClusterId"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterId"] = $param["ClusterId"];
            }
        }
        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            if(is_bool($param["NodePoolId"])){
                $this->RequestParams["NodePoolId"] = $param["NodePoolId"] ? "true" : "false";
            } else {
                $this->RequestParams["NodePoolId"] = $param["NodePoolId"];
            }
        }
        if (array_key_exists("NodeTemplate",$param) and $param["NodeTemplate"] !== null) {
            if(is_bool($param["NodeTemplate"])){
                $this->RequestParams["NodeTemplate"] = $param["NodeTemplate"] ? "true" : "false";
            } else {
                $this->RequestParams["NodeTemplate"] = $param["NodeTemplate"];
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