<?php
namespace  Ksyun\Client\Dmp\V20240101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class StartExecuteSQLRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DatabaseName" => null,
         /**String**/
        "Statement" => null,
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            if(is_bool($param["DatabaseName"])){
                $this->RequestParams["DatabaseName"] = $param["DatabaseName"] ? "true" : "false";
            } else {
                $this->RequestParams["DatabaseName"] = $param["DatabaseName"];
            }
        }
        if (array_key_exists("Statement",$param) and $param["Statement"] !== null) {
            if(is_bool($param["Statement"])){
                $this->RequestParams["Statement"] = $param["Statement"] ? "true" : "false";
            } else {
                $this->RequestParams["Statement"] = $param["Statement"];
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