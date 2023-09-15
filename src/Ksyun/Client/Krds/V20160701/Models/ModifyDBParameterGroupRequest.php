<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyDBParameterGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBParameterGroupId" => null,
         /**String**/
        "DBParameterGroupName" => null,
         /**String**/
        "Description" => null,
    ];

     /**特殊参数类型:Filter**/
    public $Parameters = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DBParameterGroupId",$param) and $param["DBParameterGroupId"] !== null) {
            if(is_bool($param["DBParameterGroupId"])){
                $this->RequestParams["DBParameterGroupId"] = $param["DBParameterGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["DBParameterGroupId"] = $param["DBParameterGroupId"];
            }
        }
        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $res = $this->formatFilterParams("Parameters",$param["Parameters"]);
            $this->_unserialize("Parameters",$res);
        }
        if (array_key_exists("DBParameterGroupName",$param) and $param["DBParameterGroupName"] !== null) {
            if(is_bool($param["DBParameterGroupName"])){
                $this->RequestParams["DBParameterGroupName"] = $param["DBParameterGroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["DBParameterGroupName"] = $param["DBParameterGroupName"];
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