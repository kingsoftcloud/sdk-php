<?php
namespace  Ksyun\Client\Waf\V20200707\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyAlbDomainRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ResourceRecordId" => null,
         /**Boolean**/
        "HttpRewrite" => null,
         /**Boolean**/
        "HttpSource" => null,
         /**String**/
        "CertificateId" => null,
         /**String**/
        "CertificateRegion" => null,
         /**String**/
        "LbMethod" => null,
         /**Boolean**/
        "HasProxy" => null,
         /**Int**/
        "ProjectId" => null,
         /**String**/
        "HeaderMark" => null,
         /**String**/
        "HeaderValue" => null,
         /**String**/
        "HealthMonitor" => null,
         /**String**/
        "Sources" => null,
    ];

     /**特殊参数类型:Filter**/
    public $HttpPort = [];
      /**特殊参数类型:Filter**/
    public $HttpsPort = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ResourceRecordId",$param) and $param["ResourceRecordId"] !== null) {
            if(is_bool($param["ResourceRecordId"])){
                $this->RequestParams["ResourceRecordId"] = $param["ResourceRecordId"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourceRecordId"] = $param["ResourceRecordId"];
            }
        }
        if (array_key_exists("HttpRewrite",$param) and $param["HttpRewrite"] !== null) {
            if(is_bool($param["HttpRewrite"])){
                $this->RequestParams["HttpRewrite"] = $param["HttpRewrite"] ? "true" : "false";
            } else {
                $this->RequestParams["HttpRewrite"] = $param["HttpRewrite"];
            }
        }
        if (array_key_exists("HttpSource",$param) and $param["HttpSource"] !== null) {
            if(is_bool($param["HttpSource"])){
                $this->RequestParams["HttpSource"] = $param["HttpSource"] ? "true" : "false";
            } else {
                $this->RequestParams["HttpSource"] = $param["HttpSource"];
            }
        }
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            if(is_bool($param["CertificateId"])){
                $this->RequestParams["CertificateId"] = $param["CertificateId"] ? "true" : "false";
            } else {
                $this->RequestParams["CertificateId"] = $param["CertificateId"];
            }
        }
        if (array_key_exists("CertificateRegion",$param) and $param["CertificateRegion"] !== null) {
            if(is_bool($param["CertificateRegion"])){
                $this->RequestParams["CertificateRegion"] = $param["CertificateRegion"] ? "true" : "false";
            } else {
                $this->RequestParams["CertificateRegion"] = $param["CertificateRegion"];
            }
        }
        if (array_key_exists("LbMethod",$param) and $param["LbMethod"] !== null) {
            if(is_bool($param["LbMethod"])){
                $this->RequestParams["LbMethod"] = $param["LbMethod"] ? "true" : "false";
            } else {
                $this->RequestParams["LbMethod"] = $param["LbMethod"];
            }
        }
        if (array_key_exists("HasProxy",$param) and $param["HasProxy"] !== null) {
            if(is_bool($param["HasProxy"])){
                $this->RequestParams["HasProxy"] = $param["HasProxy"] ? "true" : "false";
            } else {
                $this->RequestParams["HasProxy"] = $param["HasProxy"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("HeaderMark",$param) and $param["HeaderMark"] !== null) {
            if(is_bool($param["HeaderMark"])){
                $this->RequestParams["HeaderMark"] = $param["HeaderMark"] ? "true" : "false";
            } else {
                $this->RequestParams["HeaderMark"] = $param["HeaderMark"];
            }
        }
        if (array_key_exists("HeaderValue",$param) and $param["HeaderValue"] !== null) {
            if(is_bool($param["HeaderValue"])){
                $this->RequestParams["HeaderValue"] = $param["HeaderValue"] ? "true" : "false";
            } else {
                $this->RequestParams["HeaderValue"] = $param["HeaderValue"];
            }
        }
        if (array_key_exists("HealthMonitor",$param) and $param["HealthMonitor"] !== null) {
            if(is_bool($param["HealthMonitor"])){
                $this->RequestParams["HealthMonitor"] = $param["HealthMonitor"] ? "true" : "false";
            } else {
                $this->RequestParams["HealthMonitor"] = $param["HealthMonitor"];
            }
        }
        if (array_key_exists("HttpPort",$param) and $param["HttpPort"] !== null) {
            $res = $this->formatFilterParams("HttpPort",$param["HttpPort"]);
            $this->_unserialize("HttpPort",$res);
        }
        if (array_key_exists("HttpsPort",$param) and $param["HttpsPort"] !== null) {
            $res = $this->formatFilterParams("HttpsPort",$param["HttpsPort"]);
            $this->_unserialize("HttpsPort",$res);
        }
        if (array_key_exists("Sources",$param) and $param["Sources"] !== null) {
            if(is_bool($param["Sources"])){
                $this->RequestParams["Sources"] = $param["Sources"] ? "true" : "false";
            } else {
                $this->RequestParams["Sources"] = $param["Sources"];
            }
        }

    }

    private function _unserialize($name,$params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value){
            $this->$name[$key] = $value;
        }

    }
}