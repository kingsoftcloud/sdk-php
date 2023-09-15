<?php
namespace  Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetQuickSearchRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ProjectName" => null,
         /**String**/
        "LogPoolName" => null,
         /**String**/
        "QuickSearchName" => null,
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