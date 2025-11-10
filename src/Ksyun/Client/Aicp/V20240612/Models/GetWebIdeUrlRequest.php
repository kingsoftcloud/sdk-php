<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetWebIdeUrlRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "NotebookId" => null,
         /**String**/
        "ExpirationMinute" => null,
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
        if (array_key_exists("NotebookId",$param) and $param["NotebookId"] !== null) {
            if(is_bool($param["NotebookId"])){
                $this->RequestParams["NotebookId"] = $param["NotebookId"] ? "true" : "false";
            } else {
                $this->RequestParams["NotebookId"] = $param["NotebookId"];
            }
        }
        if (array_key_exists("ExpirationMinute",$param) and $param["ExpirationMinute"] !== null) {
            if(is_bool($param["ExpirationMinute"])){
                $this->RequestParams["ExpirationMinute"] = $param["ExpirationMinute"] ? "true" : "false";
            } else {
                $this->RequestParams["ExpirationMinute"] = $param["ExpirationMinute"];
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