<?php

namespace Ksyun\Client\Kcs\V20170401\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AddCacheSlaveNodeRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "AvailableZone" => null,
        /**String**/
        "CacheId" => null,
        /**String**/
        "SlaveVip" => null,
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
        if (array_key_exists("AvailableZone", $param) and $param["AvailableZone"] !== null) {
            if (is_bool($param["AvailableZone"])) {
                $this->RequestParams["AvailableZone"] = $param["AvailableZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailableZone"] = $param["AvailableZone"];
            }
        }
        if (array_key_exists("CacheId", $param) and $param["CacheId"] !== null) {
            if (is_bool($param["CacheId"])) {
                $this->RequestParams["CacheId"] = $param["CacheId"] ? "true" : "false";
            } else {
                $this->RequestParams["CacheId"] = $param["CacheId"];
            }
        }
        if (array_key_exists("SlaveVip", $param) and $param["SlaveVip"] !== null) {
            if (is_bool($param["SlaveVip"])) {
                $this->RequestParams["SlaveVip"] = $param["SlaveVip"] ? "true" : "false";
            } else {
                $this->RequestParams["SlaveVip"] = $param["SlaveVip"];
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