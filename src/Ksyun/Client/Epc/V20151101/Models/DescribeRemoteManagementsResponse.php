<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeRemoteManagementsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 物理机带外的信息**/
         public  $RemoteManagementSet;

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
            if (array_key_exists("RemoteManagementSet",$param) and $param["RemoteManagementSet"] !== null) {
                $this->RemoteManagementSet = $param["RemoteManagementSet"];
            }

        }
}