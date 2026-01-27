<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeNotebookLogRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "NotebookId" => null,
         /**Int**/
        "SinceSeconds" => null,
         /**String**/
        "TailLines" => null,
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
        if (array_key_exists("SinceSeconds",$param) and $param["SinceSeconds"] !== null) {
            if(is_bool($param["SinceSeconds"])){
                $this->RequestParams["SinceSeconds"] = $param["SinceSeconds"] ? "true" : "false";
            } else {
                $this->RequestParams["SinceSeconds"] = $param["SinceSeconds"];
            }
        }
        if (array_key_exists("TailLines",$param) and $param["TailLines"] !== null) {
            if(is_bool($param["TailLines"])){
                $this->RequestParams["TailLines"] = $param["TailLines"] ? "true" : "false";
            } else {
                $this->RequestParams["TailLines"] = $param["TailLines"];
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