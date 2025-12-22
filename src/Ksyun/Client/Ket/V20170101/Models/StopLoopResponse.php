<?php
namespace  Ksyun\Client\Ket\V20170101\Models;

use Ksyun\Common\BaseModel;

class StopLoopResponse extends BaseModel
{
         /** 错误码，0：成功；非0：失败**/
         public  $ErrNum;

         /** 描述本次请求错误的原因**/
         public  $ErrMsg;

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

        }
}