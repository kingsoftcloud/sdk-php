<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeletePerformanceOnePosixAclRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PosixAclId" => null,
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
        if (array_key_exists("PosixAclId",$param) and $param["PosixAclId"] !== null) {
            if(is_bool($param["PosixAclId"])){
                $this->RequestParams["PosixAclId"] = $param["PosixAclId"] ? "true" : "false";
            } else {
                $this->RequestParams["PosixAclId"] = $param["PosixAclId"];
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