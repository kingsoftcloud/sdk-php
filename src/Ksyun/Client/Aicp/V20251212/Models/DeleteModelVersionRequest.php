<?php
namespace  Ksyun\Client\Aicp\V20251212\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteModelVersionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ModelVersionId" => null,
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
        if (array_key_exists("ModelVersionId",$param) and $param["ModelVersionId"] !== null) {
            if(is_bool($param["ModelVersionId"])){
                $this->RequestParams["ModelVersionId"] = $param["ModelVersionId"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelVersionId"] = $param["ModelVersionId"];
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