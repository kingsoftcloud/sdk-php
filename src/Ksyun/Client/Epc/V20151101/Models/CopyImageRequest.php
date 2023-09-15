<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CopyImageRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DestinationName" => null,
         /**String**/
        "ImageId" => null,
         /**String**/
        "DestinationRegion" => null,
         /**String**/
        "CopyTag" => null,
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
        if (array_key_exists("DestinationName",$param) and $param["DestinationName"] !== null) {
            if(is_bool($param["DestinationName"])){
                $this->RequestParams["DestinationName"] = $param["DestinationName"] ? "true" : "false";
            } else {
                $this->RequestParams["DestinationName"] = $param["DestinationName"];
            }
        }
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            if(is_bool($param["ImageId"])){
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("DestinationRegion",$param) and $param["DestinationRegion"] !== null) {
            if(is_bool($param["DestinationRegion"])){
                $this->RequestParams["DestinationRegion"] = $param["DestinationRegion"] ? "true" : "false";
            } else {
                $this->RequestParams["DestinationRegion"] = $param["DestinationRegion"];
            }
        }
        if (array_key_exists("CopyTag",$param) and $param["CopyTag"] !== null) {
            if(is_bool($param["CopyTag"])){
                $this->RequestParams["CopyTag"] = $param["CopyTag"] ? "true" : "false";
            } else {
                $this->RequestParams["CopyTag"] = $param["CopyTag"];
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