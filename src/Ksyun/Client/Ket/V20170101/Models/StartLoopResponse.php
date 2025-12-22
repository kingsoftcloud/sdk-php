<?php
namespace  Ksyun\Client\Ket\V20170101\Models;

use Ksyun\Common\BaseModel;

class StartLoopResponse extends BaseModel
{
         /** 错误码**/
         public  $ErrNum;

         /** 错误信息**/
         public  $ErrMsg;

         /**Object 轮播转码任务信息**/
         public  $List;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ErrNum",$param) and $param["ErrNum"] !== null) {
                $this->ErrNum = $param["ErrNum"];
            }
            if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
                $this->ErrMsg = $param["ErrMsg"];
            }
            if (array_key_exists("List",$param) and $param["List"] !== null) {
                $this->List = $param["List"];
            }

        }
}