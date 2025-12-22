<?php
namespace  Ksyun\Client\Kce2\V20230101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyClusterRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusterId" => null,
         /**String**/
        "ClusterDesc" => null,
         /**Array**/
        "SANs" => null,
         /**Object**/
        "PublicApiServer" => null,
         /**Object**/
        "VpcCNI" => null,
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
        if (array_key_exists("ClusterDesc",$param) and $param["ClusterDesc"] !== null) {
            if(is_bool($param["ClusterDesc"])){
                $this->RequestParams["ClusterDesc"] = $param["ClusterDesc"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterDesc"] = $param["ClusterDesc"];
            }
        }
        if (array_key_exists("SANs",$param) and $param["SANs"] !== null) {
            if(is_bool($param["SANs"])){
                $this->RequestParams["SANs"] = $param["SANs"] ? "true" : "false";
            } else {
                $this->RequestParams["SANs"] = $param["SANs"];
            }
        }
        if (array_key_exists("PublicApiServer",$param) and $param["PublicApiServer"] !== null) {
            if(is_bool($param["PublicApiServer"])){
                $this->RequestParams["PublicApiServer"] = $param["PublicApiServer"] ? "true" : "false";
            } else {
                $this->RequestParams["PublicApiServer"] = $param["PublicApiServer"];
            }
        }
        if (array_key_exists("VpcCNI",$param) and $param["VpcCNI"] !== null) {
            if(is_bool($param["VpcCNI"])){
                $this->RequestParams["VpcCNI"] = $param["VpcCNI"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcCNI"] = $param["VpcCNI"];
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