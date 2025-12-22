<?php
namespace  Ksyun\Client\Ter\V20240415\Models;

use Ksyun\Common\BaseModel;

class DescribeTemplateVersionsResponse extends BaseModel
{
         /**Object 模板**/
         public  $Versions;

         /** 接口请求ID
示例值：a831f245-2694-47de-a417-a5e7d8b250f1012**/
         public  $RequestId;

         /** 模板ID**/
         public  $TemplateId;

         /** 返回的版本数量**/
         public  $VersionCount;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Versions",$param) and $param["Versions"] !== null) {
                $this->Versions = $param["Versions"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
                $this->TemplateId = $param["TemplateId"];
            }
            if (array_key_exists("VersionCount",$param) and $param["VersionCount"] !== null) {
                $this->VersionCount = $param["VersionCount"];
            }

        }
}