<?php

namespace Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class GetAccountAllProjectsByParamsResponse extends BaseModel
{
    /** **/
    public $ListProjectResult;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ListProjectResult", $param) and $param["ListProjectResult"] !== null) {
            $this->ListProjectResult = $param["ListProjectResult"];
        }

    }
}