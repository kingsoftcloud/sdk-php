<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DescribeInferenceJobsKs3AuthInfoResponse extends BaseModel
{
         /** **/
         public  $Id;

         /** **/
         public  $Ak;

         /** **/
         public  $Sk;

         /** 是否需要授权**/
         public  $NeedCreateRole;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Id",$param) and $param["Id"] !== null) {
                $this->Id = $param["Id"];
            }
            if (array_key_exists("Ak",$param) and $param["Ak"] !== null) {
                $this->Ak = $param["Ak"];
            }
            if (array_key_exists("Sk",$param) and $param["Sk"] !== null) {
                $this->Sk = $param["Sk"];
            }
            if (array_key_exists("NeedCreateRole",$param) and $param["NeedCreateRole"] !== null) {
                $this->NeedCreateRole = $param["NeedCreateRole"];
            }

        }
}