<?php
namespace  Ksyun\Client\Slb\V20250430\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetAccessLogRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "LoadBalancerId" => null,
         /**String**/
        "ProjectName" => null,
         /**String**/
        "LogpoolName" => null,
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            if(is_bool($param["LoadBalancerId"])){
                $this->RequestParams["LoadBalancerId"] = $param["LoadBalancerId"] ? "true" : "false";
            } else {
                $this->RequestParams["LoadBalancerId"] = $param["LoadBalancerId"];
            }
        }
        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            if(is_bool($param["ProjectName"])){
                $this->RequestParams["ProjectName"] = $param["ProjectName"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectName"] = $param["ProjectName"];
            }
        }
        if (array_key_exists("LogpoolName",$param) and $param["LogpoolName"] !== null) {
            if(is_bool($param["LogpoolName"])){
                $this->RequestParams["LogpoolName"] = $param["LogpoolName"] ? "true" : "false";
            } else {
                $this->RequestParams["LogpoolName"] = $param["LogpoolName"];
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