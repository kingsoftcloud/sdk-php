<?php
namespace  Ksyun\Client\Bill_union\V20211209\Models;

use Ksyun\Common\BaseModel;

class DescribeCostBillRequest extends BaseModel
{
    public $RequestParams = [
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
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