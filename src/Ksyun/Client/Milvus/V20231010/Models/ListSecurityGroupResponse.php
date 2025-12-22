<?php
namespace  Ksyun\Client\Milvus\V20231010\Models;

use Ksyun\Common\BaseModel;

class ListSecurityGroupResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $Code;

         /** **/
         public  $Message;

         /** 页码，默认0为第一页**/
         public  $Offset;

         /** 每页展示条数。默认10条**/
         public  $Limit;

         /** 总条数**/
         public  $Total;

         /**Object **/
         public  $Data;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("Code",$param) and $param["Code"] !== null) {
                $this->Code = $param["Code"];
            }
            if (array_key_exists("Message",$param) and $param["Message"] !== null) {
                $this->Message = $param["Message"];
            }
            if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
                $this->Offset = $param["Offset"];
            }
            if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
                $this->Limit = $param["Limit"];
            }
            if (array_key_exists("Total",$param) and $param["Total"] !== null) {
                $this->Total = $param["Total"];
            }
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }

        }
}