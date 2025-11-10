<?php
namespace  Ksyun\Client\Kmr\V20240814\Models;

use Ksyun\Common\BaseModel;

class ListRayJobRunsResponse extends BaseModel
{
         /** **/
         public  $status;

         /** **/
         public  $data;

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
            if (array_key_exists("data",$param) and $param["data"] !== null) {
                $this->data = $param["data"];
            }

        }
}