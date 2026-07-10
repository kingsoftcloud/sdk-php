<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeFineTuneJobAndPodEventsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FineTuneJobId" => null,
         /**Array**/
        "PodNames" => null,
         /**String**/
        "SortKey" => null,
         /**String**/
        "Sort" => null,
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
        if (array_key_exists("FineTuneJobId",$param) and $param["FineTuneJobId"] !== null) {
            if(is_bool($param["FineTuneJobId"])){
                $this->RequestParams["FineTuneJobId"] = $param["FineTuneJobId"] ? "true" : "false";
            } else {
                $this->RequestParams["FineTuneJobId"] = $param["FineTuneJobId"];
            }
        }
        if (array_key_exists("PodNames",$param) and $param["PodNames"] !== null) {
            if(is_bool($param["PodNames"])){
                $this->RequestParams["PodNames"] = $param["PodNames"] ? "true" : "false";
            } else {
                $this->RequestParams["PodNames"] = $param["PodNames"];
            }
        }
        if (array_key_exists("SortKey",$param) and $param["SortKey"] !== null) {
            if(is_bool($param["SortKey"])){
                $this->RequestParams["SortKey"] = $param["SortKey"] ? "true" : "false";
            } else {
                $this->RequestParams["SortKey"] = $param["SortKey"];
            }
        }
        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            if(is_bool($param["Sort"])){
                $this->RequestParams["Sort"] = $param["Sort"] ? "true" : "false";
            } else {
                $this->RequestParams["Sort"] = $param["Sort"];
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