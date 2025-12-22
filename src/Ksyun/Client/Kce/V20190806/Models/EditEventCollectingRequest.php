<?php
namespace  Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class EditEventCollectingRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusterId" => null,
         /**Boolean**/
        "EnableEventCollecting" => null,
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            if(is_bool($param["ClusterId"])){
                $this->RequestParams["ClusterId"] = $param["ClusterId"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterId"] = $param["ClusterId"];
            }
        }
        if (array_key_exists("EnableEventCollecting",$param) and $param["EnableEventCollecting"] !== null) {
            if(is_bool($param["EnableEventCollecting"])){
                $this->RequestParams["EnableEventCollecting"] = $param["EnableEventCollecting"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableEventCollecting"] = $param["EnableEventCollecting"];
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