<?php
namespace  Ksyun\Client\Kce2\V20230101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeEventLogsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusterId" => null,
         /**String**/
        "ClusterName" => null,
         /**String**/
        "NodeId" => null,
         /**String**/
        "NodeName" => null,
         /**Boolean**/
        "Inner" => null,
         /**Int**/
        "Marker" => null,
         /**Int**/
        "MaxResults" => null,
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            if(is_bool($param["ClusterId"])){
                $this->RequestParams["ClusterId"] = $param["ClusterId"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterId"] = $param["ClusterId"];
            }
        }
        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            if(is_bool($param["ClusterName"])){
                $this->RequestParams["ClusterName"] = $param["ClusterName"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterName"] = $param["ClusterName"];
            }
        }
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            if(is_bool($param["NodeId"])){
                $this->RequestParams["NodeId"] = $param["NodeId"] ? "true" : "false";
            } else {
                $this->RequestParams["NodeId"] = $param["NodeId"];
            }
        }
        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            if(is_bool($param["NodeName"])){
                $this->RequestParams["NodeName"] = $param["NodeName"] ? "true" : "false";
            } else {
                $this->RequestParams["NodeName"] = $param["NodeName"];
            }
        }
        if (array_key_exists("Inner",$param) and $param["Inner"] !== null) {
            if(is_bool($param["Inner"])){
                $this->RequestParams["Inner"] = $param["Inner"] ? "true" : "false";
            } else {
                $this->RequestParams["Inner"] = $param["Inner"];
            }
        }
        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            if(is_bool($param["Marker"])){
                $this->RequestParams["Marker"] = $param["Marker"] ? "true" : "false";
            } else {
                $this->RequestParams["Marker"] = $param["Marker"];
            }
        }
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            if(is_bool($param["MaxResults"])){
                $this->RequestParams["MaxResults"] = $param["MaxResults"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxResults"] = $param["MaxResults"];
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