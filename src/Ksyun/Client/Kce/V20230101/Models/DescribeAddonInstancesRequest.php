<?php
namespace  Ksyun\Client\Kce\V20230101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeAddonInstancesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "CulsterId" => null,
         /**String**/
        "ClusterName" => null,
         /**String**/
        "Name" => null,
         /**Array**/
        "AddonIds" => null,
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
        if (array_key_exists("CulsterId",$param) and $param["CulsterId"] !== null) {
            if(is_bool($param["CulsterId"])){
                $this->RequestParams["CulsterId"] = $param["CulsterId"] ? "true" : "false";
            } else {
                $this->RequestParams["CulsterId"] = $param["CulsterId"];
            }
        }
        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            if(is_bool($param["ClusterName"])){
                $this->RequestParams["ClusterName"] = $param["ClusterName"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterName"] = $param["ClusterName"];
            }
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            if(is_bool($param["Name"])){
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("AddonIds",$param) and $param["AddonIds"] !== null) {
            if(is_bool($param["AddonIds"])){
                $this->RequestParams["AddonIds"] = $param["AddonIds"] ? "true" : "false";
            } else {
                $this->RequestParams["AddonIds"] = $param["AddonIds"];
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