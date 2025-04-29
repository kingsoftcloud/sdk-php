<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ImportImageResponse extends BaseModel
{
    /** **/
    public $RequestId;

    /** **/
    public $ImageId;

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
        if (array_key_exists("ImageId", $param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

    }
}