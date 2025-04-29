<?php

namespace Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;

class CreateInstanceAccountActionResponse extends BaseModel
{
    /** **/
    public $DBInstanceIdentifier;

    /** **/
    public $InstanceAccountName;

    /** **/
    public $InstanceAccountPassword;

    /** **/
    public $InstanceAccountDescription;

    /**Object **/
    public $InstanceAccountPrivileges;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DBInstanceIdentifier", $param) and $param["DBInstanceIdentifier"] !== null) {
            $this->DBInstanceIdentifier = $param["DBInstanceIdentifier"];
        }
        if (array_key_exists("InstanceAccountName", $param) and $param["InstanceAccountName"] !== null) {
            $this->InstanceAccountName = $param["InstanceAccountName"];
        }
        if (array_key_exists("InstanceAccountPassword", $param) and $param["InstanceAccountPassword"] !== null) {
            $this->InstanceAccountPassword = $param["InstanceAccountPassword"];
        }
        if (array_key_exists("InstanceAccountDescription", $param) and $param["InstanceAccountDescription"] !== null) {
            $this->InstanceAccountDescription = $param["InstanceAccountDescription"];
        }
        if (array_key_exists("InstanceAccountPrivileges", $param) and $param["InstanceAccountPrivileges"] !== null) {
            $this->InstanceAccountPrivileges = $param["InstanceAccountPrivileges"];
        }

    }
}