<?php
namespace  Ksyun\Client\Kls\V20170101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetBlacklistRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "UniqueName" => null,
         /**String**/
        "App" => null,
         /**String**/
        "Pubdomain" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("UniqueName",$param) and $param["UniqueName"] !== null) {
            if(is_bool($param["UniqueName"])){
                $this->RequestParams["UniqueName"] = $param["UniqueName"] ? "true" : "false";
            } else {
                $this->RequestParams["UniqueName"] = $param["UniqueName"];
            }
        }
        if (array_key_exists("App",$param) and $param["App"] !== null) {
            if(is_bool($param["App"])){
                $this->RequestParams["App"] = $param["App"] ? "true" : "false";
            } else {
                $this->RequestParams["App"] = $param["App"];
            }
        }
        if (array_key_exists("Pubdomain",$param) and $param["Pubdomain"] !== null) {
            if(is_bool($param["Pubdomain"])){
                $this->RequestParams["Pubdomain"] = $param["Pubdomain"] ? "true" : "false";
            } else {
                $this->RequestParams["Pubdomain"] = $param["Pubdomain"];
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