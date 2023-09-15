<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteShareImageRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ImageId" => null,
         /**String**/
        "AccountId.N" => null,
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
        if (array_key_exists("AccountId.N",$param) and $param["AccountId.N"] !== null) {
            if(is_bool($param["AccountId.N"])){
                $this->RequestParams["AccountId.N"] = $param["AccountId.N"] ? "true" : "false";
            } else {
                $this->RequestParams["AccountId.N"] = $param["AccountId.N"];
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