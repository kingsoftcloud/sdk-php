<?php
namespace  Ksyun\Client\Knad\V20230323\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyBlockLocationRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "KnadId" => null,
         /**Int**/
        "LocationBlock" => null,
         /**Array**/
        "Location" => null,
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
        if (array_key_exists("KnadId",$param) and $param["KnadId"] !== null) {
            if(is_bool($param["KnadId"])){
                $this->RequestParams["KnadId"] = $param["KnadId"] ? "true" : "false";
            } else {
                $this->RequestParams["KnadId"] = $param["KnadId"];
            }
        }
        if (array_key_exists("LocationBlock",$param) and $param["LocationBlock"] !== null) {
            if(is_bool($param["LocationBlock"])){
                $this->RequestParams["LocationBlock"] = $param["LocationBlock"] ? "true" : "false";
            } else {
                $this->RequestParams["LocationBlock"] = $param["LocationBlock"];
            }
        }
        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            if(is_bool($param["Location"])){
                $this->RequestParams["Location"] = $param["Location"] ? "true" : "false";
            } else {
                $this->RequestParams["Location"] = $param["Location"];
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