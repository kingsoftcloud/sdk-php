<?php

namespace Ksyun\Client\Kad\V20161122\Models;

use Ksyun\Common\BaseModel;

class CreateForwardSourceResponse extends BaseModel
{
    /** **/
    public $Response;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Response", $param) and $param["Response"] !== null) {
            $this->Response = $param["Response"];
        }

    }
}