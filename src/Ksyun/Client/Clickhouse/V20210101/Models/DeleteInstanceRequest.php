<?php
namespace  Ksyun\Client\Clickhouse\V20210101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteInstanceRequest extends BaseModel
{
    public $RequestParams = [
         /**Boolean**/
        "DeleteDirectly" => null,
    ];

     /**特殊参数类型:Filter**/
    public $InstanceIds = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $res = $this->formatFilterParams("InstanceIds",$param["InstanceIds"]);
            $this->_unserialize("InstanceIds",$res);
        }
        if (array_key_exists("DeleteDirectly",$param) and $param["DeleteDirectly"] !== null) {
            if(is_bool($param["DeleteDirectly"])){
                $this->RequestParams["DeleteDirectly"] = $param["DeleteDirectly"] ? "true" : "false";
            } else {
                $this->RequestParams["DeleteDirectly"] = $param["DeleteDirectly"];
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