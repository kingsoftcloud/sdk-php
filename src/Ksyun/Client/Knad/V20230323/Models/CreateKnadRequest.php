<?php
namespace  Ksyun\Client\Knad\V20230323\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateKnadRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ServiceId" => null,
         /**String**/
        "KnadName" => null,
         /**Int**/
        "Duration" => null,
         /**String**/
        "ProjectId" => null,
         /**Int**/
        "Band" => null,
         /**Int**/
        "MaxBand" => null,
         /**Int**/
        "IpCount" => null,
         /**Int**/
        "BillType" => null,
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            if(is_bool($param["ServiceId"])){
                $this->RequestParams["ServiceId"] = $param["ServiceId"] ? "true" : "false";
            } else {
                $this->RequestParams["ServiceId"] = $param["ServiceId"];
            }
        }
        if (array_key_exists("KnadName",$param) and $param["KnadName"] !== null) {
            if(is_bool($param["KnadName"])){
                $this->RequestParams["KnadName"] = $param["KnadName"] ? "true" : "false";
            } else {
                $this->RequestParams["KnadName"] = $param["KnadName"];
            }
        }
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            if(is_bool($param["Duration"])){
                $this->RequestParams["Duration"] = $param["Duration"] ? "true" : "false";
            } else {
                $this->RequestParams["Duration"] = $param["Duration"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
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
        if (array_key_exists("IpCount",$param) and $param["IpCount"] !== null) {
            if(is_bool($param["IpCount"])){
                $this->RequestParams["IpCount"] = $param["IpCount"] ? "true" : "false";
            } else {
                $this->RequestParams["IpCount"] = $param["IpCount"];
            }
        }
        if (array_key_exists("BillType",$param) and $param["BillType"] !== null) {
            if(is_bool($param["BillType"])){
                $this->RequestParams["BillType"] = $param["BillType"] ? "true" : "false";
            } else {
                $this->RequestParams["BillType"] = $param["BillType"];
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