<?php
namespace  Ksyun\Client\Dmp\V20240101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdateDatabaseTableRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DatabaseId" => null,
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
        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            if(is_bool($param["DatabaseId"])){
                $this->RequestParams["DatabaseId"] = $param["DatabaseId"] ? "true" : "false";
            } else {
                $this->RequestParams["DatabaseId"] = $param["DatabaseId"];
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