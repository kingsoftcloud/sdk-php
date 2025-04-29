<?php

namespace Ksyun\Client\Kcm\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdateCertificateRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "CertificateId" => null,
        /**String**/
        "AuthMethod" => null,
        /**String**/
        "CSR" => null,
        /**Int**/
        "ContactId" => null,
        /**Int**/
        "CompanyId" => null,
        /**String**/
        "CompanyName" => null,
        /**String**/
        "Department" => null,
        /**String**/
        "State" => null,
        /**String**/
        "City" => null,
        /**String**/
        "Address" => null,
        /**String**/
        "CompanyPhone" => null,
        /**String**/
        "PostalCode" => null,
        /**String**/
        "DcvEmail" => null,
        /**String**/
        "AdditionalDomains" => null,
        /**String**/
        "Wildcards" => null,
        /**String**/
        "Contact" => null,
        /**String**/
        "IsSubmit" => null,
        /**String**/
        "BusinessLicence" => null,
        /**String**/
        "CsrSource" => null,
        /**String**/
        "Algorithm" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CertificateId", $param) and $param["CertificateId"] !== null) {
            if (is_bool($param["CertificateId"])) {
                $this->RequestParams["CertificateId"] = $param["CertificateId"] ? "true" : "false";
            } else {
                $this->RequestParams["CertificateId"] = $param["CertificateId"];
            }
        }
        if (array_key_exists("AuthMethod", $param) and $param["AuthMethod"] !== null) {
            if (is_bool($param["AuthMethod"])) {
                $this->RequestParams["AuthMethod"] = $param["AuthMethod"] ? "true" : "false";
            } else {
                $this->RequestParams["AuthMethod"] = $param["AuthMethod"];
            }
        }
        if (array_key_exists("CSR", $param) and $param["CSR"] !== null) {
            if (is_bool($param["CSR"])) {
                $this->RequestParams["CSR"] = $param["CSR"] ? "true" : "false";
            } else {
                $this->RequestParams["CSR"] = $param["CSR"];
            }
        }
        if (array_key_exists("ContactId", $param) and $param["ContactId"] !== null) {
            if (is_bool($param["ContactId"])) {
                $this->RequestParams["ContactId"] = $param["ContactId"] ? "true" : "false";
            } else {
                $this->RequestParams["ContactId"] = $param["ContactId"];
            }
        }
        if (array_key_exists("CompanyId", $param) and $param["CompanyId"] !== null) {
            if (is_bool($param["CompanyId"])) {
                $this->RequestParams["CompanyId"] = $param["CompanyId"] ? "true" : "false";
            } else {
                $this->RequestParams["CompanyId"] = $param["CompanyId"];
            }
        }
        if (array_key_exists("CompanyName", $param) and $param["CompanyName"] !== null) {
            if (is_bool($param["CompanyName"])) {
                $this->RequestParams["CompanyName"] = $param["CompanyName"] ? "true" : "false";
            } else {
                $this->RequestParams["CompanyName"] = $param["CompanyName"];
            }
        }
        if (array_key_exists("Department", $param) and $param["Department"] !== null) {
            if (is_bool($param["Department"])) {
                $this->RequestParams["Department"] = $param["Department"] ? "true" : "false";
            } else {
                $this->RequestParams["Department"] = $param["Department"];
            }
        }
        if (array_key_exists("State", $param) and $param["State"] !== null) {
            if (is_bool($param["State"])) {
                $this->RequestParams["State"] = $param["State"] ? "true" : "false";
            } else {
                $this->RequestParams["State"] = $param["State"];
            }
        }
        if (array_key_exists("City", $param) and $param["City"] !== null) {
            if (is_bool($param["City"])) {
                $this->RequestParams["City"] = $param["City"] ? "true" : "false";
            } else {
                $this->RequestParams["City"] = $param["City"];
            }
        }
        if (array_key_exists("Address", $param) and $param["Address"] !== null) {
            if (is_bool($param["Address"])) {
                $this->RequestParams["Address"] = $param["Address"] ? "true" : "false";
            } else {
                $this->RequestParams["Address"] = $param["Address"];
            }
        }
        if (array_key_exists("CompanyPhone", $param) and $param["CompanyPhone"] !== null) {
            if (is_bool($param["CompanyPhone"])) {
                $this->RequestParams["CompanyPhone"] = $param["CompanyPhone"] ? "true" : "false";
            } else {
                $this->RequestParams["CompanyPhone"] = $param["CompanyPhone"];
            }
        }
        if (array_key_exists("PostalCode", $param) and $param["PostalCode"] !== null) {
            if (is_bool($param["PostalCode"])) {
                $this->RequestParams["PostalCode"] = $param["PostalCode"] ? "true" : "false";
            } else {
                $this->RequestParams["PostalCode"] = $param["PostalCode"];
            }
        }
        if (array_key_exists("DcvEmail", $param) and $param["DcvEmail"] !== null) {
            if (is_bool($param["DcvEmail"])) {
                $this->RequestParams["DcvEmail"] = $param["DcvEmail"] ? "true" : "false";
            } else {
                $this->RequestParams["DcvEmail"] = $param["DcvEmail"];
            }
        }
        if (array_key_exists("AdditionalDomains", $param) and $param["AdditionalDomains"] !== null) {
            if (is_bool($param["AdditionalDomains"])) {
                $this->RequestParams["AdditionalDomains"] = $param["AdditionalDomains"] ? "true" : "false";
            } else {
                $this->RequestParams["AdditionalDomains"] = $param["AdditionalDomains"];
            }
        }
        if (array_key_exists("Wildcards", $param) and $param["Wildcards"] !== null) {
            if (is_bool($param["Wildcards"])) {
                $this->RequestParams["Wildcards"] = $param["Wildcards"] ? "true" : "false";
            } else {
                $this->RequestParams["Wildcards"] = $param["Wildcards"];
            }
        }
        if (array_key_exists("Contact", $param) and $param["Contact"] !== null) {
            if (is_bool($param["Contact"])) {
                $this->RequestParams["Contact"] = $param["Contact"] ? "true" : "false";
            } else {
                $this->RequestParams["Contact"] = $param["Contact"];
            }
        }
        if (array_key_exists("IsSubmit", $param) and $param["IsSubmit"] !== null) {
            if (is_bool($param["IsSubmit"])) {
                $this->RequestParams["IsSubmit"] = $param["IsSubmit"] ? "true" : "false";
            } else {
                $this->RequestParams["IsSubmit"] = $param["IsSubmit"];
            }
        }
        if (array_key_exists("BusinessLicence", $param) and $param["BusinessLicence"] !== null) {
            if (is_bool($param["BusinessLicence"])) {
                $this->RequestParams["BusinessLicence"] = $param["BusinessLicence"] ? "true" : "false";
            } else {
                $this->RequestParams["BusinessLicence"] = $param["BusinessLicence"];
            }
        }
        if (array_key_exists("CsrSource", $param) and $param["CsrSource"] !== null) {
            if (is_bool($param["CsrSource"])) {
                $this->RequestParams["CsrSource"] = $param["CsrSource"] ? "true" : "false";
            } else {
                $this->RequestParams["CsrSource"] = $param["CsrSource"];
            }
        }
        if (array_key_exists("Algorithm", $param) and $param["Algorithm"] !== null) {
            if (is_bool($param["Algorithm"])) {
                $this->RequestParams["Algorithm"] = $param["Algorithm"] ? "true" : "false";
            } else {
                $this->RequestParams["Algorithm"] = $param["Algorithm"];
            }
        }

    }

    private function _unserialize($name, $params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value) {
            $this->$name[$key] = $value;
        }

    }
}