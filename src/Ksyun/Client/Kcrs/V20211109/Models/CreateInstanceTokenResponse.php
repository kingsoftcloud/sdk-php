<?php

namespace Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;

class CreateInstanceTokenResponse extends BaseModel
{
    /** 登录用户名称**/
    public $Username;

    /** 实例访问凭证**/
    public $tokenId;

    /** 实例访问凭证的id
     **/
    public $Token;

    /** 实例访问凭证过期时间**/
    public $ExpireTime;

    /** 请求Id**/
    public $RequestId;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Username", $param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }
        if (array_key_exists("tokenId", $param) and $param["tokenId"] !== null) {
            $this->tokenId = $param["tokenId"];
        }
        if (array_key_exists("Token", $param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }
        if (array_key_exists("ExpireTime", $param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

    }
}