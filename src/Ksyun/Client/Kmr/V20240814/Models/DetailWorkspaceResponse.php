<?php

namespace Ksyun\Client\Kmr\V20240814\Models;

use Ksyun\Common\BaseModel;

class DetailWorkspaceResponse extends BaseModel
{
    /** **/
    public $Code;

    /** **/
    public $Message;

    /** **/
    public $RequestId;

    /** **/
    public $Data;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Code", $param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }
        if (array_key_exists("Message", $param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
        if (array_key_exists("Data", $param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

    }
}