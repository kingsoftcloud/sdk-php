<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteAccessGroupAssociatedPermissionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AccessGroupId" => null,
         /**String**/
        "AssociatedResourceId" => null,
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
        if (array_key_exists("AssociatedResourceId",$param) and $param["AssociatedResourceId"] !== null) {
            if(is_bool($param["AssociatedResourceId"])){
                $this->RequestParams["AssociatedResourceId"] = $param["AssociatedResourceId"] ? "true" : "false";
            } else {
                $this->RequestParams["AssociatedResourceId"] = $param["AssociatedResourceId"];
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