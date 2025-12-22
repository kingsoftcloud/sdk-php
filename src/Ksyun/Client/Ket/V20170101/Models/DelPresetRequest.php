<?php
namespace  Ksyun\Client\Ket\V20170101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DelPresetRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "UniqName" => null,
         /**String**/
        "App" => null,
         /**String**/
        "Preset" => null,
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
        if (array_key_exists("UniqName",$param) and $param["UniqName"] !== null) {
            if(is_bool($param["UniqName"])){
                $this->RequestParams["UniqName"] = $param["UniqName"] ? "true" : "false";
            } else {
                $this->RequestParams["UniqName"] = $param["UniqName"];
            }
        }
        if (array_key_exists("App",$param) and $param["App"] !== null) {
            if(is_bool($param["App"])){
                $this->RequestParams["App"] = $param["App"] ? "true" : "false";
            } else {
                $this->RequestParams["App"] = $param["App"];
            }
        }
        if (array_key_exists("Preset",$param) and $param["Preset"] !== null) {
            if(is_bool($param["Preset"])){
                $this->RequestParams["Preset"] = $param["Preset"] ? "true" : "false";
            } else {
                $this->RequestParams["Preset"] = $param["Preset"];
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