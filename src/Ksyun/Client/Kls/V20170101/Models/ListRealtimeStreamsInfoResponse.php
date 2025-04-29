<?php

namespace Ksyun\Client\Kls\V20170101\Models;

use Ksyun\Common\BaseModel;

class ListRealtimeStreamsInfoResponse extends BaseModel
{
    /** **/
    public $ListRealtimeStreamsInfoResponse;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ListRealtimeStreamsInfoResponse", $param) and $param["ListRealtimeStreamsInfoResponse"] !== null) {
            $this->ListRealtimeStreamsInfoResponse = $param["ListRealtimeStreamsInfoResponse"];
        }

    }
}