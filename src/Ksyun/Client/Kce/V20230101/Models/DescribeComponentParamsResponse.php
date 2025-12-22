<?php
namespace  Ksyun\Client\Kce\V20230101\Models;

use Ksyun\Common\BaseModel;

class DescribeComponentParamsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequeestId;

         /** 返回数据**/
         public  $Data;

         /**Object 组件列表**/
         public  $Components;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RequeestId",$param) and $param["RequeestId"] !== null) {
                $this->RequeestId = $param["RequeestId"];
            }
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }
            if (array_key_exists("Components",$param) and $param["Components"] !== null) {
                $this->Components = $param["Components"];
            }

        }
}