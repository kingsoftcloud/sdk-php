<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteNetworkAclEntryRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "NetworkAclId" => null,
         /**String**/
        "NetworkAclEntryId" => null,
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
        if (array_key_exists("NetworkAclId",$param) and $param["NetworkAclId"] !== null) {
            if(is_bool($param["NetworkAclId"])){
                $this->RequestParams["NetworkAclId"] = $param["NetworkAclId"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkAclId"] = $param["NetworkAclId"];
            }
        }
        if (array_key_exists("NetworkAclEntryId",$param) and $param["NetworkAclEntryId"] !== null) {
            if(is_bool($param["NetworkAclEntryId"])){
                $this->RequestParams["NetworkAclEntryId"] = $param["NetworkAclEntryId"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkAclEntryId"] = $param["NetworkAclEntryId"];
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