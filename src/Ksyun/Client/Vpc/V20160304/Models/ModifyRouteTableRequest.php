<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyRouteTableRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "RouteTableId" => null,
         /**String**/
        "RouteTableName" => null,
         /**String**/
        "Description" => null,
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
        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            if(is_bool($param["RouteTableId"])){
                $this->RequestParams["RouteTableId"] = $param["RouteTableId"] ? "true" : "false";
            } else {
                $this->RequestParams["RouteTableId"] = $param["RouteTableId"];
            }
        }
        if (array_key_exists("RouteTableName",$param) and $param["RouteTableName"] !== null) {
            if(is_bool($param["RouteTableName"])){
                $this->RequestParams["RouteTableName"] = $param["RouteTableName"] ? "true" : "false";
            } else {
                $this->RequestParams["RouteTableName"] = $param["RouteTableName"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
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