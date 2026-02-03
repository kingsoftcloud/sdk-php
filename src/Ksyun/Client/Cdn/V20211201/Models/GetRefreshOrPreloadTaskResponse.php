<?php
namespace  Ksyun\Client\Cdn\V20211201\Models;

use Ksyun\Common\BaseModel;

class GetRefreshOrPreloadTaskResponse extends BaseModel
{
         /** 开始时间**/
         public  $StartTime;

         /** 结束时间**/
         public  $EndTime;

         /**Object 查询的URL列表**/
         public  $Urls;

         /** 整页大小**/
         public  $PageSize;

         /** 页码**/
         public  $PageNumber;

         /** Url总条数**/
         public  $TotalCount;

         /**Object 刷新或预热任务进度百分比及状态信息**/
         public  $Datas;

         /** **/
         public  $Message;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
                $this->StartTime = $param["StartTime"];
            }
            if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
                $this->EndTime = $param["EndTime"];
            }
            if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
                $this->Urls = $param["Urls"];
            }
            if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
                $this->PageSize = $param["PageSize"];
            }
            if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
                $this->PageNumber = $param["PageNumber"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("Datas",$param) and $param["Datas"] !== null) {
                $this->Datas = $param["Datas"];
            }
            if (array_key_exists("Message",$param) and $param["Message"] !== null) {
                $this->Message = $param["Message"];
            }

        }
}