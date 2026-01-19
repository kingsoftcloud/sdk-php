<?php
namespace  Ksyun\Client\Sks\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateKeyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "projectId" => null,
         /**String**/
        "KeyName" => null,
         /**String**/
        "Description" => null,
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
        if (array_key_exists("projectId",$param) and $param["projectId"] !== null) {
            if(is_bool($param["projectId"])){
                $this->RequestParams["projectId"] = $param["projectId"] ? "true" : "false";
            } else {
                $this->RequestParams["projectId"] = $param["projectId"];
            }
        }
        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            if(is_bool($param["KeyName"])){
                $this->RequestParams["KeyName"] = $param["KeyName"] ? "true" : "false";
            } else {
                $this->RequestParams["KeyName"] = $param["KeyName"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
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