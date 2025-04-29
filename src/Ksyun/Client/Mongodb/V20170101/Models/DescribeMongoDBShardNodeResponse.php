<?php

namespace Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;

class DescribeMongoDBShardNodeResponse extends BaseModel
{
    /** **/
    public $RequestId;

    /**Object **/
    public $MongosNodeResult;

    /**Object **/
    public $ShardNodeResult;

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
        if (array_key_exists("MongosNodeResult", $param) and $param["MongosNodeResult"] !== null) {
            $this->MongosNodeResult = $param["MongosNodeResult"];
        }
        if (array_key_exists("ShardNodeResult", $param) and $param["ShardNodeResult"] !== null) {
            $this->ShardNodeResult = $param["ShardNodeResult"];
        }

    }
}