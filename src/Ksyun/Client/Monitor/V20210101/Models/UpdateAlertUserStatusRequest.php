<?php
namespace  Ksyun\Client\Monitor\V20210101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdateAlertUserStatusRequest extends BaseModel
{
    public $RequestParams = [
         /**Array**/
        "UserId" => null,
         /**Int**/
        "UserStatus" => null,
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            if(is_bool($param["UserId"])){
                $this->RequestParams["UserId"] = $param["UserId"] ? "true" : "false";
            } else {
                $this->RequestParams["UserId"] = $param["UserId"];
            }
        }
        if (array_key_exists("UserStatus",$param) and $param["UserStatus"] !== null) {
            if(is_bool($param["UserStatus"])){
                $this->RequestParams["UserStatus"] = $param["UserStatus"] ? "true" : "false";
            } else {
                $this->RequestParams["UserStatus"] = $param["UserStatus"];
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