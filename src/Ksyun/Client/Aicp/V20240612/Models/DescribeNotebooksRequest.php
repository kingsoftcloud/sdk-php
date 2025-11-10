<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeNotebooksRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Name" => null,
         /**Int**/
        "Marker" => null,
         /**Int**/
        "MaxResults" => null,
         /**String**/
        "State" => null,
         /**String**/
        "QueueId" => null,
    ];

     /**特殊参数类型:Filter**/
    public $NotebookId = [];
      /**特殊参数类型:Filter**/
    public $Filter = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("NotebookId",$param) and $param["NotebookId"] !== null) {
            $res = $this->formatFilterParams("NotebookId",$param["NotebookId"]);
            $this->_unserialize("NotebookId",$res);
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            if(is_bool($param["Name"])){
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            if(is_bool($param["Marker"])){
                $this->RequestParams["Marker"] = $param["Marker"] ? "true" : "false";
            } else {
                $this->RequestParams["Marker"] = $param["Marker"];
            }
        }
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            if(is_bool($param["MaxResults"])){
                $this->RequestParams["MaxResults"] = $param["MaxResults"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxResults"] = $param["MaxResults"];
            }
        }
        if (array_key_exists("State",$param) and $param["State"] !== null) {
            if(is_bool($param["State"])){
                $this->RequestParams["State"] = $param["State"] ? "true" : "false";
            } else {
                $this->RequestParams["State"] = $param["State"];
            }
        }
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $res = $this->formatFilterParams("Filter",$param["Filter"]);
            $this->_unserialize("Filter",$res);
        }
        if (array_key_exists("QueueId",$param) and $param["QueueId"] !== null) {
            if(is_bool($param["QueueId"])){
                $this->RequestParams["QueueId"] = $param["QueueId"] ? "true" : "false";
            } else {
                $this->RequestParams["QueueId"] = $param["QueueId"];
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