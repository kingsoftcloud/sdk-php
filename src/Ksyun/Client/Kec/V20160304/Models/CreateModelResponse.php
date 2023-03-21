<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateModelResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 实例启动模板ID**/
         public  $ModelId;

         /** 实例启动模板名称**/
         public  $ModelName;

         /** 实例待绑定的IAM角色名称**/
         public  $IamRoleName;

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
            if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
                $this->ModelId = $param["ModelId"];
            }
            if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
                $this->ModelName = $param["ModelName"];
            }
            if (array_key_exists("IamRoleName",$param) and $param["IamRoleName"] !== null) {
                $this->IamRoleName = $param["IamRoleName"];
            }

        }
}