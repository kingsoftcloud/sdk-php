<?php

namespace Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;

class DescribeMongoDBInstanceNodeResponse extends BaseModel
{
    /** **/
    public $RequestId;

    /**Object **/
    public $MongoDBInstanceNodeResult;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
        if (array_key_exists("MongoDBInstanceNodeResult", $param) and $param["MongoDBInstanceNodeResult"] !== null) {
            $this->MongoDBInstanceNodeResult = $param["MongoDBInstanceNodeResult"];
        }

    }
}