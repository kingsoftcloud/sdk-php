<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetAlbStatusRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AlbId" => null,
         /**String**/
        "State" => null,
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
        if (array_key_exists("AlbId",$param) and $param["AlbId"] !== null) {
            if(is_bool($param["AlbId"])){
                $this->RequestParams["AlbId"] = $param["AlbId"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbId"] = $param["AlbId"];
            }
        }
        if (array_key_exists("State",$param) and $param["State"] !== null) {
            if(is_bool($param["State"])){
                $this->RequestParams["State"] = $param["State"] ? "true" : "false";
            } else {
                $this->RequestParams["State"] = $param["State"];
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