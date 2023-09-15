<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ResetDBParameterGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBParameterGroupId" => null,
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
        if (array_key_exists("DBParameterGroupId",$param) and $param["DBParameterGroupId"] !== null) {
            if(is_bool($param["DBParameterGroupId"])){
                $this->RequestParams["DBParameterGroupId"] = $param["DBParameterGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["DBParameterGroupId"] = $param["DBParameterGroupId"];
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