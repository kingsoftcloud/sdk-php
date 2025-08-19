<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateSoImageRequest extends BaseModel
{
    public $RequestParams = [
         /**Boolean**/
        "ForceStop" => null,
    ];

     /**特殊参数类型:Filter**/
    public $InstanceIds = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ForceStop",$param) and $param["ForceStop"] !== null) {
            if(is_bool($param["ForceStop"])){
                $this->RequestParams["ForceStop"] = $param["ForceStop"] ? "true" : "false";
            } else {
                $this->RequestParams["ForceStop"] = $param["ForceStop"];
            }
        }
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $res = $this->formatFilterParams("InstanceIds",$param["InstanceIds"]);
            $this->_unserialize("InstanceIds",$res);
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