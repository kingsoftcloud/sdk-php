<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class GetMcpSquareDetailResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /**Object MCP服务详情**/
         public  $McpServer;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("McpServer",$param) and $param["McpServer"] !== null) {
                $this->McpServer = $param["McpServer"];
            }

        }
}