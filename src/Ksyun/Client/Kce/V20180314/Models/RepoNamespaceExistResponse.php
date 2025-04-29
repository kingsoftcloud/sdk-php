<?php

namespace Ksyun\Client\Kce\V20180314\Models;

use Ksyun\Common\BaseModel;

class RepoNamespaceExistResponse extends BaseModel
{
    /** 请求id**/
    public $RequestId;

    /** 命名空间是否存在**/
    public $Exist;

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
        if (array_key_exists("Exist", $param) and $param["Exist"] !== null) {
            $this->Exist = $param["Exist"];
        }

    }
}