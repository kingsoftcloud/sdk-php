<?php
namespace  Ksyun\Client\Kce\V20180314\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdateRepoDescRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "RepoName" => null,
         /**String**/
        "Description" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            if(is_bool($param["RepoName"])){
                $this->RequestParams["RepoName"] = $param["RepoName"] ? "true" : "false";
            } else {
                $this->RequestParams["RepoName"] = $param["RepoName"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
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