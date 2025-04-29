<?php

namespace Ksyun\Client\Postgresql\V20181225\Models;

use Ksyun\Common\BaseModel;

class DescribeDBParameterGroupResponse extends BaseModel
{
    /** ##### 实例列表返回：
     * ```json
     * {
     * "Data": {
     * "DBParameterGroups": [
     * {
     * "DBParameterGroupId": "59464b2e-80f2-4887-9449-bb7d510dddf0",
     * "DBParameterGroupName": "liurong_AutoTest_CPG_20210511193106193",
     * "EngineVersion": "11",
     * "Description": "auto test create DBParameterGroup ",
     * "Engine": "postgresql"
     * }
     * ],
     * "Source": "TEMPLATE",
     * "MaxRecords": 10,
     * "TotalCount": 32,
     * "Marker": 10
     * },
     * "RequestId": "fcdcb4e8-5197-479f-869d-f52aca7349ca"
     * }
     * ```
     *
     * ##### 实例详情返回：
     * ```json
     * {
     * "Data": {
     * "DBParameterGroups": [
     * {
     * "DBParameterGroupId": "564210c3-46f9-49ba-8f69-9a2507aabea1",
     * "DBParameterGroupName": "lb_test_parameter",
     * "EngineVersion": "9.6",
     * "Description": "修改测试",
     * "Parameters": {
     * "autovacuum_analyze_scale_factor": 0.1
     * },
     * "Engine": "postgresql"
     * }
     * ]
     * },
     * "RequestId": "31316bb8-37dc-47c1-b746-8b3a443e26c4"
     * }
     * ```**/
    public $Data;

    /** **/
    public $RequestId;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Data", $param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

    }
}