<?php
namespace  Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateQuickSearchRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ProjectName" => null,
         /**String**/
        "LogPoolName" => null,
         /**String**/
        "QuickSearchName" => null,
         /**String**/
        "Query" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "TimeRange" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            if(is_bool($param["ProjectName"])){
                $this->RequestParams["ProjectName"] = $param["ProjectName"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectName"] = $param["ProjectName"];
            }
        }
        if (array_key_exists("LogPoolName",$param) and $param["LogPoolName"] !== null) {
            if(is_bool($param["LogPoolName"])){
                $this->RequestParams["LogPoolName"] = $param["LogPoolName"] ? "true" : "false";
            } else {
                $this->RequestParams["LogPoolName"] = $param["LogPoolName"];
            }
        }
        if (array_key_exists("QuickSearchName",$param) and $param["QuickSearchName"] !== null) {
            if(is_bool($param["QuickSearchName"])){
                $this->RequestParams["QuickSearchName"] = $param["QuickSearchName"] ? "true" : "false";
            } else {
                $this->RequestParams["QuickSearchName"] = $param["QuickSearchName"];
            }
        }
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            if(is_bool($param["Query"])){
                $this->RequestParams["Query"] = $param["Query"] ? "true" : "false";
            } else {
                $this->RequestParams["Query"] = $param["Query"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            if(is_bool($param["TimeRange"])){
                $this->RequestParams["TimeRange"] = $param["TimeRange"] ? "true" : "false";
            } else {
                $this->RequestParams["TimeRange"] = $param["TimeRange"];
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