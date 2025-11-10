<?php
namespace  Ksyun\Client\Kes\V20201215\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CheckClusterHealthRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "cluster_id" => null,
         /**Array**/
        "check_list" => null,
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
        if (array_key_exists("cluster_id",$param) and $param["cluster_id"] !== null) {
            if(is_bool($param["cluster_id"])){
                $this->RequestParams["cluster_id"] = $param["cluster_id"] ? "true" : "false";
            } else {
                $this->RequestParams["cluster_id"] = $param["cluster_id"];
            }
        }
        if (array_key_exists("check_list",$param) and $param["check_list"] !== null) {
            if(is_bool($param["check_list"])){
                $this->RequestParams["check_list"] = $param["check_list"] ? "true" : "false";
            } else {
                $this->RequestParams["check_list"] = $param["check_list"];
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