<?php
namespace  Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;

class DescribeReleaseResponse extends BaseModel
{
         /** 请求 Id**/
         public  $RequestId;

         /**Object Helm3应用实体**/
         public  $Releases;

         /** 版本号**/
         public  $ReleaseVersion;

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
            if (array_key_exists("Releases",$param) and $param["Releases"] !== null) {
                $this->Releases = $param["Releases"];
            }
            if (array_key_exists("ReleaseVersion",$param) and $param["ReleaseVersion"] !== null) {
                $this->ReleaseVersion = $param["ReleaseVersion"];
            }

        }
}