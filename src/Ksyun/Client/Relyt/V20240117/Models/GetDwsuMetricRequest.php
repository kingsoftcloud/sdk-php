<?php
namespace  Ksyun\Client\Relyt\V20240117\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetDwsuMetricRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DwsuId" => null,
         /**Int**/
        "Timestamp" => null,
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
        if (array_key_exists("DwsuId",$param) and $param["DwsuId"] !== null) {
            if(is_bool($param["DwsuId"])){
                $this->RequestParams["DwsuId"] = $param["DwsuId"] ? "true" : "false";
            } else {
                $this->RequestParams["DwsuId"] = $param["DwsuId"];
            }
        }
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            if(is_bool($param["Timestamp"])){
                $this->RequestParams["Timestamp"] = $param["Timestamp"] ? "true" : "false";
            } else {
                $this->RequestParams["Timestamp"] = $param["Timestamp"];
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