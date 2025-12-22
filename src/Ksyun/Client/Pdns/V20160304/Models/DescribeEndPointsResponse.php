<?php
namespace  Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeEndPointsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 出站节点的信息**/
         public  $EndPointSet;

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
            if (array_key_exists("EndPointSet",$param) and $param["EndPointSet"] !== null) {
                $this->EndPointSet = $param["EndPointSet"];
            }

        }
}