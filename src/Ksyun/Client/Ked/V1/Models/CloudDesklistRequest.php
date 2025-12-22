<?php
namespace  Ksyun\Client\Ked\V1\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CloudDesklistRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "page" => null,
         /**Int**/
        "size" => null,
         /**String**/
        "connected" => null,
         /**String**/
        "labelIds" => null,
         /**String**/
        "name" => null,
         /**String**/
        "userName" => null,
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
        if (array_key_exists("page",$param) and $param["page"] !== null) {
            if(is_bool($param["page"])){
                $this->RequestParams["page"] = $param["page"] ? "true" : "false";
            } else {
                $this->RequestParams["page"] = $param["page"];
            }
        }
        if (array_key_exists("size",$param) and $param["size"] !== null) {
            if(is_bool($param["size"])){
                $this->RequestParams["size"] = $param["size"] ? "true" : "false";
            } else {
                $this->RequestParams["size"] = $param["size"];
            }
        }
        if (array_key_exists("connected",$param) and $param["connected"] !== null) {
            if(is_bool($param["connected"])){
                $this->RequestParams["connected"] = $param["connected"] ? "true" : "false";
            } else {
                $this->RequestParams["connected"] = $param["connected"];
            }
        }
        if (array_key_exists("labelIds",$param) and $param["labelIds"] !== null) {
            if(is_bool($param["labelIds"])){
                $this->RequestParams["labelIds"] = $param["labelIds"] ? "true" : "false";
            } else {
                $this->RequestParams["labelIds"] = $param["labelIds"];
            }
        }
        if (array_key_exists("name",$param) and $param["name"] !== null) {
            if(is_bool($param["name"])){
                $this->RequestParams["name"] = $param["name"] ? "true" : "false";
            } else {
                $this->RequestParams["name"] = $param["name"];
            }
        }
        if (array_key_exists("userName",$param) and $param["userName"] !== null) {
            if(is_bool($param["userName"])){
                $this->RequestParams["userName"] = $param["userName"] ? "true" : "false";
            } else {
                $this->RequestParams["userName"] = $param["userName"];
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