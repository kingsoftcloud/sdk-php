<?php
namespace  Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeletePdnsFdZoneRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FdZoneId" => null,
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
        if (array_key_exists("FdZoneId",$param) and $param["FdZoneId"] !== null) {
            if(is_bool($param["FdZoneId"])){
                $this->RequestParams["FdZoneId"] = $param["FdZoneId"] ? "true" : "false";
            } else {
                $this->RequestParams["FdZoneId"] = $param["FdZoneId"];
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