<?php
namespace  Ksyun\Client\Kad\V20161122\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteForwardConfRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ForwardConfId" => null,
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
        if (array_key_exists("ForwardConfId",$param) and $param["ForwardConfId"] !== null) {
            if(is_bool($param["ForwardConfId"])){
                $this->RequestParams["ForwardConfId"] = $param["ForwardConfId"] ? "true" : "false";
            } else {
                $this->RequestParams["ForwardConfId"] = $param["ForwardConfId"];
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