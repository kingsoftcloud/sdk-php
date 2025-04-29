<?php

namespace Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;

class DescribeProjectResponse extends BaseModel
{
    /** **/
    public $CreateTime;

    /** **/
    public $Description;

    /** **/
    public $UpdateTime;

    /** **/
    public $ProjectName;

    /** **/
    public $Region;

    /** **/
    public $IamProjectId;

    /** **/
    public $IamProjectName;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CreateTime", $param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
        if (array_key_exists("Description", $param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
        if (array_key_exists("UpdateTime", $param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
        if (array_key_exists("ProjectName", $param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }
        if (array_key_exists("Region", $param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
        if (array_key_exists("IamProjectId", $param) and $param["IamProjectId"] !== null) {
            $this->IamProjectId = $param["IamProjectId"];
        }
        if (array_key_exists("IamProjectName", $param) and $param["IamProjectName"] !== null) {
            $this->IamProjectName = $param["IamProjectName"];
        }

    }
}