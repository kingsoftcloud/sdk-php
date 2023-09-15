<?php
namespace  Ksyun\Client\Tagv2\V20200901\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateTagRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Key" => null,
         /**String**/
        "Value" => null,
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            if(is_bool($param["Key"])){
                $this->RequestParams["Key"] = $param["Key"] ? "true" : "false";
            } else {
                $this->RequestParams["Key"] = $param["Key"];
            }
        }
        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            if(is_bool($param["Value"])){
                $this->RequestParams["Value"] = $param["Value"] ? "true" : "false";
            } else {
                $this->RequestParams["Value"] = $param["Value"];
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