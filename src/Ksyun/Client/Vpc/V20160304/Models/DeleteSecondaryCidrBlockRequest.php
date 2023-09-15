<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteSecondaryCidrBlockRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VpcId" => null,
         /**String**/
        "SecondaryCidrId" => null,
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
        if (array_key_exists("SecondaryCidrId",$param) and $param["SecondaryCidrId"] !== null) {
            if(is_bool($param["SecondaryCidrId"])){
                $this->RequestParams["SecondaryCidrId"] = $param["SecondaryCidrId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecondaryCidrId"] = $param["SecondaryCidrId"];
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