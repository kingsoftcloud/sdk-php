<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateMountTargetResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 挂载点ID**/
         public  $MountTargetID;

         /** 访问文件系统的挂载点IP地址**/
         public  $IpAddress;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("MountTargetID",$param) and $param["MountTargetID"] !== null) {
                $this->MountTargetID = $param["MountTargetID"];
            }
            if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
                $this->IpAddress = $param["IpAddress"];
            }

        }
}