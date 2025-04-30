<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeRoceEventRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "MaxResults" => null,
         /**String**/
        "NextToken" => null,
         /**Object**/
        "Filter.N" => null,
         /**String**/
        "HostId.N" => null,
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
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            if(is_bool($param["MaxResults"])){
                $this->RequestParams["MaxResults"] = $param["MaxResults"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxResults"] = $param["MaxResults"];
            }
        }
        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            if(is_bool($param["NextToken"])){
                $this->RequestParams["NextToken"] = $param["NextToken"] ? "true" : "false";
            } else {
                $this->RequestParams["NextToken"] = $param["NextToken"];
            }
        }
        if (array_key_exists("Filter.N",$param) and $param["Filter.N"] !== null) {
            if(is_bool($param["Filter.N"])){
                $this->RequestParams["Filter.N"] = $param["Filter.N"] ? "true" : "false";
            } else {
                $this->RequestParams["Filter.N"] = $param["Filter.N"];
            }
        }
        if (array_key_exists("HostId.N",$param) and $param["HostId.N"] !== null) {
            if(is_bool($param["HostId.N"])){
                $this->RequestParams["HostId.N"] = $param["HostId.N"] ? "true" : "false";
            } else {
                $this->RequestParams["HostId.N"] = $param["HostId.N"];
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