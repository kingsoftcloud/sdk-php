<?php
namespace  Ksyun\Client\Dts\V20180108\Models;

use Ksyun\Common\BaseModel;

class DescribeSubTaskResponse extends BaseModel
{
         /** 不同请求参数有不同的返回信息：见下示例：

```json
001.查询子任务详情:(任务迁移表信息)

//request:
http://dts.{{region}}.api.ksyun.com/api?Action=DescribeSubTask&Version=2018-01-08&SubTaskId=******

//response:
{
    "Data": {
        "Id": "79d659de-38ea-4499-b90a-4f7cb9bf7733",
        "Status": "FINISHED",
        "Created": "Apr 11, 2022 3:29:11 PM",
        "Updated": "Apr 11, 2022 3:35:44 PM",
        "Progress": 100,
        "Object": [
            {
                "ObjectName": "test1",
                "ObjectType": "TABLE",
                "ObjectStatus": "finish",
                "ObjectSourceSchema": "database1",
                "ObjectTargetSchema": "database1",
                "ObjectTotalCount": 100,
                "ObjectTargetCount": 100,
                "TimeUsed": 1
            },
            {
                "ObjectName": "test2",
                "ObjectType": "TABLE",
                "ObjectStatus": "finish",
                "ObjectSourceSchema": "database2",
                "ObjectTargetSchema": "database2",
                "ObjectTotalCount": 100,
                "ObjectTargetCount": 100,
                "TimeUsed": 0
            }
        ],
        "TotalCount": 2,
        "Marker": 2,
        "MaxRecords": 10
    }
}
```

```json
002.查询子任务列表:(查询一致性校验任务列表)

//request:
http://dts.{{region}}.api.ksyun.com/api?Action=DescribeSubTask&Version=2018-01-08&TaskId=******&SubTaskName=ConsistencyCheck,UserConsistencyCheck,FixedConsistencyCheck

//response:
{
    "Data": {
        "SubTasks": [
            {
                "Id": "a78b3955-9d77-4c65-84bc-58cb7b68e19f",
                "TaskId": "******",
                "ConnConfigId": "c2533943-3681-43ca-832d-5087b12dc2f5",
                "Name": "UserConsistencyCheck",
                "ActionOn": "MonitorSubTaskAction",
                "Status": "FINISHED",
                "agentStage": "NONE",
                "Judging": 0,
                "Message": "{\"message\":\"success\",\"values\":{}}",
                "Node": "http://10.66.3.105:9102",
                "Region": "cn-beijing-6",
                "Created": "May 7, 2022 6:46:54 PM",
                "Updated": "May 7, 2022 6:47:04 PM",
                "Deleted": 0,
                "Params": "{\"gtid\":\"502a11e7-3177-11ec-b092-fa163e35aa0c:1-8650737\",\"log\":\"binlog.000019\",\"pos\":110968747}",
                "Progress": 100,
                "Latency": 0,
                "AccountId": "2000102274",
                "RelientSubtaskId": "4cfd1721-6768-4abc-bebf-37d6ad7b5df8",
                "StartTime": "May 7, 2022 6:46:54 PM",
                "EndTime": "May 7, 2022 6:47:04 PM",
                "ReloadTimes": 0,
                "FailureNum": 0,
                "ConsistencyCheckResult": "SUCCESS",
                "errSkip": 0
            },
            {
                "Id": "2c9b47d2-19dd-4346-9b35-ae34d5453d3e",
                "TaskId": "******",
                "ConnConfigId": "c2533943-3681-43ca-832d-5087b12dc2f5",
                "Name": "UserConsistencyCheck",
                "ActionOn": "MonitorSubTaskAction",
                "Status": "FINISHED",
                "agentStage": "NONE",
                "Judging": 0,
                "Message": "{\"message\":\"success\",\"values\":{}}",
                "Node": "http://10.66.3.105:9102",
                "Region": "cn-beijing-6",
                "Created": "May 7, 2022 6:46:22 PM",
                "Updated": "May 7, 2022 6:46:35 PM",
                "Deleted": 0,
                "Params": "{\"gtid\":\"502a11e7-3177-11ec-b092-fa163e35aa0c:1-8650712\",\"log\":\"binlog.000019\",\"pos\":110958923}",
                "Progress": 100,
                "Latency": 0,
                "AccountId": "2000102274",
                "RelientSubtaskId": "4cfd1721-6768-4abc-bebf-37d6ad7b5df8",
                "StartTime": "May 7, 2022 6:46:23 PM",
                "EndTime": "May 7, 2022 6:46:35 PM",
                "ReloadTimes": 0,
                "FailureNum": 0,
                "ConsistencyCheckResult": "SUCCESS",
                "errSkip": 0
            },
            {
                "Id": "bcc121d2-2f1d-428d-ac53-80a5e0fb2c32",
                "TaskId": "******",
                "ConnConfigId": "c2533943-3681-43ca-832d-5087b12dc2f5",
                "Name": "ConsistencyCheck",
                "ActionOn": "MonitorSubTaskAction",
                "Status": "FINISHED",
                "agentStage": "NONE",
                "Judging": 0,
                "Message": "{\"message\":\"success\",\"values\":{}}",
                "Node": "http://10.66.3.105:9102",
                "Region": "cn-beijing-6",
                "Created": "May 7, 2022 6:45:59 PM",
                "Updated": "May 7, 2022 6:46:11 PM",
                "Deleted": 0,
                "Params": "{\"gtid\":\"502a11e7-3177-11ec-b092-fa163e35aa0c:1-8650658\",\"log\":\"binlog.000019\",\"pos\":110940719}",
                "Progress": 100,
                "Latency": 0,
                "AccountId": "2000102274",
                "RelientSubtaskId": "4cfd1721-6768-4abc-bebf-37d6ad7b5df8",
                "StartTime": "May 7, 2022 6:46:01 PM",
                "EndTime": "May 7, 2022 6:46:11 PM",
                "ReloadTimes": 0,
                "FailureNum": 0,
                "ConsistencyCheckResult": "SUCCESS",
                "errSkip": 0
            }
        ],
        "LatestConsistencyCheckStatus": "FINISHED",
        "TotalCount": 3,
        "Marker": 3,
        "MaxRecords": 10
    },
    "RequestId": "32a2bc99-be26-4d6f-8847-e21a5b71bfeb"
}
```**/
         public  $Data;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }

        }
}