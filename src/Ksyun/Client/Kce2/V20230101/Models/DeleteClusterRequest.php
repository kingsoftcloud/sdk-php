<?php
namespace  Ksyun\Client\Kce2\V20230101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteClusterRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusterId" => null,
         /**Boolean**/
        "InstanceDelete" => null,
         /**Boolean**/
        "SecurityGroupDelete" => null,
         /**Boolean**/
        "PrivateLbDelete" => null,
         /**Boolean**/
        "PublicLbDelete" => null,
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            if(is_bool($param["ClusterId"])){
                $this->RequestParams["ClusterId"] = $param["ClusterId"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterId"] = $param["ClusterId"];
            }
        }
        if (array_key_exists("InstanceDelete",$param) and $param["InstanceDelete"] !== null) {
            if(is_bool($param["InstanceDelete"])){
                $this->RequestParams["InstanceDelete"] = $param["InstanceDelete"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceDelete"] = $param["InstanceDelete"];
            }
        }
        if (array_key_exists("SecurityGroupDelete",$param) and $param["SecurityGroupDelete"] !== null) {
            if(is_bool($param["SecurityGroupDelete"])){
                $this->RequestParams["SecurityGroupDelete"] = $param["SecurityGroupDelete"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupDelete"] = $param["SecurityGroupDelete"];
            }
        }
        if (array_key_exists("PrivateLbDelete",$param) and $param["PrivateLbDelete"] !== null) {
            if(is_bool($param["PrivateLbDelete"])){
                $this->RequestParams["PrivateLbDelete"] = $param["PrivateLbDelete"] ? "true" : "false";
            } else {
                $this->RequestParams["PrivateLbDelete"] = $param["PrivateLbDelete"];
            }
        }
        if (array_key_exists("PublicLbDelete",$param) and $param["PublicLbDelete"] !== null) {
            if(is_bool($param["PublicLbDelete"])){
                $this->RequestParams["PublicLbDelete"] = $param["PublicLbDelete"] ? "true" : "false";
            } else {
                $this->RequestParams["PublicLbDelete"] = $param["PublicLbDelete"];
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