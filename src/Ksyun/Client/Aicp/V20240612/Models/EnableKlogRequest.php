<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class EnableKlogRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ResourcePoolId" => null,
         /**Boolean**/
        "EnableKlog" => null,
         /**String**/
        "LogProjectName" => null,
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
        if (array_key_exists("ResourcePoolId",$param) and $param["ResourcePoolId"] !== null) {
            if(is_bool($param["ResourcePoolId"])){
                $this->RequestParams["ResourcePoolId"] = $param["ResourcePoolId"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourcePoolId"] = $param["ResourcePoolId"];
            }
        }
        if (array_key_exists("EnableKlog",$param) and $param["EnableKlog"] !== null) {
            if(is_bool($param["EnableKlog"])){
                $this->RequestParams["EnableKlog"] = $param["EnableKlog"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableKlog"] = $param["EnableKlog"];
            }
        }
        if (array_key_exists("LogProjectName",$param) and $param["LogProjectName"] !== null) {
            if(is_bool($param["LogProjectName"])){
                $this->RequestParams["LogProjectName"] = $param["LogProjectName"] ? "true" : "false";
            } else {
                $this->RequestParams["LogProjectName"] = $param["LogProjectName"];
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