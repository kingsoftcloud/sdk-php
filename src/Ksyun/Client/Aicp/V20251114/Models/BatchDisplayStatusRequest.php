<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class BatchDisplayStatusRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DatasetId" => null,
         /**Array**/
        "DocumentIds" => null,
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
        if (array_key_exists("DatasetId",$param) and $param["DatasetId"] !== null) {
            if(is_bool($param["DatasetId"])){
                $this->RequestParams["DatasetId"] = $param["DatasetId"] ? "true" : "false";
            } else {
                $this->RequestParams["DatasetId"] = $param["DatasetId"];
            }
        }
        if (array_key_exists("DocumentIds",$param) and $param["DocumentIds"] !== null) {
            if(is_bool($param["DocumentIds"])){
                $this->RequestParams["DocumentIds"] = $param["DocumentIds"] ? "true" : "false";
            } else {
                $this->RequestParams["DocumentIds"] = $param["DocumentIds"];
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