<?php
namespace  Ksyun\Client\Kead\V20200101\Models;

use Ksyun\Common\BaseModel;

class DescribeBlockIpResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /**Object **/
         public  $BlockIpSet;

         /**Object **/
         public  $RegionSet;

         /**String **/
         public  $ResourceSet;

         /** **/
         public  $BlockIpCount;

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
            if (array_key_exists("BlockIpSet",$param) and $param["BlockIpSet"] !== null) {
                $this->BlockIpSet = $param["BlockIpSet"];
            }
            if (array_key_exists("RegionSet",$param) and $param["RegionSet"] !== null) {
                $this->RegionSet = $param["RegionSet"];
            }
            if (array_key_exists("ResourceSet",$param) and $param["ResourceSet"] !== null) {
                $this->ResourceSet = $param["ResourceSet"];
            }
            if (array_key_exists("BlockIpCount",$param) and $param["BlockIpCount"] !== null) {
                $this->BlockIpCount = $param["BlockIpCount"];
            }

        }
}