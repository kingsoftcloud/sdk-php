<?php
namespace  Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;

class DescribeRepositoryResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $MaxResults;

         /** **/
         public  $Marker;

         /** **/
         public  $TotalCount;

         /**Object **/
         public  $RepoSet;

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
            if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
                $this->MaxResults = $param["MaxResults"];
            }
            if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
                $this->Marker = $param["Marker"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("RepoSet",$param) and $param["RepoSet"] !== null) {
                $this->RepoSet = $param["RepoSet"];
            }

        }
}