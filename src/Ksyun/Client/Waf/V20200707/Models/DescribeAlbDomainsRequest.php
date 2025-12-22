<?php
namespace  Ksyun\Client\Waf\V20200707\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeAlbDomainsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ResourceRecord" => null,
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
        if (array_key_exists("ResourceRecord",$param) and $param["ResourceRecord"] !== null) {
            if(is_bool($param["ResourceRecord"])){
                $this->RequestParams["ResourceRecord"] = $param["ResourceRecord"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourceRecord"] = $param["ResourceRecord"];
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