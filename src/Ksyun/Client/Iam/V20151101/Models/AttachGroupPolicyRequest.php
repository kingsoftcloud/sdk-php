<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AttachGroupPolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "GroupName" => null,
         /**String**/
        "PolicyKrn" => null,
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            if(is_bool($param["GroupName"])){
                $this->RequestParams["GroupName"] = $param["GroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["GroupName"] = $param["GroupName"];
            }
        }
        if (array_key_exists("PolicyKrn",$param) and $param["PolicyKrn"] !== null) {
            if(is_bool($param["PolicyKrn"])){
                $this->RequestParams["PolicyKrn"] = $param["PolicyKrn"] ? "true" : "false";
            } else {
                $this->RequestParams["PolicyKrn"] = $param["PolicyKrn"];
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