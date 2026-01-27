<?php
namespace  Ksyun\Client\Aicp\V20251212\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeModelVersionsRequest extends BaseModel
{
    public $RequestParams = [
         /**Array**/
        "ModelVersionId.N" => null,
         /**String**/
        "ModelVersionName" => null,
         /**String**/
        "ModelId" => null,
         /**Int**/
        "Page" => null,
         /**Int**/
        "PageSize" => null,
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
        if (array_key_exists("ModelVersionId.N",$param) and $param["ModelVersionId.N"] !== null) {
            if(is_bool($param["ModelVersionId.N"])){
                $this->RequestParams["ModelVersionId.N"] = $param["ModelVersionId.N"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelVersionId.N"] = $param["ModelVersionId.N"];
            }
        }
        if (array_key_exists("ModelVersionName",$param) and $param["ModelVersionName"] !== null) {
            if(is_bool($param["ModelVersionName"])){
                $this->RequestParams["ModelVersionName"] = $param["ModelVersionName"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelVersionName"] = $param["ModelVersionName"];
            }
        }
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            if(is_bool($param["ModelId"])){
                $this->RequestParams["ModelId"] = $param["ModelId"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelId"] = $param["ModelId"];
            }
        }
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            if(is_bool($param["Page"])){
                $this->RequestParams["Page"] = $param["Page"] ? "true" : "false";
            } else {
                $this->RequestParams["Page"] = $param["Page"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
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