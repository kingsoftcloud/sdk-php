<?php

namespace Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;

class UpdateMongoDBInstanceResponse extends BaseModel
{
    /** **/
    public $RequestId;

    /** **/
    public $MongoDBInstanceResult;

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
        if (array_key_exists("MongoDBInstanceResult", $param) and $param["MongoDBInstanceResult"] !== null) {
            $this->MongoDBInstanceResult = $param["MongoDBInstanceResult"];
        }

    }
}