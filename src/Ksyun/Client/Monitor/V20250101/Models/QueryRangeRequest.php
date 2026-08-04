<?php
namespace  Ksyun\Client\Monitor\V20250101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class QueryRangeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Query" => null,
         /**Int**/
        "Start" => null,
         /**Int**/
        "End" => null,
         /**Int**/
        "Step" => null,
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
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            if(is_bool($param["Query"])){
                $this->RequestParams["Query"] = $param["Query"] ? "true" : "false";
            } else {
                $this->RequestParams["Query"] = $param["Query"];
            }
        }
        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            if(is_bool($param["Start"])){
                $this->RequestParams["Start"] = $param["Start"] ? "true" : "false";
            } else {
                $this->RequestParams["Start"] = $param["Start"];
            }
        }
        if (array_key_exists("End",$param) and $param["End"] !== null) {
            if(is_bool($param["End"])){
                $this->RequestParams["End"] = $param["End"] ? "true" : "false";
            } else {
                $this->RequestParams["End"] = $param["End"];
            }
        }
        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            if(is_bool($param["Step"])){
                $this->RequestParams["Step"] = $param["Step"] ? "true" : "false";
            } else {
                $this->RequestParams["Step"] = $param["Step"];
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