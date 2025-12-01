<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeModelChatsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ChatId" => null,
         /**Int**/
        "CreateTimeStart" => null,
         /**Int**/
        "CreateTimeEnd" => null,
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
        if (array_key_exists("ChatId",$param) and $param["ChatId"] !== null) {
            if(is_bool($param["ChatId"])){
                $this->RequestParams["ChatId"] = $param["ChatId"] ? "true" : "false";
            } else {
                $this->RequestParams["ChatId"] = $param["ChatId"];
            }
        }
        if (array_key_exists("CreateTimeStart",$param) and $param["CreateTimeStart"] !== null) {
            if(is_bool($param["CreateTimeStart"])){
                $this->RequestParams["CreateTimeStart"] = $param["CreateTimeStart"] ? "true" : "false";
            } else {
                $this->RequestParams["CreateTimeStart"] = $param["CreateTimeStart"];
            }
        }
        if (array_key_exists("CreateTimeEnd",$param) and $param["CreateTimeEnd"] !== null) {
            if(is_bool($param["CreateTimeEnd"])){
                $this->RequestParams["CreateTimeEnd"] = $param["CreateTimeEnd"] ? "true" : "false";
            } else {
                $this->RequestParams["CreateTimeEnd"] = $param["CreateTimeEnd"];
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