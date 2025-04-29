<?php

namespace Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeRemoteManagementsRequest extends BaseModel
{
    public $RequestParams = [
    ];

    /**特殊参数类型:Filter**/
    public $RemoteManagementId = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RemoteManagementId", $param) and $param["RemoteManagementId"] !== null) {
            $res = $this->formatFilterParams("RemoteManagementId", $param["RemoteManagementId"]);
            $this->_unserialize("RemoteManagementId", $res);
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