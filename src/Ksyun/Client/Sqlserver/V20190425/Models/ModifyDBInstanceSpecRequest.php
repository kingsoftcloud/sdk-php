<?php
namespace  Ksyun\Client\Sqlserver\V20190425\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyDBInstanceSpecRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBInstanceIdentifier" => null,
         /**Int**/
        "Mem" => null,
         /**Int**/
        "Disk" => null,
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
        if (array_key_exists("DBInstanceIdentifier",$param) and $param["DBInstanceIdentifier"] !== null) {
            if(is_bool($param["DBInstanceIdentifier"])){
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"];
            }
        }
        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            if(is_bool($param["Mem"])){
                $this->RequestParams["Mem"] = $param["Mem"] ? "true" : "false";
            } else {
                $this->RequestParams["Mem"] = $param["Mem"];
            }
        }
        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            if(is_bool($param["Disk"])){
                $this->RequestParams["Disk"] = $param["Disk"] ? "true" : "false";
            } else {
                $this->RequestParams["Disk"] = $param["Disk"];
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