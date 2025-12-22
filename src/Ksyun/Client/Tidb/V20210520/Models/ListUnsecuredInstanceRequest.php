<?php
namespace  Ksyun\Client\Tidb\V20210520\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ListUnsecuredInstanceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ProjectIds" => null,
         /**String**/
        "FuzzySearch" => null,
         /**Int**/
        "Offset" => null,
         /**Int**/
        "Limit" => null,
         /**String**/
        "OrderBy" => null,
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
        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            if(is_bool($param["ProjectIds"])){
                $this->RequestParams["ProjectIds"] = $param["ProjectIds"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectIds"] = $param["ProjectIds"];
            }
        }
        if (array_key_exists("FuzzySearch",$param) and $param["FuzzySearch"] !== null) {
            if(is_bool($param["FuzzySearch"])){
                $this->RequestParams["FuzzySearch"] = $param["FuzzySearch"] ? "true" : "false";
            } else {
                $this->RequestParams["FuzzySearch"] = $param["FuzzySearch"];
            }
        }
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            if(is_bool($param["Offset"])){
                $this->RequestParams["Offset"] = $param["Offset"] ? "true" : "false";
            } else {
                $this->RequestParams["Offset"] = $param["Offset"];
            }
        }
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            if(is_bool($param["Limit"])){
                $this->RequestParams["Limit"] = $param["Limit"] ? "true" : "false";
            } else {
                $this->RequestParams["Limit"] = $param["Limit"];
            }
        }
        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            if(is_bool($param["OrderBy"])){
                $this->RequestParams["OrderBy"] = $param["OrderBy"] ? "true" : "false";
            } else {
                $this->RequestParams["OrderBy"] = $param["OrderBy"];
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