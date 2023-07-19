<?php
namespace  Ksyun\Client\Monitor\V20210101\Models;

use Ksyun\Common\BaseModel;

class AddAlarmReceivesRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "PolicyId" => null,
         /**Int**/
        "ContactFlag" => null,
         /**Int**/
        "ContactWay" => null,
         /**Array**/
        "ContactId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            if(is_bool($param["PolicyId"])){
                $this->RequestParams["PolicyId"] = $param["PolicyId"] ? "true" : "false";
            } else {
                $this->RequestParams["PolicyId"] = $param["PolicyId"];
            }
        }
        if (array_key_exists("ContactFlag",$param) and $param["ContactFlag"] !== null) {
            if(is_bool($param["ContactFlag"])){
                $this->RequestParams["ContactFlag"] = $param["ContactFlag"] ? "true" : "false";
            } else {
                $this->RequestParams["ContactFlag"] = $param["ContactFlag"];
            }
        }
        if (array_key_exists("ContactWay",$param) and $param["ContactWay"] !== null) {
            if(is_bool($param["ContactWay"])){
                $this->RequestParams["ContactWay"] = $param["ContactWay"] ? "true" : "false";
            } else {
                $this->RequestParams["ContactWay"] = $param["ContactWay"];
            }
        }
        if (array_key_exists("ContactId",$param) and $param["ContactId"] !== null) {
            if(is_bool($param["ContactId"])){
                $this->RequestParams["ContactId"] = $param["ContactId"] ? "true" : "false";
            } else {
                $this->RequestParams["ContactId"] = $param["ContactId"];
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