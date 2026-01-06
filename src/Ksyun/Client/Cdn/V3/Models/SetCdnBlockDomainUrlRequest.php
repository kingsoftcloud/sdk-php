<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetCdnBlockDomainUrlRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "BlockType" => null,
         /**Array**/
        "Urls" => null,
         /**String**/
        "RefreshOnUnblock" => null,
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
        if (array_key_exists("BlockType",$param) and $param["BlockType"] !== null) {
            if(is_bool($param["BlockType"])){
                $this->RequestParams["BlockType"] = $param["BlockType"] ? "true" : "false";
            } else {
                $this->RequestParams["BlockType"] = $param["BlockType"];
            }
        }
        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            if(is_bool($param["Urls"])){
                $this->RequestParams["Urls"] = $param["Urls"] ? "true" : "false";
            } else {
                $this->RequestParams["Urls"] = $param["Urls"];
            }
        }
        if (array_key_exists("RefreshOnUnblock",$param) and $param["RefreshOnUnblock"] !== null) {
            if(is_bool($param["RefreshOnUnblock"])){
                $this->RequestParams["RefreshOnUnblock"] = $param["RefreshOnUnblock"] ? "true" : "false";
            } else {
                $this->RequestParams["RefreshOnUnblock"] = $param["RefreshOnUnblock"];
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