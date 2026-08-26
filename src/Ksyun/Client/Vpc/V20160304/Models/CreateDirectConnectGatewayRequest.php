<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateDirectConnectGatewayRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VpcId" => null,
         /**String**/
        "DirectConnectGatewayName" => null,
         /**String**/
        "ProjectId" => null,
         /**Boolean**/
        "AutoPublishSystemRoute" => null,
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            if(is_bool($param["VpcId"])){
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("DirectConnectGatewayName",$param) and $param["DirectConnectGatewayName"] !== null) {
            if(is_bool($param["DirectConnectGatewayName"])){
                $this->RequestParams["DirectConnectGatewayName"] = $param["DirectConnectGatewayName"] ? "true" : "false";
            } else {
                $this->RequestParams["DirectConnectGatewayName"] = $param["DirectConnectGatewayName"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("AutoPublishSystemRoute",$param) and $param["AutoPublishSystemRoute"] !== null) {
            if(is_bool($param["AutoPublishSystemRoute"])){
                $this->RequestParams["AutoPublishSystemRoute"] = $param["AutoPublishSystemRoute"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoPublishSystemRoute"] = $param["AutoPublishSystemRoute"];
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