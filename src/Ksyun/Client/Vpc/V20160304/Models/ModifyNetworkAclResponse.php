<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyNetworkAclResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 创建时间**/
         public  $CreateTime;

         /** Vpc的ID**/
         public  $VpcId;

         /** ACL的名称**/
         public  $NetworkAclName;

         /** ACL的ID**/
         public  $NetworkAclId;

         /** ACL的描述**/
         public  $Description;

         /**Object ACL规则信息**/
         public  $NetworkAclEntrySet;

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
            if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
                $this->CreateTime = $param["CreateTime"];
            }
            if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
                $this->VpcId = $param["VpcId"];
            }
            if (array_key_exists("NetworkAclName",$param) and $param["NetworkAclName"] !== null) {
                $this->NetworkAclName = $param["NetworkAclName"];
            }
            if (array_key_exists("NetworkAclId",$param) and $param["NetworkAclId"] !== null) {
                $this->NetworkAclId = $param["NetworkAclId"];
            }
            if (array_key_exists("Description",$param) and $param["Description"] !== null) {
                $this->Description = $param["Description"];
            }
            if (array_key_exists("NetworkAclEntrySet",$param) and $param["NetworkAclEntrySet"] !== null) {
                $this->NetworkAclEntrySet = $param["NetworkAclEntrySet"];
            }

        }
}