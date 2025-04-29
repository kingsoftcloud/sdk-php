<?php

namespace Ksyun\Client\Ket\V20170101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetStreamTranListRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "UniqName" => null,
        /**String**/
        "App" => null,
        /**String**/
        "StreamID" => null,
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
        if (array_key_exists("UniqName", $param) and $param["UniqName"] !== null) {
            if (is_bool($param["UniqName"])) {
                $this->RequestParams["UniqName"] = $param["UniqName"] ? "true" : "false";
            } else {
                $this->RequestParams["UniqName"] = $param["UniqName"];
            }
        }
        if (array_key_exists("App", $param) and $param["App"] !== null) {
            if (is_bool($param["App"])) {
                $this->RequestParams["App"] = $param["App"] ? "true" : "false";
            } else {
                $this->RequestParams["App"] = $param["App"];
            }
        }
        if (array_key_exists("StreamID", $param) and $param["StreamID"] !== null) {
            if (is_bool($param["StreamID"])) {
                $this->RequestParams["StreamID"] = $param["StreamID"] ? "true" : "false";
            } else {
                $this->RequestParams["StreamID"] = $param["StreamID"];
            }
        }

    }

    private function _unserialize($name, $params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value) {
            $this->$name[$key] = $value;
        }

    }
}