<?php
namespace  Ksyun\Client\Kcm\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeCompanyResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $Success;

         /**Object **/
         public  $CompanySet;

         /** **/
         public  $Total;

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
            if (array_key_exists("Success",$param) and $param["Success"] !== null) {
                $this->Success = $param["Success"];
            }
            if (array_key_exists("CompanySet",$param) and $param["CompanySet"] !== null) {
                $this->CompanySet = $param["CompanySet"];
            }
            if (array_key_exists("Total",$param) and $param["Total"] !== null) {
                $this->Total = $param["Total"];
            }

        }
}