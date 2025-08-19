<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ExportImageRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ImageId" => null,
         /**String**/
        "Ks3Bucket" => null,
         /**String**/
        "ObjectName" => null,
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            if(is_bool($param["ImageId"])){
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("Ks3Bucket",$param) and $param["Ks3Bucket"] !== null) {
            if(is_bool($param["Ks3Bucket"])){
                $this->RequestParams["Ks3Bucket"] = $param["Ks3Bucket"] ? "true" : "false";
            } else {
                $this->RequestParams["Ks3Bucket"] = $param["Ks3Bucket"];
            }
        }
        if (array_key_exists("ObjectName",$param) and $param["ObjectName"] !== null) {
            if(is_bool($param["ObjectName"])){
                $this->RequestParams["ObjectName"] = $param["ObjectName"] ? "true" : "false";
            } else {
                $this->RequestParams["ObjectName"] = $param["ObjectName"];
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