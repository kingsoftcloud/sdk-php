<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeAutoSnapshotPolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AutoSnapshotPolicyName" => null,
    ];

     /**特殊参数类型:Filter**/
    public $AutoSnapshotPolicyId = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AutoSnapshotPolicyName",$param) and $param["AutoSnapshotPolicyName"] !== null) {
            if(is_bool($param["AutoSnapshotPolicyName"])){
                $this->RequestParams["AutoSnapshotPolicyName"] = $param["AutoSnapshotPolicyName"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoSnapshotPolicyName"] = $param["AutoSnapshotPolicyName"];
            }
        }
        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $res = $this->formatFilterParams("AutoSnapshotPolicyId",$param["AutoSnapshotPolicyId"]);
            $this->_unserialize("AutoSnapshotPolicyId",$res);
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