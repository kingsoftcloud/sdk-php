<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CopySnapshotRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "DestinationSnapshotName" => null,
        /**String**/
        "DestinationSnapshotDesc" => null,
    ];

    /**特殊参数类型:Filter**/
    public $SnapshotId = [];
    /**特殊参数类型:Filter**/
    public $DestinationRegion = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SnapshotId", $param) and $param["SnapshotId"] !== null) {
            $res = $this->formatFilterParams("SnapshotId", $param["SnapshotId"]);
            $this->_unserialize("SnapshotId", $res);
        }
        if (array_key_exists("DestinationRegion", $param) and $param["DestinationRegion"] !== null) {
            $res = $this->formatFilterParams("DestinationRegion", $param["DestinationRegion"]);
            $this->_unserialize("DestinationRegion", $res);
        }
        if (array_key_exists("DestinationSnapshotName", $param) and $param["DestinationSnapshotName"] !== null) {
            if (is_bool($param["DestinationSnapshotName"])) {
                $this->RequestParams["DestinationSnapshotName"] = $param["DestinationSnapshotName"] ? "true" : "false";
            } else {
                $this->RequestParams["DestinationSnapshotName"] = $param["DestinationSnapshotName"];
            }
        }
        if (array_key_exists("DestinationSnapshotDesc", $param) and $param["DestinationSnapshotDesc"] !== null) {
            if (is_bool($param["DestinationSnapshotDesc"])) {
                $this->RequestParams["DestinationSnapshotDesc"] = $param["DestinationSnapshotDesc"] ? "true" : "false";
            } else {
                $this->RequestParams["DestinationSnapshotDesc"] = $param["DestinationSnapshotDesc"];
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