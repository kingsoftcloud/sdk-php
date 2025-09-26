<?php
namespace  Ksyun\Client\Cdn\V20160901\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class RefreshCachesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Files" => null,
         /**String**/
        "Dirs" => null,
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
        if (array_key_exists("Files",$param) and $param["Files"] !== null) {
            if(is_bool($param["Files"])){
                $this->RequestParams["Files"] = $param["Files"] ? "true" : "false";
            } else {
                $this->RequestParams["Files"] = $param["Files"];
            }
        }
        if (array_key_exists("Dirs",$param) and $param["Dirs"] !== null) {
            if(is_bool($param["Dirs"])){
                $this->RequestParams["Dirs"] = $param["Dirs"] ? "true" : "false";
            } else {
                $this->RequestParams["Dirs"] = $param["Dirs"];
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