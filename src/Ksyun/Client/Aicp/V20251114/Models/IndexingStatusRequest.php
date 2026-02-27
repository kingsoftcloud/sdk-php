<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class IndexingStatusRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DatasetId" => null,
         /**String**/
        "Batch" => null,
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
        if (array_key_exists("Batch",$param) and $param["Batch"] !== null) {
            if(is_bool($param["Batch"])){
                $this->RequestParams["Batch"] = $param["Batch"] ? "true" : "false";
            } else {
                $this->RequestParams["Batch"] = $param["Batch"];
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