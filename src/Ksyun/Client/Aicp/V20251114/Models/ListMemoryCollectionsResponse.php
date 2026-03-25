<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class ListMemoryCollectionsResponse extends BaseModel
{
         /**Object 记忆库列表**/
         public  $Memories;

         /** 最大返回数量**/
         public  $MaxResults;

         /** 分页标记**/
         public  $Marker;

         /** 总数**/
         public  $Total;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Memories",$param) and $param["Memories"] !== null) {
                $this->Memories = $param["Memories"];
            }
            if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
                $this->MaxResults = $param["MaxResults"];
            }
            if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
                $this->Marker = $param["Marker"];
            }
            if (array_key_exists("Total",$param) and $param["Total"] !== null) {
                $this->Total = $param["Total"];
            }

        }
}