<?php

namespace Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class SetUserSsoSettingsResponse extends BaseModel
{
    /** 请求 ID**/
    public $RequestId;

    /** 用户 SSO 配置信息**/
    public $UserSsoSettings;

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
        if (array_key_exists("UserSsoSettings", $param) and $param["UserSsoSettings"] !== null) {
            $this->UserSsoSettings = $param["UserSsoSettings"];
        }

    }
}