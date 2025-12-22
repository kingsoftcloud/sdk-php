<?php
namespace  Ksyun\Client\Ked\V1\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UserslistRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "size" => null,
         /**Int**/
        "page" => null,
         /**String**/
        "username" => null,
         /**String**/
        "phone" => null,
         /**String**/
        "email" => null,
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
        if (array_key_exists("size",$param) and $param["size"] !== null) {
            if(is_bool($param["size"])){
                $this->RequestParams["size"] = $param["size"] ? "true" : "false";
            } else {
                $this->RequestParams["size"] = $param["size"];
            }
        }
        if (array_key_exists("page",$param) and $param["page"] !== null) {
            if(is_bool($param["page"])){
                $this->RequestParams["page"] = $param["page"] ? "true" : "false";
            } else {
                $this->RequestParams["page"] = $param["page"];
            }
        }
        if (array_key_exists("username",$param) and $param["username"] !== null) {
            if(is_bool($param["username"])){
                $this->RequestParams["username"] = $param["username"] ? "true" : "false";
            } else {
                $this->RequestParams["username"] = $param["username"];
            }
        }
        if (array_key_exists("phone",$param) and $param["phone"] !== null) {
            if(is_bool($param["phone"])){
                $this->RequestParams["phone"] = $param["phone"] ? "true" : "false";
            } else {
                $this->RequestParams["phone"] = $param["phone"];
            }
        }
        if (array_key_exists("email",$param) and $param["email"] !== null) {
            if(is_bool($param["email"])){
                $this->RequestParams["email"] = $param["email"] ? "true" : "false";
            } else {
                $this->RequestParams["email"] = $param["email"];
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