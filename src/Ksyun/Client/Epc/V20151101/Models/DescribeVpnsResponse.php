<?php

namespace Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeVpnsResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /** 连接带外的用户名称**/
    public $UserName;

    /** 链接带外的密码，10分钟有效**/
    public $Password;

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
        if (array_key_exists("UserName", $param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
        if (array_key_exists("Password", $param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

    }
}