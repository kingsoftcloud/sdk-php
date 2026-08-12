<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeFileDeletePolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FileDeletePolicyId" => null,
         /**String**/
        "FileSystemId" => null,
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
        if (array_key_exists("FileDeletePolicyId",$param) and $param["FileDeletePolicyId"] !== null) {
            if(is_bool($param["FileDeletePolicyId"])){
                $this->RequestParams["FileDeletePolicyId"] = $param["FileDeletePolicyId"] ? "true" : "false";
            } else {
                $this->RequestParams["FileDeletePolicyId"] = $param["FileDeletePolicyId"];
            }
        }
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            if(is_bool($param["FileSystemId"])){
                $this->RequestParams["FileSystemId"] = $param["FileSystemId"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSystemId"] = $param["FileSystemId"];
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