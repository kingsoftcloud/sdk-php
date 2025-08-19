<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class QueryBucketsResponse extends BaseModel
{
         /**Object **/
         public  $BucketSet;

         /** **/
         public  $Code;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("BucketSet",$param) and $param["BucketSet"] !== null) {
                $this->BucketSet = $param["BucketSet"];
            }
            if (array_key_exists("Code",$param) and $param["Code"] !== null) {
                $this->Code = $param["Code"];
            }

        }
}