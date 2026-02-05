<?php
namespace  Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateWebSocketPublicUriRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusterId" => null,
         /**String**/
        "Namespace" => null,
         /**String**/
        "PodName" => null,
         /**String**/
        "ContainerName" => null,
         /**String**/
        "Command" => null,
         /**Boolean**/
        "Tty" => null,
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            if(is_bool($param["Namespace"])){
                $this->RequestParams["Namespace"] = $param["Namespace"] ? "true" : "false";
            } else {
                $this->RequestParams["Namespace"] = $param["Namespace"];
            }
        }
        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            if(is_bool($param["PodName"])){
                $this->RequestParams["PodName"] = $param["PodName"] ? "true" : "false";
            } else {
                $this->RequestParams["PodName"] = $param["PodName"];
            }
        }
        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            if(is_bool($param["ContainerName"])){
                $this->RequestParams["ContainerName"] = $param["ContainerName"] ? "true" : "false";
            } else {
                $this->RequestParams["ContainerName"] = $param["ContainerName"];
            }
        }
        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            if(is_bool($param["Command"])){
                $this->RequestParams["Command"] = $param["Command"] ? "true" : "false";
            } else {
                $this->RequestParams["Command"] = $param["Command"];
            }
        }
        if (array_key_exists("Tty",$param) and $param["Tty"] !== null) {
            if(is_bool($param["Tty"])){
                $this->RequestParams["Tty"] = $param["Tty"] ? "true" : "false";
            } else {
                $this->RequestParams["Tty"] = $param["Tty"];
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