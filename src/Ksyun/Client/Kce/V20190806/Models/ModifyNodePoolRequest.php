<?php
namespace  Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyNodePoolRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusterId" => null,
         /**String**/
        "NodePoolId" => null,
         /**String**/
        "NodePoolName" => null,
         /**Boolean**/
        "EnableAutoScale" => null,
         /**Int**/
        "MinSize" => null,
         /**Int**/
        "MaxSize" => null,
         /**Int**/
        "DesiredCapacity" => null,
         /**Boolean**/
        "UpdateExistingNodes" => null,
    ];

     /**特殊参数类型:Filter**/
    public $Label = [];
      /**特殊参数类型:Filter**/
    public $Taint = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            if(is_bool($param["ClusterId"])){
                $this->RequestParams["ClusterId"] = $param["ClusterId"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterId"] = $param["ClusterId"];
            }
        }
        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            if(is_bool($param["NodePoolId"])){
                $this->RequestParams["NodePoolId"] = $param["NodePoolId"] ? "true" : "false";
            } else {
                $this->RequestParams["NodePoolId"] = $param["NodePoolId"];
            }
        }
        if (array_key_exists("NodePoolName",$param) and $param["NodePoolName"] !== null) {
            if(is_bool($param["NodePoolName"])){
                $this->RequestParams["NodePoolName"] = $param["NodePoolName"] ? "true" : "false";
            } else {
                $this->RequestParams["NodePoolName"] = $param["NodePoolName"];
            }
        }
        if (array_key_exists("EnableAutoScale",$param) and $param["EnableAutoScale"] !== null) {
            if(is_bool($param["EnableAutoScale"])){
                $this->RequestParams["EnableAutoScale"] = $param["EnableAutoScale"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableAutoScale"] = $param["EnableAutoScale"];
            }
        }
        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            if(is_bool($param["MinSize"])){
                $this->RequestParams["MinSize"] = $param["MinSize"] ? "true" : "false";
            } else {
                $this->RequestParams["MinSize"] = $param["MinSize"];
            }
        }
        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            if(is_bool($param["MaxSize"])){
                $this->RequestParams["MaxSize"] = $param["MaxSize"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxSize"] = $param["MaxSize"];
            }
        }
        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            if(is_bool($param["DesiredCapacity"])){
                $this->RequestParams["DesiredCapacity"] = $param["DesiredCapacity"] ? "true" : "false";
            } else {
                $this->RequestParams["DesiredCapacity"] = $param["DesiredCapacity"];
            }
        }
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $res = $this->formatFilterParams("Label",$param["Label"]);
            $this->_unserialize("Label",$res);
        }
        if (array_key_exists("Taint",$param) and $param["Taint"] !== null) {
            $res = $this->formatFilterParams("Taint",$param["Taint"]);
            $this->_unserialize("Taint",$res);
        }
        if (array_key_exists("UpdateExistingNodes",$param) and $param["UpdateExistingNodes"] !== null) {
            if(is_bool($param["UpdateExistingNodes"])){
                $this->RequestParams["UpdateExistingNodes"] = $param["UpdateExistingNodes"] ? "true" : "false";
            } else {
                $this->RequestParams["UpdateExistingNodes"] = $param["UpdateExistingNodes"];
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