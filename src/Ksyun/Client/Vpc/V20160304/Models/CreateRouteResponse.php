<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateRouteResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /** 路由的ID**/
    public $RouteId;

    /** 下一跳类型**/
    public $RouteType;

    /** 创建时间**/
    public $CreateTime;

    /** Vpc的ID**/
    public $VpcId;

    /** 目标网段**/
    public $DestinationCidrBlock;

    /** 是否是系统路由**/
    public $System;

    /** 描述信息**/
    public $Description;

    /** 路由表ID**/
    public $RouteTableId;

    /** 类型**/
    public $RouteEntryType;

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
        if (array_key_exists("RouteId", $param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }
        if (array_key_exists("RouteType", $param) and $param["RouteType"] !== null) {
            $this->RouteType = $param["RouteType"];
        }
        if (array_key_exists("CreateTime", $param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
        if (array_key_exists("VpcId", $param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
        if (array_key_exists("DestinationCidrBlock", $param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }
        if (array_key_exists("System", $param) and $param["System"] !== null) {
            $this->System = $param["System"];
        }
        if (array_key_exists("Description", $param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
        if (array_key_exists("RouteTableId", $param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }
        if (array_key_exists("RouteEntryType", $param) and $param["RouteEntryType"] !== null) {
            $this->RouteEntryType = $param["RouteEntryType"];
        }

    }
}