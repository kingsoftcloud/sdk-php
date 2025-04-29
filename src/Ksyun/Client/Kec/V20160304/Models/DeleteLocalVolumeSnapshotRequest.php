<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteLocalVolumeSnapshotRequest extends BaseModel
{
    public $RequestParams = [
    ];

    /**特殊参数类型:Filter**/
    public $LocalVolumeSnapshotId = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LocalVolumeSnapshotId", $param) and $param["LocalVolumeSnapshotId"] !== null) {
            $res = $this->formatFilterParams("LocalVolumeSnapshotId", $param["LocalVolumeSnapshotId"]);
            $this->_unserialize("LocalVolumeSnapshotId", $res);
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