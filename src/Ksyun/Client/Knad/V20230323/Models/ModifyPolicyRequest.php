<?php
namespace  Ksyun\Client\Knad\V20230323\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyPolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "KnadId" => null,
         /**Int**/
        "TemplateId" => null,
         /**Int**/
        "UdpBlock" => null,
         /**Int**/
        "TcpBlock" => null,
         /**Int**/
        "IcmpBlock" => null,
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            if(is_bool($param["TemplateId"])){
                $this->RequestParams["TemplateId"] = $param["TemplateId"] ? "true" : "false";
            } else {
                $this->RequestParams["TemplateId"] = $param["TemplateId"];
            }
        }
        if (array_key_exists("UdpBlock",$param) and $param["UdpBlock"] !== null) {
            if(is_bool($param["UdpBlock"])){
                $this->RequestParams["UdpBlock"] = $param["UdpBlock"] ? "true" : "false";
            } else {
                $this->RequestParams["UdpBlock"] = $param["UdpBlock"];
            }
        }
        if (array_key_exists("TcpBlock",$param) and $param["TcpBlock"] !== null) {
            if(is_bool($param["TcpBlock"])){
                $this->RequestParams["TcpBlock"] = $param["TcpBlock"] ? "true" : "false";
            } else {
                $this->RequestParams["TcpBlock"] = $param["TcpBlock"];
            }
        }
        if (array_key_exists("IcmpBlock",$param) and $param["IcmpBlock"] !== null) {
            if(is_bool($param["IcmpBlock"])){
                $this->RequestParams["IcmpBlock"] = $param["IcmpBlock"] ? "true" : "false";
            } else {
                $this->RequestParams["IcmpBlock"] = $param["IcmpBlock"];
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