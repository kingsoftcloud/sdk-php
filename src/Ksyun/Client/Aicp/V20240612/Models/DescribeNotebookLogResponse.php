<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DescribeNotebookLogResponse extends BaseModel
{
         /** 1003bfdc-7d41-473f-8824-a21b0128240a**/
         public  $RequestId;

         /** [I 2025-05-26 03:25:25.113 ServerApp] jupyter_server_terminals | extension was successfully linked.
[W 2025-05-26 03:25:25.114 LabApp] 'token' has moved from NotebookApp to ServerApp. This config will be passed to ServerApp. Be sure to update your config before our next release.
[W 2025-05-26 03:25:25.114 LabApp] 'allow_origin' has moved from NotebookApp to ServerApp. This config will be passed to ServerApp. Be sure to update your config before our next release.
[W 2025-05-26 03:25:25.114 LabApp] 'base_url' has moved from NotebookApp to ServerApp. This config will be passed to ServerApp. Be sure to update your config before our next release.
[W 2025-05-26 03:25:25.117 ServerApp] ServerApp.token config is deprecated in 2.0. Use IdentityProvider.token.
[I 2025-05-26 03:25:25.117 ServerApp] jupyterlab | extension was successfully linked.
[I 2025-05-26 03:25:25.118 ServerApp] Writing Jupyter server cookie secret to /root/.local/share/jupyter/runtime/jupyter_cookie_secret
[2025-05-26T03:25:25.119Z] info  Wrote default config file to /kaic/webide/config.yaml
[I 2025-05-26 03:25:25.321 ServerApp] notebook_shim | extension was successfully linked.
[W 2025-05-26 03:25:25.338 ServerApp] All authentication is disabled.  Anyone who can connect to this server will be able to run code.
[I 2025-05-26 03:25:25.339 ServerApp] notebook_shim | extension was successfully loaded.
[I 2025-05-26 03:25:25.341 ServerApp] jupyter_lsp | extension was successfully loaded.
[I 2025-05-26 03:25:25.342 ServerApp] jupyter_server_terminals | extension was successfully loaded.
[I 2025-05-26 03:25:25.343 LabApp] JupyterLab extension loaded from /kaic/webide/python-dir/Python-3.13.2-env/lib/python3.13/site-packages/jupyterlab
[I 2025-05-26 03:25:25.343 LabApp] JupyterLab application directory is /kaic/webide/python-dir/Python-3.13.2-env/share/jupyter/lab
[I 2025-05-26 03:25:25.344 LabApp] Extension Manager is 'pypi'.
[I 2025-05-26 03:25:25.373 ServerApp] jupyterlab | extension was successfully loaded.
[I 2025-05-26 03:25:25.374 ServerApp] Serving notebooks from local directory: /home/jovyan
[I 2025-05-26 03:25:25.374 ServerApp] Jupyter Server 2.15.0 is running at:
[I 2025-05-26 03:25:25.374 ServerApp] http://kaic-dcd03aae-b0e8-4b06-8e73-02e8ff36f194-0:8889/webide-proxy/jupyter/9bf8da7e-653b-40da-82de-44f0a915089c/kaic-dcd03aae-b0e8-4b06-8e73-02e8ff36f194/lab
[I 2025-05-26 03:25:25.374 ServerApp]     http://127.0.0.1:8889/webide-proxy/jupyter/9bf8da7e-653b-40da-82de-44f0a915089c/kaic-dcd03aae-b0e8-4b06-8e73-02e8ff36f194/lab
[I 2025-05-26 03:25:25.374 ServerApp] Use Control-C to stop this server and shut down all kernels (twice to skip confirmation).
[I 2025-05-26 03:25:25.391 ServerApp] Skipped non-installed server(s): bash-language-server, dockerfile-language-server-nodejs, javascript-typescript-langserver, jedi-language-server, julia-language-server, pyright, python-language-server, python-lsp-server, r-languageserver, sql-language-server, texlab, typescript-language-server, unified-language-server, vscode-css-languageserver-bin, vscode-html-languageserver-bin, vscode-json-languageserver-bin, yaml-language-server
[2025-05-26T03:25:25.444Z] info  code-server 4.16.1 94ef3776ad7bebfb5780dfc9632e04d20d5c9a6c
[2025-05-26T03:25:25.445Z] info  Using user-data-dir /kaic/webide/user-data
[2025-05-26T03:25:25.462Z] info  Using config file /kaic/webide/config.yaml
[2025-05-26T03:25:25.462Z] info  HTTP server listening on http://0.0.0.0:8888/
[2025-05-26T03:25:25.462Z] info    - Authentication is disabled
[2025-05-26T03:25:25.462Z] info    - Not serving HTTPS
[2025-05-26T03:25:25.462Z] info  Session server listening on /kaic/webide/user-data/code-server-ipc.sock
**/
         public  $PodLogs;

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
            if (array_key_exists("PodLogs",$param) and $param["PodLogs"] !== null) {
                $this->PodLogs = $param["PodLogs"];
            }

        }
}