<?php
namespace  Ksyun\Client\Ked\V20250501\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class QueryShellStatusRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "instanceIds" => null,
         /**Int**/
        "planId" => null,
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
        if (array_key_exists("instanceIds",$param) and $param["instanceIds"] !== null) {
            if(is_bool($param["instanceIds"])){
                $this->RequestParams["instanceIds"] = $param["instanceIds"] ? "true" : "false";
            } else {
                $this->RequestParams["instanceIds"] = $param["instanceIds"];
            }
        }
        if (array_key_exists("planId",$param) and $param["planId"] !== null) {
            if(is_bool($param["planId"])){
                $this->RequestParams["planId"] = $param["planId"] ? "true" : "false";
            } else {
                $this->RequestParams["planId"] = $param["planId"];
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