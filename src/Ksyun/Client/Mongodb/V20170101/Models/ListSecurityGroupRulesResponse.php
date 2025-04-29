<?php

namespace Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;

class ListSecurityGroupRulesResponse extends BaseModel
{
    /** **/
    public $RequestId;

    /**Object **/
    public $MongoDBSecurityGroupRule;

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
        if (array_key_exists("MongoDBSecurityGroupRule", $param) and $param["MongoDBSecurityGroupRule"] !== null) {
            $this->MongoDBSecurityGroupRule = $param["MongoDBSecurityGroupRule"];
        }

    }
}