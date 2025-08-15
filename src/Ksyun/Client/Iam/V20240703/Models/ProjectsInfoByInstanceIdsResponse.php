<?php
namespace  Ksyun\Client\Iam\V20240703\Models;

use Ksyun\Common\BaseModel;

class ProjectsInfoByInstanceIdsResponse extends BaseModel
{
         /**Object 实例、项目信息**/
         public  $List;

         /** 查询出实例项目信息数量**/
         public  $Total;

         /** 请求结果ID**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("List",$param) and $param["List"] !== null) {
                $this->List = $param["List"];
            }
            if (array_key_exists("Total",$param) and $param["Total"] !== null) {
                $this->Total = $param["Total"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}