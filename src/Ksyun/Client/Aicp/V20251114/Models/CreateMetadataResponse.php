<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class CreateMetadataResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /** 元数据ID**/
         public  $Id;

         /** 元数据类型**/
         public  $Type;

         /** 元数据名称**/
         public  $Name;

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
            if (array_key_exists("Id",$param) and $param["Id"] !== null) {
                $this->Id = $param["Id"];
            }
            if (array_key_exists("Type",$param) and $param["Type"] !== null) {
                $this->Type = $param["Type"];
            }
            if (array_key_exists("Name",$param) and $param["Name"] !== null) {
                $this->Name = $param["Name"];
            }

        }
}