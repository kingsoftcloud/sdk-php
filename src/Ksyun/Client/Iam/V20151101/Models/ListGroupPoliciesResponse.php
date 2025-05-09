<?php

namespace Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListGroupPoliciesResponse extends BaseModel
{
    /** **/
    public $ListGroupPoliciesResult;

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
        if (array_key_exists("ListGroupPoliciesResult", $param) and $param["ListGroupPoliciesResult"] !== null) {
            $this->ListGroupPoliciesResult = $param["ListGroupPoliciesResult"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

    }
}