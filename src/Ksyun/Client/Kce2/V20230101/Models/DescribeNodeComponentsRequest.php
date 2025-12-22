<?php
namespace  Ksyun\Client\Kce2\V20230101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeNodeComponentsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusterId" => null,
         /**String**/
        "ClusterName" => null,
         /**Array**/
        "NodeNames" => null,
         /**String**/
        "NodeIds" => null,
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
        if (array_key_exists("NodeNames",$param) and $param["NodeNames"] !== null) {
            if(is_bool($param["NodeNames"])){
                $this->RequestParams["NodeNames"] = $param["NodeNames"] ? "true" : "false";
            } else {
                $this->RequestParams["NodeNames"] = $param["NodeNames"];
            }
        }
        if (array_key_exists("NodeIds",$param) and $param["NodeIds"] !== null) {
            if(is_bool($param["NodeIds"])){
                $this->RequestParams["NodeIds"] = $param["NodeIds"] ? "true" : "false";
            } else {
                $this->RequestParams["NodeIds"] = $param["NodeIds"];
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