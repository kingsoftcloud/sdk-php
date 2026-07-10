<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class GetMemoryCollectionResponse extends BaseModel
{
         /** 记忆库唯一 ID**/
         public  $MemoryCollectionId;

         /** 记忆库名称**/
         public  $Name;

         /** 记忆库描述信息**/
         public  $Description;

         /** 记忆库状态；可选值：CreateFailed/Ready**/
         public  $Status;

         /** 记忆库创建时间，秒级时间戳**/
         public  $CreateTime;

         /** 记忆库最后更新时间，秒级时间戳**/
         public  $LastUpdateTime;

         /** 记忆库所属地域**/
         public  $Region;

         /** **/
         public  $LongTermConfiguration;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("MemoryCollectionId",$param) and $param["MemoryCollectionId"] !== null) {
                $this->MemoryCollectionId = $param["MemoryCollectionId"];
            }
            if (array_key_exists("Name",$param) and $param["Name"] !== null) {
                $this->Name = $param["Name"];
            }
            if (array_key_exists("Description",$param) and $param["Description"] !== null) {
                $this->Description = $param["Description"];
            }
            if (array_key_exists("Status",$param) and $param["Status"] !== null) {
                $this->Status = $param["Status"];
            }
            if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
                $this->CreateTime = $param["CreateTime"];
            }
            if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
                $this->LastUpdateTime = $param["LastUpdateTime"];
            }
            if (array_key_exists("Region",$param) and $param["Region"] !== null) {
                $this->Region = $param["Region"];
            }
            if (array_key_exists("LongTermConfiguration",$param) and $param["LongTermConfiguration"] !== null) {
                $this->LongTermConfiguration = $param["LongTermConfiguration"];
            }

        }
}