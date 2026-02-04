<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeletePerformanceOneNfsAclRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "NfsAclId" => null,
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
        if (array_key_exists("NfsAclId",$param) and $param["NfsAclId"] !== null) {
            if(is_bool($param["NfsAclId"])){
                $this->RequestParams["NfsAclId"] = $param["NfsAclId"] ? "true" : "false";
            } else {
                $this->RequestParams["NfsAclId"] = $param["NfsAclId"];
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