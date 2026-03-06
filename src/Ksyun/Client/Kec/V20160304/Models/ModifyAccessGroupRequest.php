<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyAccessGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AccessGroupId" => null,
         /**String**/
        "AccessGroupName" => null,
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
        if (array_key_exists("AccessGroupId",$param) and $param["AccessGroupId"] !== null) {
            if(is_bool($param["AccessGroupId"])){
                $this->RequestParams["AccessGroupId"] = $param["AccessGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessGroupId"] = $param["AccessGroupId"];
            }
        }
        if (array_key_exists("AccessGroupName",$param) and $param["AccessGroupName"] !== null) {
            if(is_bool($param["AccessGroupName"])){
                $this->RequestParams["AccessGroupName"] = $param["AccessGroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessGroupName"] = $param["AccessGroupName"];
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