<?php
namespace  Ksyun\Client\Eip\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeAddressesRequest extends BaseModel
{
    public $RequestParams = [
         /**Boolean**/
        "IsContainTag" => null,
         /**Int**/
        "MaxResults" => null,
         /**String**/
        "NextToken" => null,
         /**String**/
        "State" => null,
         /**String**/
        "IpVersion" => null,
    ];

     /**特殊参数类型:Filter**/
    public $ProjectId = [];
      /**特殊参数类型:Filter**/
    public $AllocationId = [];
      /**特殊参数类型:Filter**/
    public $Filter = [];
      /**特殊参数类型:Filter**/
    public $TagKey = [];
      /**特殊参数类型:Filter**/
    public $TagKV = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $res = $this->formatFilterParams("ProjectId",$param["ProjectId"]);
            $this->_unserialize("ProjectId",$res);
        }
        if (array_key_exists("AllocationId",$param) and $param["AllocationId"] !== null) {
            $res = $this->formatFilterParams("AllocationId",$param["AllocationId"]);
            $this->_unserialize("AllocationId",$res);
        }
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $res = $this->formatFilterParams("Filter",$param["Filter"]);
            $this->_unserialize("Filter",$res);
        }
        if (array_key_exists("IsContainTag",$param) and $param["IsContainTag"] !== null) {
            if(is_bool($param["IsContainTag"])){
                $this->RequestParams["IsContainTag"] = $param["IsContainTag"] ? "true" : "false";
            } else {
                $this->RequestParams["IsContainTag"] = $param["IsContainTag"];
            }
        }
        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $res = $this->formatFilterParams("TagKey",$param["TagKey"]);
            $this->_unserialize("TagKey",$res);
        }
        if (array_key_exists("TagKV",$param) and $param["TagKV"] !== null) {
            $res = $this->formatFilterParams("TagKV",$param["TagKV"]);
            $this->_unserialize("TagKV",$res);
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
        if (array_key_exists("State",$param) and $param["State"] !== null) {
            if(is_bool($param["State"])){
                $this->RequestParams["State"] = $param["State"] ? "true" : "false";
            } else {
                $this->RequestParams["State"] = $param["State"];
            }
        }
        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            if(is_bool($param["IpVersion"])){
                $this->RequestParams["IpVersion"] = $param["IpVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["IpVersion"] = $param["IpVersion"];
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