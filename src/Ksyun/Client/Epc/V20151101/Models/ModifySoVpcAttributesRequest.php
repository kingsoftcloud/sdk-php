<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifySoVpcAttributesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VpcId" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "VpcName" => null,
    ];

     /**特殊参数类型:Filter**/
    public $DnsServers = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            if(is_bool($param["VpcId"])){
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("DnsServers",$param) and $param["DnsServers"] !== null) {
            $res = $this->formatFilterParams("DnsServers",$param["DnsServers"]);
            $this->_unserialize("DnsServers",$res);
        }
        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            if(is_bool($param["VpcName"])){
                $this->RequestParams["VpcName"] = $param["VpcName"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcName"] = $param["VpcName"];
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