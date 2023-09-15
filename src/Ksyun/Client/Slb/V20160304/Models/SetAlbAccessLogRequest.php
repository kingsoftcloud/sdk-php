<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetAlbAccessLogRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AlbId" => null,
         /**String**/
        "ProjectName" => null,
         /**String**/
        "LogpoolName" => null,
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
        if (array_key_exists("AlbId",$param) and $param["AlbId"] !== null) {
            if(is_bool($param["AlbId"])){
                $this->RequestParams["AlbId"] = $param["AlbId"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbId"] = $param["AlbId"];
            }
        }
        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            if(is_bool($param["ProjectName"])){
                $this->RequestParams["ProjectName"] = $param["ProjectName"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectName"] = $param["ProjectName"];
            }
        }
        if (array_key_exists("LogpoolName",$param) and $param["LogpoolName"] !== null) {
            if(is_bool($param["LogpoolName"])){
                $this->RequestParams["LogpoolName"] = $param["LogpoolName"] ? "true" : "false";
            } else {
                $this->RequestParams["LogpoolName"] = $param["LogpoolName"];
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