<?php
namespace  Ksyun\Client\Tidb\V20210520\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdateBackupRuleRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "PreferredBackupTime" => null,
         /**Boolean**/
        "EnableAutobackup" => null,
         /**Boolean**/
        "EnableIncremental" => null,
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("PreferredBackupTime",$param) and $param["PreferredBackupTime"] !== null) {
            if(is_bool($param["PreferredBackupTime"])){
                $this->RequestParams["PreferredBackupTime"] = $param["PreferredBackupTime"] ? "true" : "false";
            } else {
                $this->RequestParams["PreferredBackupTime"] = $param["PreferredBackupTime"];
            }
        }
        if (array_key_exists("EnableAutobackup",$param) and $param["EnableAutobackup"] !== null) {
            if(is_bool($param["EnableAutobackup"])){
                $this->RequestParams["EnableAutobackup"] = $param["EnableAutobackup"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableAutobackup"] = $param["EnableAutobackup"];
            }
        }
        if (array_key_exists("EnableIncremental",$param) and $param["EnableIncremental"] !== null) {
            if(is_bool($param["EnableIncremental"])){
                $this->RequestParams["EnableIncremental"] = $param["EnableIncremental"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableIncremental"] = $param["EnableIncremental"];
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