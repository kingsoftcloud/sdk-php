<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class AttachInstancesIamRoleResponse extends BaseModel
{
    /** **/
    public $RequestId;

    /** **/
    public $FailCount;

    /** **/
    public $TotalCount;

    /** **/
    public $IamRoleName;

    /** **/
    public $Results;

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
        if (array_key_exists("FailCount", $param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }
        if (array_key_exists("TotalCount", $param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
        if (array_key_exists("IamRoleName", $param) and $param["IamRoleName"] !== null) {
            $this->IamRoleName = $param["IamRoleName"];
        }
        if (array_key_exists("Results", $param) and $param["Results"] !== null) {
            $this->Results = $param["Results"];
        }

    }
}