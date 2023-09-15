<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeVpnGatewayRoutesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "vpnGatewayId" => null,
         /**Int**/
        "maxResults" => null,
         /**String**/
        "nextToken" => null,
    ];

     /**特殊参数类型:Filter**/
    public $Filter = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("vpnGatewayId",$param) and $param["vpnGatewayId"] !== null) {
            if(is_bool($param["vpnGatewayId"])){
                $this->RequestParams["vpnGatewayId"] = $param["vpnGatewayId"] ? "true" : "false";
            } else {
                $this->RequestParams["vpnGatewayId"] = $param["vpnGatewayId"];
            }
        }
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $res = $this->formatFilterParams("Filter",$param["Filter"]);
            $this->_unserialize("Filter",$res);
        }
        if (array_key_exists("maxResults",$param) and $param["maxResults"] !== null) {
            if(is_bool($param["maxResults"])){
                $this->RequestParams["maxResults"] = $param["maxResults"] ? "true" : "false";
            } else {
                $this->RequestParams["maxResults"] = $param["maxResults"];
            }
        }
        if (array_key_exists("nextToken",$param) and $param["nextToken"] !== null) {
            if(is_bool($param["nextToken"])){
                $this->RequestParams["nextToken"] = $param["nextToken"] ? "true" : "false";
            } else {
                $this->RequestParams["nextToken"] = $param["nextToken"];
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