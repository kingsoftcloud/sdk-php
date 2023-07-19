<?php
namespace  Ksyun\Client\Monitor\V20210101\Models;

use Ksyun\Common\BaseModel;

class GetUserGroupRequest extends BaseModel
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