<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class RemoveQueueAccessUserRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "QueueId" => null,
         /**String**/
        "SubAccountId" => null,
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
        if (array_key_exists("QueueId",$param) and $param["QueueId"] !== null) {
            if(is_bool($param["QueueId"])){
                $this->RequestParams["QueueId"] = $param["QueueId"] ? "true" : "false";
            } else {
                $this->RequestParams["QueueId"] = $param["QueueId"];
            }
        }
        if (array_key_exists("SubAccountId",$param) and $param["SubAccountId"] !== null) {
            if(is_bool($param["SubAccountId"])){
                $this->RequestParams["SubAccountId"] = $param["SubAccountId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubAccountId"] = $param["SubAccountId"];
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