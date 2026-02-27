<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ImportDocumentsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DatasetId" => null,
         /**Object**/
        "Data" => null,
         /**String**/
        "AddType" => null,
         /**Array**/
        "Ks3Path" => null,
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            if(is_bool($param["Data"])){
                $this->RequestParams["Data"] = $param["Data"] ? "true" : "false";
            } else {
                $this->RequestParams["Data"] = $param["Data"];
            }
        }
        if (array_key_exists("AddType",$param) and $param["AddType"] !== null) {
            if(is_bool($param["AddType"])){
                $this->RequestParams["AddType"] = $param["AddType"] ? "true" : "false";
            } else {
                $this->RequestParams["AddType"] = $param["AddType"];
            }
        }
        if (array_key_exists("Ks3Path",$param) and $param["Ks3Path"] !== null) {
            if(is_bool($param["Ks3Path"])){
                $this->RequestParams["Ks3Path"] = $param["Ks3Path"] ? "true" : "false";
            } else {
                $this->RequestParams["Ks3Path"] = $param["Ks3Path"];
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