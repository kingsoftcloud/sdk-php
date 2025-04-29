<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeFileSystemsResponse extends BaseModel
{
    /** **/
    public $RequestId;

    /** **/
    public $Marker;

    /** **/
    public $FileSystemCount;

    /**Object **/
    public $FileSystems;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
        if (array_key_exists("Marker", $param) and $param["Marker"] !== null) {
            $this->Marker = $param["Marker"];
        }
        if (array_key_exists("FileSystemCount", $param) and $param["FileSystemCount"] !== null) {
            $this->FileSystemCount = $param["FileSystemCount"];
        }
        if (array_key_exists("FileSystems", $param) and $param["FileSystems"] !== null) {
            $this->FileSystems = $param["FileSystems"];
        }

    }
}