<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class InsertInstanceToESRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "ProjectId" => null,
         /**String**/
        "ProductLine" => null,
         /**Int**/
        "ProductGroup" => null,
         /**String**/
        "ResourceType" => null,
         /**String**/
        "InstanceId" => null,
         /**String**/
        "RegionEn" => null,
         /**String**/
        "InstanceName" => null,
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("ProductLine",$param) and $param["ProductLine"] !== null) {
            if(is_bool($param["ProductLine"])){
                $this->RequestParams["ProductLine"] = $param["ProductLine"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductLine"] = $param["ProductLine"];
            }
        }
        if (array_key_exists("ProductGroup",$param) and $param["ProductGroup"] !== null) {
            if(is_bool($param["ProductGroup"])){
                $this->RequestParams["ProductGroup"] = $param["ProductGroup"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductGroup"] = $param["ProductGroup"];
            }
        }
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            if(is_bool($param["ResourceType"])){
                $this->RequestParams["ResourceType"] = $param["ResourceType"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourceType"] = $param["ResourceType"];
            }
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("RegionEn",$param) and $param["RegionEn"] !== null) {
            if(is_bool($param["RegionEn"])){
                $this->RequestParams["RegionEn"] = $param["RegionEn"] ? "true" : "false";
            } else {
                $this->RequestParams["RegionEn"] = $param["RegionEn"];
            }
        }
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            if(is_bool($param["InstanceName"])){
                $this->RequestParams["InstanceName"] = $param["InstanceName"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceName"] = $param["InstanceName"];
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