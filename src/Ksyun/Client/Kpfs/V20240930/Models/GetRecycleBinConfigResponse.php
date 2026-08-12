<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;

class GetRecycleBinConfigResponse extends BaseModel
{
         /** 回收站状态
• on：回收站已启用
• off：回收站已关闭**/
         public  $Enabled;

         /** 回收站中文件的保留时间**/
         public  $ExpireTime;

         /** 过期时间类型
• DAY：天
• HOUR:小时（仅性能型支持）
**/
         public  $ExpireType;

         /** 唯一请求ID，每次请求都会返回。**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
                $this->Enabled = $param["Enabled"];
            }
            if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
                $this->ExpireTime = $param["ExpireTime"];
            }
            if (array_key_exists("ExpireType",$param) and $param["ExpireType"] !== null) {
                $this->ExpireType = $param["ExpireType"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}