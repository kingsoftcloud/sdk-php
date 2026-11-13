<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeStructuredDataRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DatasetId" => null,
         /**String**/
        "DocumentId" => null,
         /**Int**/
        "Page" => null,
         /**Int**/
        "PageSize" => null,
         /**String**/
        "SearchColumn" => null,
         /**String**/
        "SearchValue" => null,
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
        if (array_key_exists("DatasetId",$param) and $param["DatasetId"] !== null) {
            if(is_bool($param["DatasetId"])){
                $this->RequestParams["DatasetId"] = $param["DatasetId"] ? "true" : "false";
            } else {
                $this->RequestParams["DatasetId"] = $param["DatasetId"];
            }
        }
        if (array_key_exists("DocumentId",$param) and $param["DocumentId"] !== null) {
            if(is_bool($param["DocumentId"])){
                $this->RequestParams["DocumentId"] = $param["DocumentId"] ? "true" : "false";
            } else {
                $this->RequestParams["DocumentId"] = $param["DocumentId"];
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
        if (array_key_exists("SearchColumn",$param) and $param["SearchColumn"] !== null) {
            if(is_bool($param["SearchColumn"])){
                $this->RequestParams["SearchColumn"] = $param["SearchColumn"] ? "true" : "false";
            } else {
                $this->RequestParams["SearchColumn"] = $param["SearchColumn"];
            }
        }
        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            if(is_bool($param["SearchValue"])){
                $this->RequestParams["SearchValue"] = $param["SearchValue"] ? "true" : "false";
            } else {
                $this->RequestParams["SearchValue"] = $param["SearchValue"];
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