<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class StartAuditDetailExportTaskRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBInstanceIdentifier" => null,
         /**String**/
        "ExportFileds" => null,
         /**String**/
        "AuditBeginTime" => null,
         /**String**/
        "AuditEndTime" => null,
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
        if (array_key_exists("ExportFileds",$param) and $param["ExportFileds"] !== null) {
            if(is_bool($param["ExportFileds"])){
                $this->RequestParams["ExportFileds"] = $param["ExportFileds"] ? "true" : "false";
            } else {
                $this->RequestParams["ExportFileds"] = $param["ExportFileds"];
            }
        }
        if (array_key_exists("AuditBeginTime",$param) and $param["AuditBeginTime"] !== null) {
            if(is_bool($param["AuditBeginTime"])){
                $this->RequestParams["AuditBeginTime"] = $param["AuditBeginTime"] ? "true" : "false";
            } else {
                $this->RequestParams["AuditBeginTime"] = $param["AuditBeginTime"];
            }
        }
        if (array_key_exists("AuditEndTime",$param) and $param["AuditEndTime"] !== null) {
            if(is_bool($param["AuditEndTime"])){
                $this->RequestParams["AuditEndTime"] = $param["AuditEndTime"] ? "true" : "false";
            } else {
                $this->RequestParams["AuditEndTime"] = $param["AuditEndTime"];
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