<?php
namespace  Ksyun\Client\Bws\V20160304\Models;

use Ksyun\Common\BaseModel;

class AssociateBandWidthShareRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "BandWidthShareId" => null,
         /**String**/
        "AllocationId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("BandWidthShareId",$param) and $param["BandWidthShareId"] !== null) {
            if(is_bool($param["BandWidthShareId"])){
                $this->RequestParams["BandWidthShareId"] = $param["BandWidthShareId"] ? "true" : "false";
            } else {
                $this->RequestParams["BandWidthShareId"] = $param["BandWidthShareId"];
            }
        }
        if (array_key_exists("AllocationId",$param) and $param["AllocationId"] !== null) {
            if(is_bool($param["AllocationId"])){
                $this->RequestParams["AllocationId"] = $param["AllocationId"] ? "true" : "false";
            } else {
                $this->RequestParams["AllocationId"] = $param["AllocationId"];
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