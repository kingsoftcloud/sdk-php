<?php

namespace Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class ExportImageResponse extends BaseModel
{
    /** **/
    public $Return;

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
        if (array_key_exists("Return", $param) and $param["Return"] !== null) {
            $this->Return = $param["Return"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

    }
}