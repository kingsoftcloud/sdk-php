<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class GetCdnDomainBasicInfoResponse extends BaseModel
{
         /** 接入CDN进行加速的域名**/
         public  $DomainName;

         /** 域名ID**/
         public  $DomainId;

         /** 为加速域名生成的一个CNAME域名，需要在域名解析服务商处将加速域名CNAME解析到该域名**/
         public  $Cname;

         /** 加速域名运行状态**/
         public  $DomainStatus;

         /** 加速域名的产品类型**/
         public  $CdnType;

         /** 加速业务子类型，业务子类型是为了细分业务，默认不填写，目前作为已废弃的历史遗留字段**/
         public  $CdnSubType;

         /** 域名所属项目ID**/
         public  $ProjectId;

         /** 域名所属项目名称**/
         public  $ProjectName;

         /** ICP备案号**/
         public  $IcpRegistration;

         /** 审核失败原因**/
         public  $AuditFailReason;

         /** 客户访问服务节点的协议。默认http，流媒体直播必须填写：http＋flv，hls，rtmp。当产品类型为大文件下载、音视频点播、图片小文件时，访问协议为http；当产品类型为流媒体直播时，访问协议为http＋flv，hls，rtmp**/
         public  $CdnProtocol;

         /** 加速区域，支持CN：【中国大陆】；OverSea：【全球（除中国大陆）】；Global：【全球】，缺省为 CN**/
         public  $Regions;

         /** 源站类型 取值：ipaddr、 domain、KS3、ksvideo分别表示：IP源站、域名源站、KS3为源站、金山云视频云源站**/
         public  $OriginType;

         /** 回源协议，取值：http，https，follow，rtmp，hls，当产品类型为大文件下载、音视频点播、小文件下载时，回源协议为http，https，follow（协议跟随）；当产品类型为流媒体直播时，回源协议为rtmp，hls（注：访问协议为hls时，回源协议必须为hls；访问协议为http+flv和rtmp时，回源协议必须为rtmp）**/
         public  $OriginProtocol;

         /** 回源地址，可以是IP或域名；IP支持最多20个，以逗号区分，域名只能输入一个。IP与域名不能同时输入**/
         public  $Origin;

         /** Http协议回源端口**/
         public  $OriginHttpPort;

         /** Https协议回源端口**/
         public  $OriginHttpsPort;

         /** 加速域名创建时间，ISO8601表示法，北京时间，格式为：YYYY-MM-DDThh:mm+0800，例如： 2016-08-01T21:14+0800**/
         public  $CreatedTime;

         /** 加速域名修改时间，ISO8601表示法，北京时间，格式为：YYYY-MM-DDThh:mm+0800，例如： 2016-08-01T21:14+0800**/
         public  $ModifiedTime;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
                $this->DomainName = $param["DomainName"];
            }
            if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
                $this->DomainId = $param["DomainId"];
            }
            if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
                $this->Cname = $param["Cname"];
            }
            if (array_key_exists("DomainStatus",$param) and $param["DomainStatus"] !== null) {
                $this->DomainStatus = $param["DomainStatus"];
            }
            if (array_key_exists("CdnType",$param) and $param["CdnType"] !== null) {
                $this->CdnType = $param["CdnType"];
            }
            if (array_key_exists("CdnSubType",$param) and $param["CdnSubType"] !== null) {
                $this->CdnSubType = $param["CdnSubType"];
            }
            if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
                $this->ProjectId = $param["ProjectId"];
            }
            if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
                $this->ProjectName = $param["ProjectName"];
            }
            if (array_key_exists("IcpRegistration",$param) and $param["IcpRegistration"] !== null) {
                $this->IcpRegistration = $param["IcpRegistration"];
            }
            if (array_key_exists("AuditFailReason",$param) and $param["AuditFailReason"] !== null) {
                $this->AuditFailReason = $param["AuditFailReason"];
            }
            if (array_key_exists("CdnProtocol",$param) and $param["CdnProtocol"] !== null) {
                $this->CdnProtocol = $param["CdnProtocol"];
            }
            if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
                $this->Regions = $param["Regions"];
            }
            if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
                $this->OriginType = $param["OriginType"];
            }
            if (array_key_exists("OriginProtocol",$param) and $param["OriginProtocol"] !== null) {
                $this->OriginProtocol = $param["OriginProtocol"];
            }
            if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
                $this->Origin = $param["Origin"];
            }
            if (array_key_exists("OriginHttpPort",$param) and $param["OriginHttpPort"] !== null) {
                $this->OriginHttpPort = $param["OriginHttpPort"];
            }
            if (array_key_exists("OriginHttpsPort",$param) and $param["OriginHttpsPort"] !== null) {
                $this->OriginHttpsPort = $param["OriginHttpsPort"];
            }
            if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
                $this->CreatedTime = $param["CreatedTime"];
            }
            if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
                $this->ModifiedTime = $param["ModifiedTime"];
            }

        }
}