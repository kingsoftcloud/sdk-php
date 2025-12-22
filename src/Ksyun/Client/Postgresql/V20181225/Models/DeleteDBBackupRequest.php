<?php
namespace  Ksyun\Client\Postgresql\V20181225\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteDBBackupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBBackupIdentifier" => null,
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
        if (array_key_exists("DBBackupIdentifier",$param) and $param["DBBackupIdentifier"] !== null) {
            if(is_bool($param["DBBackupIdentifier"])){
                $this->RequestParams["DBBackupIdentifier"] = $param["DBBackupIdentifier"] ? "true" : "false";
            } else {
                $this->RequestParams["DBBackupIdentifier"] = $param["DBBackupIdentifier"];
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