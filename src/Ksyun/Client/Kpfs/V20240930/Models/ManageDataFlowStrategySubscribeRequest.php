<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ManageDataFlowStrategySubscribeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FileSystemId" => null,
         /**String**/
        "StrategyId" => null,
         /**String**/
        "Operation" => null,
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            if(is_bool($param["FileSystemId"])){
                $this->RequestParams["FileSystemId"] = $param["FileSystemId"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSystemId"] = $param["FileSystemId"];
            }
        }
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            if(is_bool($param["StrategyId"])){
                $this->RequestParams["StrategyId"] = $param["StrategyId"] ? "true" : "false";
            } else {
                $this->RequestParams["StrategyId"] = $param["StrategyId"];
            }
        }
        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            if(is_bool($param["Operation"])){
                $this->RequestParams["Operation"] = $param["Operation"] ? "true" : "false";
            } else {
                $this->RequestParams["Operation"] = $param["Operation"];
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