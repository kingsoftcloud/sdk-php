<?php
namespace  Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;

class DescribeParamGroupInfoResponse extends BaseModel
{
         /** **/
         public  $ParamGroupInfo;

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
            if (array_key_exists("ParamGroupInfo",$param) and $param["ParamGroupInfo"] !== null) {
                $this->ParamGroupInfo = $param["ParamGroupInfo"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}