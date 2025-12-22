<?php
namespace  Ksyun\Client\Resourcemanager\V20210320\Models;

use Ksyun\Common\BaseModel;

class ListFoldersResponse extends BaseModel
{
         /** 资源夹名称**/
         public  $Name;

         /** 资源夹备注**/
         public  $Desc;

         /** 资源夹ID**/
         public  $Id;

         /** 资源夹创建时间**/
         public  $CreatedTime;

         /** 资源夹层级**/
         public  $Level;

         /** 父级资源夹ID**/
         public  $ParentId;

         /** 资源夹成员数量**/
         public  $Num;

         /**Object 子级资源夹列表**/
         public  $SonFolder;

         /** 请求ID**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Name",$param) and $param["Name"] !== null) {
                $this->Name = $param["Name"];
            }
            if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
                $this->Desc = $param["Desc"];
            }
            if (array_key_exists("Id",$param) and $param["Id"] !== null) {
                $this->Id = $param["Id"];
            }
            if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
                $this->CreatedTime = $param["CreatedTime"];
            }
            if (array_key_exists("Level",$param) and $param["Level"] !== null) {
                $this->Level = $param["Level"];
            }
            if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
                $this->ParentId = $param["ParentId"];
            }
            if (array_key_exists("Num",$param) and $param["Num"] !== null) {
                $this->Num = $param["Num"];
            }
            if (array_key_exists("SonFolder",$param) and $param["SonFolder"] !== null) {
                $this->SonFolder = $param["SonFolder"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}