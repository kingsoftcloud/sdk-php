<?php
namespace  Ksyun\Client\Waf\V20200707\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteDomainRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ResourceRecordId" => null,
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
        if (array_key_exists("ResourceRecordId",$param) and $param["ResourceRecordId"] !== null) {
            if(is_bool($param["ResourceRecordId"])){
                $this->RequestParams["ResourceRecordId"] = $param["ResourceRecordId"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourceRecordId"] = $param["ResourceRecordId"];
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