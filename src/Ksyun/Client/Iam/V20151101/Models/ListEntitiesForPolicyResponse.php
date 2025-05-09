<?php

namespace Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListEntitiesForPolicyResponse extends BaseModel
{
    /** **/
    public $ListEntitiesForPolicyResult;

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
        if (array_key_exists("ListEntitiesForPolicyResult", $param) and $param["ListEntitiesForPolicyResult"] !== null) {
            $this->ListEntitiesForPolicyResult = $param["ListEntitiesForPolicyResult"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

    }
}