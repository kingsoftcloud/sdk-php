<?php

namespace Ksyun\Client\Kce\V20230101\Models;

use Ksyun\Common\BaseModel;

class DeleteAddonInstanceResponse extends BaseModel
{
    /** 请求ID**/
    public $RequesetId;

    /** 返回数据**/
    public $Data;

    /** 集群ID**/
    public $ClusterId;

    /** 插件ID**/
    public $AddonId;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RequesetId", $param) and $param["RequesetId"] !== null) {
            $this->RequesetId = $param["RequesetId"];
        }
        if (array_key_exists("Data", $param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
        if (array_key_exists("ClusterId", $param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
        if (array_key_exists("AddonId", $param) and $param["AddonId"] !== null) {
            $this->AddonId = $param["AddonId"];
        }

    }
}