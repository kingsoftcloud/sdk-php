<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class GetWebIdeUrlResponse extends BaseModel
{
         /** Jupyter连接地址**/
         public  $JupyterWebUrl;

         /** Vscode连接地址**/
         public  $VscodeWebUrl;

         /** 开发任务ID**/
         public  $NotebookId;

         /** 请求ID**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("JupyterWebUrl",$param) and $param["JupyterWebUrl"] !== null) {
                $this->JupyterWebUrl = $param["JupyterWebUrl"];
            }
            if (array_key_exists("VscodeWebUrl",$param) and $param["VscodeWebUrl"] !== null) {
                $this->VscodeWebUrl = $param["VscodeWebUrl"];
            }
            if (array_key_exists("NotebookId",$param) and $param["NotebookId"] !== null) {
                $this->NotebookId = $param["NotebookId"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}