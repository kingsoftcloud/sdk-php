<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class GetPvDataResponse extends BaseModel
{
         /** 开始时间**/
         public  $StartTime;

         /** 结束时间**/
         public  $EndTime;

         /** 产品类型**/
         public  $CdnType;

         /** 域名ID列表，逗号（半角）间隔**/
         public  $DomainIds;

         /** 区域，逗号（半角）间隔（枚举类型表见[使用须知](https://docs.ksyun.com/documents/196#36)）**/
         public  $Regions;

         /** 取值为0：多域名多区域数据做合并返回；1：每个域名每个区域的数据分别返回**/
         public  $ResultType;

         /** 统计粒度，取值为 5：5分钟粒度；10：10分钟粒度；20：20分钟粒度；60：1小时粒度；240：4小时粒度；480：8小时粒度；1440：1天粒度；以上粒度的请求数均取该粒度时间段的请求数总和**/
         public  $Granularity;

         /** 数据类型， 取值为edge:服务数据; origin:回源数据; 支持多类型选择，多个类型用逗号（半角）分隔，缺省为edge**/
         public  $DataType;

         /**Object 每个时间粒度的请求数数据**/
         public  $Datas;

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
            if (array_key_exists("CdnType",$param) and $param["CdnType"] !== null) {
                $this->CdnType = $param["CdnType"];
            }
            if (array_key_exists("DomainIds",$param) and $param["DomainIds"] !== null) {
                $this->DomainIds = $param["DomainIds"];
            }
            if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
                $this->Regions = $param["Regions"];
            }
            if (array_key_exists("ResultType",$param) and $param["ResultType"] !== null) {
                $this->ResultType = $param["ResultType"];
            }
            if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
                $this->Granularity = $param["Granularity"];
            }
            if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
                $this->DataType = $param["DataType"];
            }
            if (array_key_exists("Datas",$param) and $param["Datas"] !== null) {
                $this->Datas = $param["Datas"];
            }

        }
}