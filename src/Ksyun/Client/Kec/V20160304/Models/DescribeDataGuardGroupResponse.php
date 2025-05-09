<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeDataGuardGroupResponse extends BaseModel
{
    /** **/
    public $RequestId;

    /**Object **/
    public $DataGuardsSet;

    /** **/
    public $isSupportDomain;

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
        if (array_key_exists("DataGuardsSet", $param) and $param["DataGuardsSet"] !== null) {
            $this->DataGuardsSet = $param["DataGuardsSet"];
        }
        if (array_key_exists("isSupportDomain", $param) and $param["isSupportDomain"] !== null) {
            $this->isSupportDomain = $param["isSupportDomain"];
        }

    }
}