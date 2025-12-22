<?php
namespace  Ksyun\Client\Knad\V20230323\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyKnadRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "KnadId" => null,
         /**String**/
        "ServiceId" => null,
         /**Int**/
        "IpCount" => null,
         /**Int**/
        "Band" => null,
         /**Int**/
        "MaxBand" => null,
         /**Int**/
        "IdcBand" => null,
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            if(is_bool($param["ServiceId"])){
                $this->RequestParams["ServiceId"] = $param["ServiceId"] ? "true" : "false";
            } else {
                $this->RequestParams["ServiceId"] = $param["ServiceId"];
            }
        }
        if (array_key_exists("IpCount",$param) and $param["IpCount"] !== null) {
            if(is_bool($param["IpCount"])){
                $this->RequestParams["IpCount"] = $param["IpCount"] ? "true" : "false";
            } else {
                $this->RequestParams["IpCount"] = $param["IpCount"];
            }
        }
        if (array_key_exists("Band",$param) and $param["Band"] !== null) {
            if(is_bool($param["Band"])){
                $this->RequestParams["Band"] = $param["Band"] ? "true" : "false";
            } else {
                $this->RequestParams["Band"] = $param["Band"];
            }
        }
        if (array_key_exists("MaxBand",$param) and $param["MaxBand"] !== null) {
            if(is_bool($param["MaxBand"])){
                $this->RequestParams["MaxBand"] = $param["MaxBand"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxBand"] = $param["MaxBand"];
            }
        }
        if (array_key_exists("IdcBand",$param) and $param["IdcBand"] !== null) {
            if(is_bool($param["IdcBand"])){
                $this->RequestParams["IdcBand"] = $param["IdcBand"] ? "true" : "false";
            } else {
                $this->RequestParams["IdcBand"] = $param["IdcBand"];
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