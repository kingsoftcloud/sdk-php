<?php
namespace  Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;

class DescribeInstanceUsageResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $NamespaceQuota;

         /** **/
         public  $NamespaceUsage;

         /** **/
         public  $RepoQuota;

         /** **/
         public  $RepoUsage;

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
            if (array_key_exists("NamespaceQuota",$param) and $param["NamespaceQuota"] !== null) {
                $this->NamespaceQuota = $param["NamespaceQuota"];
            }
            if (array_key_exists("NamespaceUsage",$param) and $param["NamespaceUsage"] !== null) {
                $this->NamespaceUsage = $param["NamespaceUsage"];
            }
            if (array_key_exists("RepoQuota",$param) and $param["RepoQuota"] !== null) {
                $this->RepoQuota = $param["RepoQuota"];
            }
            if (array_key_exists("RepoUsage",$param) and $param["RepoUsage"] !== null) {
                $this->RepoUsage = $param["RepoUsage"];
            }

        }
}