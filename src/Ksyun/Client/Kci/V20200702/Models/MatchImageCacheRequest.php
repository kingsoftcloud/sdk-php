<?php
namespace  Ksyun\Client\Kci\V20200702\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class MatchImageCacheRequest extends BaseModel
{
    public $RequestParams = [
    ];

     /**特殊参数类型:Filter**/
    public $Image = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $res = $this->formatFilterParams("Image",$param["Image"]);
            $this->_unserialize("Image",$res);
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