<?php
namespace  Ksyun\Client\Kmr\V20210902\Models;

use Ksyun\Common\BaseModel;

class ListClusterVersionsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 版本信息**/
         public  $Versions;

         /**Object **/
         public  $InstanceGroupRequirements;

         /** 状态码**/
         public  $StatusCode;

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
            if (array_key_exists("Versions",$param) and $param["Versions"] !== null) {
                $this->Versions = $param["Versions"];
            }
            if (array_key_exists("InstanceGroupRequirements",$param) and $param["InstanceGroupRequirements"] !== null) {
                $this->InstanceGroupRequirements = $param["InstanceGroupRequirements"];
            }
            if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
                $this->StatusCode = $param["StatusCode"];
            }

        }
}