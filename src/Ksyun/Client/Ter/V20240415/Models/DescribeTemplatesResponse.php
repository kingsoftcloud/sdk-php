<?php
namespace  Ksyun\Client\Ter\V20240415\Models;

use Ksyun\Common\BaseModel;

class DescribeTemplatesResponse extends BaseModel
{
         /** **/
         public  $TemplateCount;

         /**Object **/
         public  $Templates;

         /** **/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("TemplateCount",$param) and $param["TemplateCount"] !== null) {
                $this->TemplateCount = $param["TemplateCount"];
            }
            if (array_key_exists("Templates",$param) and $param["Templates"] !== null) {
                $this->Templates = $param["Templates"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}