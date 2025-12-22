<?php
namespace  Ksyun\Client\Sts\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AssumeRoleRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "RoleKrn" => null,
         /**String**/
        "RoleSessionName" => null,
         /**String**/
        "DurationSeconds" => null,
         /**String**/
        "Policy" => null,
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
        if (array_key_exists("RoleKrn",$param) and $param["RoleKrn"] !== null) {
            if(is_bool($param["RoleKrn"])){
                $this->RequestParams["RoleKrn"] = $param["RoleKrn"] ? "true" : "false";
            } else {
                $this->RequestParams["RoleKrn"] = $param["RoleKrn"];
            }
        }
        if (array_key_exists("RoleSessionName",$param) and $param["RoleSessionName"] !== null) {
            if(is_bool($param["RoleSessionName"])){
                $this->RequestParams["RoleSessionName"] = $param["RoleSessionName"] ? "true" : "false";
            } else {
                $this->RequestParams["RoleSessionName"] = $param["RoleSessionName"];
            }
        }
        if (array_key_exists("DurationSeconds",$param) and $param["DurationSeconds"] !== null) {
            if(is_bool($param["DurationSeconds"])){
                $this->RequestParams["DurationSeconds"] = $param["DurationSeconds"] ? "true" : "false";
            } else {
                $this->RequestParams["DurationSeconds"] = $param["DurationSeconds"];
            }
        }
        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            if(is_bool($param["Policy"])){
                $this->RequestParams["Policy"] = $param["Policy"] ? "true" : "false";
            } else {
                $this->RequestParams["Policy"] = $param["Policy"];
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