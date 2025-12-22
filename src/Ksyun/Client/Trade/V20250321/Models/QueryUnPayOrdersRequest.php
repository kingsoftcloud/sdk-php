<?php
namespace  Ksyun\Client\Trade\V20250321\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class QueryUnPayOrdersRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "page" => null,
         /**Int**/
        "size" => null,
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
        if (array_key_exists("page",$param) and $param["page"] !== null) {
            if(is_bool($param["page"])){
                $this->RequestParams["page"] = $param["page"] ? "true" : "false";
            } else {
                $this->RequestParams["page"] = $param["page"];
            }
        }
        if (array_key_exists("size",$param) and $param["size"] !== null) {
            if(is_bool($param["size"])){
                $this->RequestParams["size"] = $param["size"] ? "true" : "false";
            } else {
                $this->RequestParams["size"] = $param["size"];
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