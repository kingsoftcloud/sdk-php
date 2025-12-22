<?php
namespace  Ksyun\Client\Cloud_advisor\V20250610\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateTaskRequest extends BaseModel
{
    public $RequestParams = [
         /**Array**/
        "inspectionItemIDs" => null,
         /**Array**/
        "productGroupIds" => null,
         /**Array**/
        "inspectionItemTypes" => null,
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
        if (array_key_exists("inspectionItemIDs",$param) and $param["inspectionItemIDs"] !== null) {
            if(is_bool($param["inspectionItemIDs"])){
                $this->RequestParams["inspectionItemIDs"] = $param["inspectionItemIDs"] ? "true" : "false";
            } else {
                $this->RequestParams["inspectionItemIDs"] = $param["inspectionItemIDs"];
            }
        }
        if (array_key_exists("productGroupIds",$param) and $param["productGroupIds"] !== null) {
            if(is_bool($param["productGroupIds"])){
                $this->RequestParams["productGroupIds"] = $param["productGroupIds"] ? "true" : "false";
            } else {
                $this->RequestParams["productGroupIds"] = $param["productGroupIds"];
            }
        }
        if (array_key_exists("inspectionItemTypes",$param) and $param["inspectionItemTypes"] !== null) {
            if(is_bool($param["inspectionItemTypes"])){
                $this->RequestParams["inspectionItemTypes"] = $param["inspectionItemTypes"] ? "true" : "false";
            } else {
                $this->RequestParams["inspectionItemTypes"] = $param["inspectionItemTypes"];
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