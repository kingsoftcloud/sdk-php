<?php
namespace  Ksyun\Client\Influxdb\V20191010\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteMeasurementRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "DatabaseName" => null,
         /**String**/
        "MeasurementName" => null,
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            if(is_bool($param["DatabaseName"])){
                $this->RequestParams["DatabaseName"] = $param["DatabaseName"] ? "true" : "false";
            } else {
                $this->RequestParams["DatabaseName"] = $param["DatabaseName"];
            }
        }
        if (array_key_exists("MeasurementName",$param) and $param["MeasurementName"] !== null) {
            if(is_bool($param["MeasurementName"])){
                $this->RequestParams["MeasurementName"] = $param["MeasurementName"] ? "true" : "false";
            } else {
                $this->RequestParams["MeasurementName"] = $param["MeasurementName"];
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