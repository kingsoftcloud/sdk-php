<?php
namespace  Ksyun\Client\Kce2\V20230101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeComponentListRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "K8sVersion" => null,
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
        if (array_key_exists("K8sVersion",$param) and $param["K8sVersion"] !== null) {
            if(is_bool($param["K8sVersion"])){
                $this->RequestParams["K8sVersion"] = $param["K8sVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["K8sVersion"] = $param["K8sVersion"];
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