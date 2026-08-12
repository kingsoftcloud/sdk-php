<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class RemovePerformanceOnePosixAclIpRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PosixAclId" => null,
         /**String**/
        "Ip" => null,
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
        if (array_key_exists("PosixAclId",$param) and $param["PosixAclId"] !== null) {
            if(is_bool($param["PosixAclId"])){
                $this->RequestParams["PosixAclId"] = $param["PosixAclId"] ? "true" : "false";
            } else {
                $this->RequestParams["PosixAclId"] = $param["PosixAclId"];
            }
        }
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            if(is_bool($param["Ip"])){
                $this->RequestParams["Ip"] = $param["Ip"] ? "true" : "false";
            } else {
                $this->RequestParams["Ip"] = $param["Ip"];
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