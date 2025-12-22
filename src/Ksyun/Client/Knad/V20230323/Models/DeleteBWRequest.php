<?php
namespace  Ksyun\Client\Knad\V20230323\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteBWRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "KnadId" => null,
         /**Array**/
        "IpId" => null,
         /**Int**/
        "type" => null,
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
        if (array_key_exists("KnadId",$param) and $param["KnadId"] !== null) {
            if(is_bool($param["KnadId"])){
                $this->RequestParams["KnadId"] = $param["KnadId"] ? "true" : "false";
            } else {
                $this->RequestParams["KnadId"] = $param["KnadId"];
            }
        }
        if (array_key_exists("IpId",$param) and $param["IpId"] !== null) {
            if(is_bool($param["IpId"])){
                $this->RequestParams["IpId"] = $param["IpId"] ? "true" : "false";
            } else {
                $this->RequestParams["IpId"] = $param["IpId"];
            }
        }
        if (array_key_exists("type",$param) and $param["type"] !== null) {
            if(is_bool($param["type"])){
                $this->RequestParams["type"] = $param["type"] ? "true" : "false";
            } else {
                $this->RequestParams["type"] = $param["type"];
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