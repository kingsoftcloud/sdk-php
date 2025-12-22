<?php
namespace  Ksyun\Client\Knad\V20230323\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeKnadIpRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "IpSort" => null,
         /**String**/
        "IpStatusSort" => null,
         /**String**/
        "BandSort" => null,
         /**String**/
        "Ip" => null,
         /**String**/
        "KnadId" => null,
         /**Array**/
        "ProjectId" => null,
         /**Int**/
        "PageSize" => null,
         /**Int**/
        "OffSet" => null,
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
        if (array_key_exists("IpSort",$param) and $param["IpSort"] !== null) {
            if(is_bool($param["IpSort"])){
                $this->RequestParams["IpSort"] = $param["IpSort"] ? "true" : "false";
            } else {
                $this->RequestParams["IpSort"] = $param["IpSort"];
            }
        }
        if (array_key_exists("IpStatusSort",$param) and $param["IpStatusSort"] !== null) {
            if(is_bool($param["IpStatusSort"])){
                $this->RequestParams["IpStatusSort"] = $param["IpStatusSort"] ? "true" : "false";
            } else {
                $this->RequestParams["IpStatusSort"] = $param["IpStatusSort"];
            }
        }
        if (array_key_exists("BandSort",$param) and $param["BandSort"] !== null) {
            if(is_bool($param["BandSort"])){
                $this->RequestParams["BandSort"] = $param["BandSort"] ? "true" : "false";
            } else {
                $this->RequestParams["BandSort"] = $param["BandSort"];
            }
        }
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            if(is_bool($param["Ip"])){
                $this->RequestParams["Ip"] = $param["Ip"] ? "true" : "false";
            } else {
                $this->RequestParams["Ip"] = $param["Ip"];
            }
        }
        if (array_key_exists("KnadId",$param) and $param["KnadId"] !== null) {
            if(is_bool($param["KnadId"])){
                $this->RequestParams["KnadId"] = $param["KnadId"] ? "true" : "false";
            } else {
                $this->RequestParams["KnadId"] = $param["KnadId"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
            }
        }
        if (array_key_exists("OffSet",$param) and $param["OffSet"] !== null) {
            if(is_bool($param["OffSet"])){
                $this->RequestParams["OffSet"] = $param["OffSet"] ? "true" : "false";
            } else {
                $this->RequestParams["OffSet"] = $param["OffSet"];
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