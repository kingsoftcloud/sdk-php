<?php
namespace  Ksyun\Client\Ked\V20250501\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetStockRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "edgeNodeId" => null,
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
        if (array_key_exists("edgeNodeId",$param) and $param["edgeNodeId"] !== null) {
            if(is_bool($param["edgeNodeId"])){
                $this->RequestParams["edgeNodeId"] = $param["edgeNodeId"] ? "true" : "false";
            } else {
                $this->RequestParams["edgeNodeId"] = $param["edgeNodeId"];
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