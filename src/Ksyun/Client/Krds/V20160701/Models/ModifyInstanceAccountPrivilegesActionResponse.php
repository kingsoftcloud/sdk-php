<?php

namespace Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;

class ModifyInstanceAccountPrivilegesActionResponse extends BaseModel
{
    /** **/
    public $DBInstanceIdentifier;

    /** **/
    public $InstanceAccountName;

    /**String **/
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
        if (array_key_exists("InstanceAccountPrivileges", $param) and $param["InstanceAccountPrivileges"] !== null) {
            $this->InstanceAccountPrivileges = $param["InstanceAccountPrivileges"];
        }

    }
}