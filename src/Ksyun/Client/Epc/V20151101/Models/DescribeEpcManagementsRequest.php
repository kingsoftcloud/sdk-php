<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeEpcManagementsRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "MaxResults" => null,
         /**String**/
        "NextToken" => null,
         /**String**/
        "DynamicCode" => null,
         /**String**/
        "Pin" => null,
         /**String**/
        "RemoteManagementId" => null,
    ];

     /**特殊参数类型:Filter**/
    public $EpcManagementId = [];
      /**特殊参数类型:Filter**/
    public $ProjectId = [];
 
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
        if (array_key_exists("DynamicCode",$param) and $param["DynamicCode"] !== null) {
            if(is_bool($param["DynamicCode"])){
                $this->RequestParams["DynamicCode"] = $param["DynamicCode"] ? "true" : "false";
            } else {
                $this->RequestParams["DynamicCode"] = $param["DynamicCode"];
            }
        }
        if (array_key_exists("Pin",$param) and $param["Pin"] !== null) {
            if(is_bool($param["Pin"])){
                $this->RequestParams["Pin"] = $param["Pin"] ? "true" : "false";
            } else {
                $this->RequestParams["Pin"] = $param["Pin"];
            }
        }
        if (array_key_exists("EpcManagementId",$param) and $param["EpcManagementId"] !== null) {
            $res = $this->formatFilterParams("EpcManagementId",$param["EpcManagementId"]);
            $this->_unserialize("EpcManagementId",$res);
        }
        if (array_key_exists("RemoteManagementId",$param) and $param["RemoteManagementId"] !== null) {
            if(is_bool($param["RemoteManagementId"])){
                $this->RequestParams["RemoteManagementId"] = $param["RemoteManagementId"] ? "true" : "false";
            } else {
                $this->RequestParams["RemoteManagementId"] = $param["RemoteManagementId"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $res = $this->formatFilterParams("ProjectId",$param["ProjectId"]);
            $this->_unserialize("ProjectId",$res);
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