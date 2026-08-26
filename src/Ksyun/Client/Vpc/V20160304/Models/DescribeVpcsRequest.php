<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeVpcsRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "MaxResults" => null,
         /**String**/
        "NextToken" => null,
         /**Boolean**/
        "ProvidedIpv6CidrBlock" => null,
    ];

     /**特殊参数类型:Filter**/
    public $VpcId = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $res = $this->formatFilterParams("VpcId",$param["VpcId"]);
            $this->_unserialize("VpcId",$res);
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
        if (array_key_exists("ProvidedIpv6CidrBlock",$param) and $param["ProvidedIpv6CidrBlock"] !== null) {
            if(is_bool($param["ProvidedIpv6CidrBlock"])){
                $this->RequestParams["ProvidedIpv6CidrBlock"] = $param["ProvidedIpv6CidrBlock"] ? "true" : "false";
            } else {
                $this->RequestParams["ProvidedIpv6CidrBlock"] = $param["ProvidedIpv6CidrBlock"];
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