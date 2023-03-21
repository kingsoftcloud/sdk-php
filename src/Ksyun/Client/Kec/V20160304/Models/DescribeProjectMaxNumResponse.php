<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeProjectMaxNumResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** 项目制最大数量**/
         public  $ProjectMaxNum;

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
            if (array_key_exists("ProjectMaxNum",$param) and $param["ProjectMaxNum"] !== null) {
                $this->ProjectMaxNum = $param["ProjectMaxNum"];
            }

        }
}