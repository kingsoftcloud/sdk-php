<?php
namespace  Ksyun\Client\Kmr\V20240814\Models;

use Ksyun\Common\BaseModel;

class QueryMetricsResponse extends BaseModel
{
         /** 查询状态
• success：查询成功
• error：查询失败
**/
         public  $status;

         /** 是否为部分结果
• true：表示返回的为部分结果，可能还有更多的数据需要获取
• false：表示返回的为完整结果**/
         public  $isPartial;

         /** 查询结果的数据部分，异常时直接返回字符串**/
         public  $data;

         /** 查询的统计信息**/
         public  $stats;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("status",$param) and $param["status"] !== null) {
                $this->status = $param["status"];
            }
            if (array_key_exists("isPartial",$param) and $param["isPartial"] !== null) {
                $this->isPartial = $param["isPartial"];
            }
            if (array_key_exists("data",$param) and $param["data"] !== null) {
                $this->data = $param["data"];
            }
            if (array_key_exists("stats",$param) and $param["stats"] !== null) {
                $this->stats = $param["stats"];
            }

        }
}