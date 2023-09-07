<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteMountTargetRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "MountTargetId" => null,
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
        if (array_key_exists("MountTargetId",$param) and $param["MountTargetId"] !== null) {
            if(is_bool($param["MountTargetId"])){
                $this->RequestParams["MountTargetId"] = $param["MountTargetId"] ? "true" : "false";
            } else {
                $this->RequestParams["MountTargetId"] = $param["MountTargetId"];
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