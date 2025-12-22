<?php
namespace  Ksyun\Client\Tidb\V20210520\Models;

use Ksyun\Common\BaseModel;

class CreateTaskResponse extends BaseModel
{
         /** **/
         public  $TaskName;

         /** **/
         public  $OperStatus;

         /** **/
         public  $Msg;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
                $this->TaskName = $param["TaskName"];
            }
            if (array_key_exists("OperStatus",$param) and $param["OperStatus"] !== null) {
                $this->OperStatus = $param["OperStatus"];
            }
            if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
                $this->Msg = $param["Msg"];
            }

        }
}