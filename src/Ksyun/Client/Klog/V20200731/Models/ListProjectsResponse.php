<?php
namespace  Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;

class ListProjectsResponse extends BaseModel
{
         /** 数据总量**/
         public  $Total;

         /** 返回行数**/
         public  $Count;

         /**Object 工程列表**/
         public  $Projects;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Total",$param) and $param["Total"] !== null) {
                $this->Total = $param["Total"];
            }
            if (array_key_exists("Count",$param) and $param["Count"] !== null) {
                $this->Count = $param["Count"];
            }
            if (array_key_exists("Projects",$param) and $param["Projects"] !== null) {
                $this->Projects = $param["Projects"];
            }

        }
}