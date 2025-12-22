<?php
namespace  Ksyun\Client\Krds\V20200825\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SecurityGroupRelationRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "RelationAction" => null,
         /**String**/
        "SecurityGroupId" => null,
         /**String**/
        "SecurityGroupIds" => null,
         /**String**/
        "DBInstanceIdentifier" => null,
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
        if (array_key_exists("RelationAction",$param) and $param["RelationAction"] !== null) {
            if(is_bool($param["RelationAction"])){
                $this->RequestParams["RelationAction"] = $param["RelationAction"] ? "true" : "false";
            } else {
                $this->RequestParams["RelationAction"] = $param["RelationAction"];
            }
        }
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            if(is_bool($param["SecurityGroupId"])){
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
        }
        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            if(is_bool($param["SecurityGroupIds"])){
                $this->RequestParams["SecurityGroupIds"] = $param["SecurityGroupIds"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupIds"] = $param["SecurityGroupIds"];
            }
        }
        if (array_key_exists("DBInstanceIdentifier",$param) and $param["DBInstanceIdentifier"] !== null) {
            if(is_bool($param["DBInstanceIdentifier"])){
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"];
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