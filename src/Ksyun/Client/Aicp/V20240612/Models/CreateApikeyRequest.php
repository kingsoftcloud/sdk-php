<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateApikeyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Name" => null,
         /**String**/
        "Description" => null,
         /**Int**/
        "ProjectId" => null,
         /**Array**/
        "AssociatedModelIds" => null,
         /**Boolean**/
        "AllAssociatedModel" => null,
         /**Array**/
        "AllowedIps" => null,
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            if(is_bool($param["Name"])){
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("AssociatedModelIds",$param) and $param["AssociatedModelIds"] !== null) {
            if(is_bool($param["AssociatedModelIds"])){
                $this->RequestParams["AssociatedModelIds"] = $param["AssociatedModelIds"] ? "true" : "false";
            } else {
                $this->RequestParams["AssociatedModelIds"] = $param["AssociatedModelIds"];
            }
        }
        if (array_key_exists("AllAssociatedModel",$param) and $param["AllAssociatedModel"] !== null) {
            if(is_bool($param["AllAssociatedModel"])){
                $this->RequestParams["AllAssociatedModel"] = $param["AllAssociatedModel"] ? "true" : "false";
            } else {
                $this->RequestParams["AllAssociatedModel"] = $param["AllAssociatedModel"];
            }
        }
        if (array_key_exists("AllowedIps",$param) and $param["AllowedIps"] !== null) {
            if(is_bool($param["AllowedIps"])){
                $this->RequestParams["AllowedIps"] = $param["AllowedIps"] ? "true" : "false";
            } else {
                $this->RequestParams["AllowedIps"] = $param["AllowedIps"];
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