<?php
namespace  Ksyun\Client\Kfw\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteBatchCfwAddrbookRequest extends BaseModel
{
    public $RequestParams = [
         /**Array**/
        "AddrbookIds" => null,
         /**String**/
        "CfwInstanceId" => null,
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
        if (array_key_exists("AddrbookIds",$param) and $param["AddrbookIds"] !== null) {
            if(is_bool($param["AddrbookIds"])){
                $this->RequestParams["AddrbookIds"] = $param["AddrbookIds"] ? "true" : "false";
            } else {
                $this->RequestParams["AddrbookIds"] = $param["AddrbookIds"];
            }
        }
        if (array_key_exists("CfwInstanceId",$param) and $param["CfwInstanceId"] !== null) {
            if(is_bool($param["CfwInstanceId"])){
                $this->RequestParams["CfwInstanceId"] = $param["CfwInstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["CfwInstanceId"] = $param["CfwInstanceId"];
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