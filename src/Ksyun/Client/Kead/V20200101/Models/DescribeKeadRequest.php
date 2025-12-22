<?php
namespace  Ksyun\Client\Kead\V20200101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeKeadRequest extends BaseModel
{
    public $RequestParams = [
    ];

     /**特殊参数类型:Filter**/
    public $KeadId = [];
      /**特殊参数类型:Filter**/
    public $ProjectId = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("KeadId",$param) and $param["KeadId"] !== null) {
            $res = $this->formatFilterParams("KeadId",$param["KeadId"]);
            $this->_unserialize("KeadId",$res);
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $res = $this->formatFilterParams("ProjectId",$param["ProjectId"]);
            $this->_unserialize("ProjectId",$res);
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