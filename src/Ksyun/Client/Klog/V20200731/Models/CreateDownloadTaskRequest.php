<?php
namespace  Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateDownloadTaskRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ProjectName" => null,
         /**String**/
        "LogPoolNames" => null,
         /**Object**/
        "Config" => null,
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
        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            if(is_bool($param["ProjectName"])){
                $this->RequestParams["ProjectName"] = $param["ProjectName"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectName"] = $param["ProjectName"];
            }
        }
        if (array_key_exists("LogPoolNames",$param) and $param["LogPoolNames"] !== null) {
            if(is_bool($param["LogPoolNames"])){
                $this->RequestParams["LogPoolNames"] = $param["LogPoolNames"] ? "true" : "false";
            } else {
                $this->RequestParams["LogPoolNames"] = $param["LogPoolNames"];
            }
        }
        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            if(is_bool($param["Config"])){
                $this->RequestParams["Config"] = $param["Config"] ? "true" : "false";
            } else {
                $this->RequestParams["Config"] = $param["Config"];
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