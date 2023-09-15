<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ReplyProcessRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "OperationProcessId" => null,
         /**String**/
        "Remarks" => null,
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
        if (array_key_exists("OperationProcessId",$param) and $param["OperationProcessId"] !== null) {
            if(is_bool($param["OperationProcessId"])){
                $this->RequestParams["OperationProcessId"] = $param["OperationProcessId"] ? "true" : "false";
            } else {
                $this->RequestParams["OperationProcessId"] = $param["OperationProcessId"];
            }
        }
        if (array_key_exists("Remarks",$param) and $param["Remarks"] !== null) {
            if(is_bool($param["Remarks"])){
                $this->RequestParams["Remarks"] = $param["Remarks"] ? "true" : "false";
            } else {
                $this->RequestParams["Remarks"] = $param["Remarks"];
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