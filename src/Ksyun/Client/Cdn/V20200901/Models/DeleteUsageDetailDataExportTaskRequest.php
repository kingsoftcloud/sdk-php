<?php
namespace  Ksyun\Client\Cdn\V20200901\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteUsageDetailDataExportTaskRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "TaskID" => null,
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
        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            if(is_bool($param["TaskID"])){
                $this->RequestParams["TaskID"] = $param["TaskID"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskID"] = $param["TaskID"];
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