<?php
namespace  Ksyun\Client\Cdn\V20160901\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetRefreshOrPreloadTaskRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DomainIds" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DomainIds",$param) and $param["DomainIds"] !== null) {
            if(is_bool($param["DomainIds"])){
                $this->RequestParams["DomainIds"] = $param["DomainIds"] ? "true" : "false";
            } else {
                $this->RequestParams["DomainIds"] = $param["DomainIds"];
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