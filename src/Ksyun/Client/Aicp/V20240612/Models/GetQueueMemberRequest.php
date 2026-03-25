<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetQueueMemberRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "QueueId" => null,
         /**String**/
        "SubAccountId" => null,
         /**Int**/
        "Page" => null,
         /**Int**/
        "PageSize" => null,
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
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            if(is_bool($param["Page"])){
                $this->RequestParams["Page"] = $param["Page"] ? "true" : "false";
            } else {
                $this->RequestParams["Page"] = $param["Page"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
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