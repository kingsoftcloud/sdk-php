<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyResourcePoolRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ResourcePoolId" => null,
         /**String**/
        "ResourcePoolName" => null,
         /**Boolean**/
        "Overallocate" => null,
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
        if (array_key_exists("ResourcePoolName",$param) and $param["ResourcePoolName"] !== null) {
            if(is_bool($param["ResourcePoolName"])){
                $this->RequestParams["ResourcePoolName"] = $param["ResourcePoolName"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourcePoolName"] = $param["ResourcePoolName"];
            }
        }
        if (array_key_exists("Overallocate",$param) and $param["Overallocate"] !== null) {
            if(is_bool($param["Overallocate"])){
                $this->RequestParams["Overallocate"] = $param["Overallocate"] ? "true" : "false";
            } else {
                $this->RequestParams["Overallocate"] = $param["Overallocate"];
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