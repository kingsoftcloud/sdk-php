<?php

namespace Ksyun\Client\Bill\V20180601\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetPostpayDetailBillRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "BillStartMonth" => null,
        /**String**/
        "BillEndMonth" => null,
        /**String**/
        "ProductCode" => null,
        /**String**/
        "ProjectId" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("BillStartMonth", $param) and $param["BillStartMonth"] !== null) {
            if (is_bool($param["BillStartMonth"])) {
                $this->RequestParams["BillStartMonth"] = $param["BillStartMonth"] ? "true" : "false";
            } else {
                $this->RequestParams["BillStartMonth"] = $param["BillStartMonth"];
            }
        }
        if (array_key_exists("BillEndMonth", $param) and $param["BillEndMonth"] !== null) {
            if (is_bool($param["BillEndMonth"])) {
                $this->RequestParams["BillEndMonth"] = $param["BillEndMonth"] ? "true" : "false";
            } else {
                $this->RequestParams["BillEndMonth"] = $param["BillEndMonth"];
            }
        }
        if (array_key_exists("ProductCode", $param) and $param["ProductCode"] !== null) {
            if (is_bool($param["ProductCode"])) {
                $this->RequestParams["ProductCode"] = $param["ProductCode"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductCode"] = $param["ProductCode"];
            }
        }
        if (array_key_exists("ProjectId", $param) and $param["ProjectId"] !== null) {
            if (is_bool($param["ProjectId"])) {
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
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