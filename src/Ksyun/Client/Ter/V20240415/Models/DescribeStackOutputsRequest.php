<?php
namespace  Ksyun\Client\Ter\V20240415\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeStackOutputsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "StackId" => null,
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
        if (array_key_exists("StackId",$param) and $param["StackId"] !== null) {
            if(is_bool($param["StackId"])){
                $this->RequestParams["StackId"] = $param["StackId"] ? "true" : "false";
            } else {
                $this->RequestParams["StackId"] = $param["StackId"];
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