<?php
namespace  Ksyun\Client\Kmr\V20240814\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetJobRunRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "WorkspaceId" => null,
         /**String**/
        "JobRunId" => null,
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            if(is_bool($param["WorkspaceId"])){
                $this->RequestParams["WorkspaceId"] = $param["WorkspaceId"] ? "true" : "false";
            } else {
                $this->RequestParams["WorkspaceId"] = $param["WorkspaceId"];
            }
        }
        if (array_key_exists("JobRunId",$param) and $param["JobRunId"] !== null) {
            if(is_bool($param["JobRunId"])){
                $this->RequestParams["JobRunId"] = $param["JobRunId"] ? "true" : "false";
            } else {
                $this->RequestParams["JobRunId"] = $param["JobRunId"];
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