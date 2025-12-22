<?php
namespace  Ksyun\Client\Knad\V20230323\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeKnadRequest extends BaseModel
{
    public $RequestParams = [
    ];

     /**特殊参数类型:Filter**/
    public $ProjectId = [];
      /**特殊参数类型:Filter**/
    public $KnadId = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $res = $this->formatFilterParams("ProjectId",$param["ProjectId"]);
            $this->_unserialize("ProjectId",$res);
        }
        if (array_key_exists("KnadId",$param) and $param["KnadId"] !== null) {
            $res = $this->formatFilterParams("KnadId",$param["KnadId"]);
            $this->_unserialize("KnadId",$res);
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