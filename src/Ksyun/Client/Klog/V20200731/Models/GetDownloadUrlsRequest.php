<?php

namespace Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetDownloadUrlsRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "DownloadID" => null,
        /**String**/
        "ProjectName" => null,
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
        if (array_key_exists("DownloadID", $param) and $param["DownloadID"] !== null) {
            if (is_bool($param["DownloadID"])) {
                $this->RequestParams["DownloadID"] = $param["DownloadID"] ? "true" : "false";
            } else {
                $this->RequestParams["DownloadID"] = $param["DownloadID"];
            }
        }
        if (array_key_exists("ProjectName", $param) and $param["ProjectName"] !== null) {
            if (is_bool($param["ProjectName"])) {
                $this->RequestParams["ProjectName"] = $param["ProjectName"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectName"] = $param["ProjectName"];
            }
        }

    }

    private function _unserialize($name, $params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value) {
            $this->$name[$key] = $value;
        }

    }
}