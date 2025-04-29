<?php

namespace Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;

class GenerateDBAdminURLResponse extends BaseModel
{
    /** WEB登录地址
     **/
    public $DBAdminURL;

    /** 请求ID
     * –**/
    public $RequestId;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DBAdminURL", $param) and $param["DBAdminURL"] !== null) {
            $this->DBAdminURL = $param["DBAdminURL"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

    }
}