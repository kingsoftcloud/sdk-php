<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DescribeModelTypesResponse extends BaseModel
{
         /**Object 模型类别列表**/
         public  $ModelTypeList;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ModelTypeList",$param) and $param["ModelTypeList"] !== null) {
                $this->ModelTypeList = $param["ModelTypeList"];
            }

        }
}