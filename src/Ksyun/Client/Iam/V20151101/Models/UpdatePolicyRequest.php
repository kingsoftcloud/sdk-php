<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdatePolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PolicyKrn" => null,
         /**String**/
        "NewDescription" => null,
         /**String**/
        "NewPolicyName" => null,
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
        if (array_key_exists("PolicyKrn",$param) and $param["PolicyKrn"] !== null) {
            if(is_bool($param["PolicyKrn"])){
                $this->RequestParams["PolicyKrn"] = $param["PolicyKrn"] ? "true" : "false";
            } else {
                $this->RequestParams["PolicyKrn"] = $param["PolicyKrn"];
            }
        }
        if (array_key_exists("NewDescription",$param) and $param["NewDescription"] !== null) {
            if(is_bool($param["NewDescription"])){
                $this->RequestParams["NewDescription"] = $param["NewDescription"] ? "true" : "false";
            } else {
                $this->RequestParams["NewDescription"] = $param["NewDescription"];
            }
        }
        if (array_key_exists("NewPolicyName",$param) and $param["NewPolicyName"] !== null) {
            if(is_bool($param["NewPolicyName"])){
                $this->RequestParams["NewPolicyName"] = $param["NewPolicyName"] ? "true" : "false";
            } else {
                $this->RequestParams["NewPolicyName"] = $param["NewPolicyName"];
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