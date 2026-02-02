<?php
namespace  Ksyun\Client\Cdn\V20200630\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetTopReferDataRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "StartTime" => null,
         /**String**/
        "EndTime" => null,
         /**String**/
        "CdnType" => null,
         /**String**/
        "Domains" => null,
         /**String**/
        "LimitN" => null,
         /**String**/
        "SortBy" => null,
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            if(is_bool($param["StartTime"])){
                $this->RequestParams["StartTime"] = $param["StartTime"] ? "true" : "false";
            } else {
                $this->RequestParams["StartTime"] = $param["StartTime"];
            }
        }
        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            if(is_bool($param["EndTime"])){
                $this->RequestParams["EndTime"] = $param["EndTime"] ? "true" : "false";
            } else {
                $this->RequestParams["EndTime"] = $param["EndTime"];
            }
        }
        if (array_key_exists("CdnType",$param) and $param["CdnType"] !== null) {
            if(is_bool($param["CdnType"])){
                $this->RequestParams["CdnType"] = $param["CdnType"] ? "true" : "false";
            } else {
                $this->RequestParams["CdnType"] = $param["CdnType"];
            }
        }
        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            if(is_bool($param["Domains"])){
                $this->RequestParams["Domains"] = $param["Domains"] ? "true" : "false";
            } else {
                $this->RequestParams["Domains"] = $param["Domains"];
            }
        }
        if (array_key_exists("LimitN",$param) and $param["LimitN"] !== null) {
            if(is_bool($param["LimitN"])){
                $this->RequestParams["LimitN"] = $param["LimitN"] ? "true" : "false";
            } else {
                $this->RequestParams["LimitN"] = $param["LimitN"];
            }
        }
        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            if(is_bool($param["SortBy"])){
                $this->RequestParams["SortBy"] = $param["SortBy"] ? "true" : "false";
            } else {
                $this->RequestParams["SortBy"] = $param["SortBy"];
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
}��对象
     * @throws RuntimeException 如果请求失败
     */
    public GetTopReferDataResponse doPostSend(String path, GetTopReferDataRequest requestObj,
                                         UrlPathParams urlPathParams,
                                         Map<String, String> customHeaders) throws RuntimeException {
        Map<String, String> head = new HashMap<>();
        head.put("Content-Type", "application/x-www-form-urlencoded");
        if (customHeaders != null && !customHeaders.isEmpty()) {
            head.putAll(customHeaders);
        }
        return doPostSend(path, requestObj, head, urlPathParams);
    }

    /**
     * post 请求 - Send 方法
     * 在底层调用 WithContextV2，自动处理状态码检查和响应解析
     *
     * @param path 请求路径
     * @param requestObj 请求对象
     * @param head 请求头
     * @return GetTopReferDataResponse 响应对象
     * @throws RuntimeException 如果请求失败
     */
    public GetTopReferDataResponse doPostSend(String path, GetTopReferDataRequest requestObj, Map<String, String> head) throws RuntimeException {
        return executeWithV2("post", path, requestObj, head, null);
    }

    /**
     * post 请求 - Send 方法（完整版，支持 URL 路径参数）
     * 在底层调用 WithContextV2，自动处理状态码检查和响应解析
     *
     * @param path 请求路径
     * @param requestObj 请求对象
     * @param head 请求头（包含自定义 Header）
     * @param urlPathParams URL 路径参数（AccountId、UserId、RoleId）
     * @return GetTopReferDataResponse 响应对象
     * @throws RuntimeException 如果请求失败
     */
    public GetTopReferDataResponse doPostSend(String path, GetTopReferDataRequest requestObj, Map<String, String> head,
                                         UrlPathParams urlPathParams) throws RuntimeException {
        return executeWithV2("post", path, requestObj, head, urlPathParams);
    }

    /**
     * get 请求 - Send 方法
     * 在底层调用 WithContextV2，自动处理状态码检查和响应解析
     *
     * @param path 请求路径
     * @param requestObj 请求对象
     * @return GetTopReferDataResponse 响应对象
     * @throws RuntimeException 如果请求失败
     */
    public GetTopReferDataResponse doGetSend(String path, GetTopReferDataRequest requestObj) throws RuntimeException {
        Map<String, String> head = new HashMap<>();
        head.put("Content-Type", "application/x-www-form-urlencoded");
        return doGetSend(path, requestObj, head);
    }

    /**
     * get 请求 - Send 方法
     * 在底层调用 WithContextV2，自动处理状态码检查和响应解析
     *
     * @param path 请求路径
     * @param requestObj 请求对象
     * @param head 请求头
     * @return GetTopReferDataResponse 响应对象
     * @throws RuntimeException 如果请求失败
     */
    public GetTopReferDataResponse doGetSend(String path, GetTopReferDataRequest requestObj, Map<String, String> head) throws RuntimeException {
        return executeWithV2("get", path, requestObj, head, null);
    }

    /**
     * get 请求 - Send 方法（支持 URL 路径参数和自定义 Header）
     * 在底层调用 WithContextV2，自动处理状态码检查和响应解析
     *
     * @param path 请求路径
     * @param requestObj 请求对象
     * @param urlPathParams URL 路径参数（AccountId、UserId、RoleId）
     * @param customHeaders 自定义 HTTP Header
     * @return GetTopReferDataResponse 响应对象
     * @throws RuntimeException 如果请求失败
     */
    public GetTopReferDataResponse doGetSend(String path, GetTopReferDataRequest requestObj,
                                        UrlPathParams urlPathParams,
                                        Map<String, String> customHeaders) throws RuntimeException {
        Map<String, String> head = new HashMap<>();
        head.put("Content-Type", "application/x-www-form-urlencoded");
        if (customHeaders != null && !customHeaders.isEmpty()) {
            head.putAll(customHeaders);
        }
        return executeWithV2("get", path, requestObj, head, urlPathParams);
    }

    /**
     * put 请求 - Send 方法
     * 在底层调用 WithContextV2，自动处理状态码检查和响应解析
     *
     * @param path 请求路径
     * @param requestObj 请求对象
     * @return GetTopReferDataResponse 响应对象
     * @throws RuntimeException 如果请求失败
     */
    public GetTopReferDataResponse doPutSend(String path, GetTopReferDataRequest requestObj) throws RuntimeException {
        Map<String, String> head = new HashMap<>();
        head.put("Content-Type", "application/x-www-form-urlencoded");
        return doPutSend(path, requestObj, head);
    }

    /**
     * put 请求 - Send 方法
     * 在底层调用 WithContextV2，自动处理状态码检查和响应解析
     *
     * @param path 请求路径
     * @param requestObj 请求对象
     * @param head 请求头
     * @return GetTopReferDataResponse 响应对象
     * @throws RuntimeException 如果请求失败
     */
    public GetTopReferDataResponse doPutSend(String path, GetTopReferDataRequest requestObj, Map<String, String> head) throws RuntimeException {
        return executeWithV2("put", path, requestObj, head, null);
    }

    /**
     * put 请求 - Send 方法（支持 URL 路径参数和自定义 Header）
     * 在底层调用 WithContextV2，自动处理状态码检查和响应解析
     *
     * @param path 请求路径
     * @param requestObj 请求对象
     * @param urlPathParams URL 路径参数（AccountId、UserId、RoleId）
     * @param customHeaders 自定义 HTTP Header
     * @return GetTopReferDataResponse 响应对象
     * @throws RuntimeException 如果请求失败
     */
    public GetTopReferDataResponse doPutSend(String path, GetTopReferDataRequest requestObj,
                                        UrlPathParams urlPathParams,
                                        Map<String, String> customHeaders) throws RuntimeException {
        Map<String, String> head = new HashMap<>();
        head.put("Content-Type", "application/x-www-form-urlencoded");
        if (customHeaders != null && !customHeaders.isEmpty()) {
            head.putAll(customHeaders);
        }
        return executeWithV2("put", path, requestObj, head, urlPathParams);
    }

    /**
     * delete 请求 - Send 方法
     * 在底层调用 WithContextV2，自动处理状态码检查和响应解析
     *
     * @param path 请求路径
     * @param requestObj 请求对象
     * @return GetTopReferDataResponse 响应对象
     * @throws RuntimeException 如果请求失败
     */
    public GetTopReferDataResponse doDeleteSend(String path, GetTopReferDataRequest requestObj) throws RuntimeException {
        Map<String, String> head = new HashMap<>();
        head.put("Content-Type", "application/x-www-form-urlencoded");
        return doDeleteSend(path, requestObj, head);
    }

    /**
     * delete 请求 - Send 方法
     * 在底层调用 WithContextV2，自动处理状态码检查和响应解析
     *
     * @param path 请求路径
     * @param requestObj 请求对象
     * @param head 请求头
     * @return GetTopReferDataResponse 响应对象
     * @throws RuntimeException 如果请求失败
     */
    public GetTopReferDataResponse doDeleteSend(String path, GetTopReferDataRequest requestObj, Map<String, String> head) throws RuntimeException {
        return executeWithV2("delete", path, requestObj, head, null);
    }

    /**
     * delete 请求 - Send 方法（支持 URL 路径参数和自定义 Header）
     * 在底层调用 WithContextV2，自动处理状态码检查和响应解析
     *
     * @param path 请求路径
     * @param requestObj 请求对象
     * @param urlPathParams URL 路径参数（AccountId、UserId、RoleId）
     * @param customHeaders 自定义 HTTP Header
     * @return GetTopReferDataResponse 响应对象
     * @throws RuntimeException 如果请求失败
     */
    public GetTopReferDataResponse doDeleteSend(String path, GetTopReferDataRequest requestObj,
                                           UrlPathParams urlPathParams,
                                           Map<String, String> customHeaders) throws RuntimeException {
        Map<String, String> head = new HashMap<>();
        head.put("Content-Type", "application/x-www-form-urlencoded");
        if (customHeaders != null && !customHeaders.isEmpty()) {
            head.putAll(customHeaders);
        }
        return executeWithV2("delete", path, requestObj, head, urlPathParams);
    }

    /**
     * 通用的 V2 执行方法 - 处理状态码检查和响应解析
     * 被所有 Send 方法调用
     *
     * @param method HTTP 方法
     * @param path 请求路径
     * @param requestObj 请求对象
     * @param head 请求头
     * @param urlPathParams URL 路径参数（AccountId、UserId、RoleId）
     * @return GetTopReferDataResponse 响应对象
     * @throws RuntimeException 如果请求失败
     */
    private GetTopReferDataResponse executeWithV2(String method, String path, GetTopReferDataRequest requestObj,
                                             Map<String, String> head, UrlPathParams urlPathParams) throws RuntimeException {
        final Map<String, String> requestHeaders = head != null ? new HashMap<>(head) : new HashMap<>();
        requestHeaders.putIfAbsent("Content-Type", "application/x-www-form-urlencoded");

        // 调用底层 V2 方法获取完整响应
        HttpResponseWrapper wrapper = doRpcV2(path, requestObj, requestHeaders, method, urlPathParams);

        // 1. 检查是否有异常
        if (wrapper.hasException()) {
            throw new RuntimeException(
                String.format("[KsyunSDKError] [HttpCode:0 Err:%s] Request failed",
                    wrapper.getException().getMessage()),
                wrapper.getException()
            );
        }

        int statusCode = wrapper.getStatusCode();
        String message = wrapper.getMessage();

        // 2. 检查 HTTP 状态码(200-299 为成功)
        if (statusCode < 200 || statusCode > 299) {
            throw new RuntimeException(
                String.format("[KsyunSDKError] [HttpCode:%d Err:Request failed] %s",
                    statusCode, message)
            );
        }

        // 3. 检查响应是否为空
        if (message == null || message.isEmpty()) {
            return null;
        }

        // 4. 解析 JSON 响应
        try {
            return JSON.parseObject(message, GetTopReferDataResponse.class);
        } catch (Exception e) {
            throw new RuntimeException(
                String.format("[KsyunSDKError] [HttpCode:%d Err:%s] %s",
                    statusCode, e.getMessage(), message),
                e
            );
        }
    }

    /**
     * post 请求 - WithContextV2 方法
     * 返回包含 HTTP 状态码的完整响应
     *
     * 注意：大多数情况下应该使用 doPostSend() 方法，它会自动处理错误
     * 只有在需要手动处理 HTTP 状态码时才使用此方法
     *
     * @param path 请求路径
     * @param requestObj 请求对象
     * @return HttpResponseWrapper 包含状态码和原始响应消息
     */
    public HttpResponseWrapper doPostWithContextV2(String path, GetTopReferDataRequest requestObj) {
        Map<String, String> head = new HashMap<>();
        head.put("Content-Type", "application/x-www-form-urlencoded");
        return doPostWithContextV2(path, requestObj, head);
    }

    /**
     * post 请求 - WithContextV2 方法
     * 返回包含 HTTP 状态码的完整响应
     *
     * 注意：大多数情况下应该使用 doPostSend() 方法，它会自动处理错误
     * 只有在需要手动处理 HTTP 状态码时才使用此方法
     *
     * @param path 请求路径
     * @param requestObj 请求对象
     * @param head 请求头
     * @return HttpResponseWrapper 包含状态码和原始响应消息
     */
    public HttpResponseWrapper doPostWithContextV2(String path, GetTopReferDataRequest requestObj, Map<String, String> head) {
        final Map<String, String> requestHeaders = head != null ? new HashMap<>(head) : new HashMap<>();
        requestHeaders.putIfAbsent("Content-Type", "application/x-www-form-urlencoded");
        return doRpcV2(path, requestObj, requestHeaders, "post", null);
    }

    /**
     * get 请求 - WithContextV2 方法
     * 返回包含 HTTP 状态码的完整响应
     *
     * 注意：大多数情况下应该使用 doGetSend() 方法，它会自动处理错误
     * 只有在需要手动处理 HTTP 状态码时才使用此方法
     *
     * @param path 请求路径
     * @param requestObj 请求对象
     * @return HttpResponseWrapper 包含状态码和原始响应消息
     */
    public HttpResponseWrapper doGetWithContextV2(String path, GetTopReferDataRequest requestObj) {
        Map<String, String> head = new HashMap<>();
        head.put("Content-Type", "application/x-www-form-urlencoded");
        return doGetWithContextV2(path, requestObj, head);
    }

    /**
     * get 请求 - WithContextV2 方法
     * 返回包含 HTTP 状态码的完整响应
     *
     * 注意：大多数情况下应该使用 doGetSend() 方法，它会自动处理错误
     * 只有在需要手动处理 HTTP 状态码时才使用此方法
     *
     * @param path 请求路径
     * @param requestObj 请求对象
     * @param head 请求头
     * @return HttpResponseWrapper 包含状态码和原始响应消息
     */
    public HttpResponseWrapper doGetWithContextV2(String path, GetTopReferDataRequest requestObj, Map<String, String> head) {
        final Map<String, String> requestHeaders = head != null ? new HashMap<>(head) : new HashMap<>();
        requestHeaders.putIfAbsent("Content-Type", "application/x-www-form-urlencoded");
        return doRpcV2(path, requestObj, requestHeaders, "get", null);
    }

    /**
     * put 请求 - WithContextV2 方法
     * 返回包含 HTTP 状态码的完整响应
     *
     * 注意：大多数情况下应该使用 doPutSend() 方法，它会自动处理错误
     * 只有在需要手动处理 HTTP 状态码时才使用此方法
     *
     * @param path 请求路径
     * @param requestObj 请求对象
     * @return HttpResponseWrapper 包含状态码和原始响应消息
     */
    public HttpResponseWrapper doPutWithContextV2(String path, GetTopReferDataRequest requestObj) {
        Map<String, String> head = new HashMap<>();
        head.put("Content-Type", "application/x-www-form-urlencoded");
        return doPutWithContextV2(path, requestObj, head);
    }

    /**
     * put 请求 - WithContextV2 方法
     * 返回包含 HTTP 状态码的完整响应
     *
     * 注意：大多数情况下应该使用 doPutSend() 方法，它会自动处理错误
     * 只有在需要手动处理 HTTP 状态码时才使用此方法
     *
     * @param path 请求路径
     * @param requestObj 请求对象
     * @param head 请求头
     * @return HttpResponseWrapper 包含状态码和原始响应消息
     */
    public HttpResponseWrapper doPutWithContextV2(String path, GetTopReferDataRequest requestObj, Map<String, String> head) {
        final Map<String, String> requestHeaders = head != null ? new HashMap<>(head) : new HashMap<>();
        requestHeaders.putIfAbsent("Content-Type", "application/x-www-form-urlencoded");
        return doRpcV2(path, requestObj, requestHeaders, "put", null);
    }

    /**
     * delete 请求 - WithContextV2 方法
     * 返回包含 HTTP 状态码的完整响应
     *
     * 注意：大多数情况下应该使用 doDeleteSend() 方法，它会自动处理错误
     * 只有在需要手动处理 HTTP 状态码时才使用此方法
     *
     * @param path 请求路径
     * @param requestObj 请求对象
     * @return HttpResponseWrapper 包含状态码和原始响应消息
     */
    public HttpResponseWrapper doDeleteWithContextV2(String path, GetTopReferDataRequest requestObj) {
        Map<String, String> head = new HashMap<>();
        head.put("Content-Type", "application/x-www-form-urlencoded");
        return doDeleteWithContextV2(path, requestObj, head);
    }

    /**
     * delete 请求 - WithContextV2 方法
     * 返回包含 HTTP 状态码的完整响应
     *
     * 注意：大多数情况下应该使用 doDeleteSend() 方法，它会自动处理错误
     * 只有在需要手动处理 HTTP 状态码时才使用此方法
     *
     * @param path 请求路径
     * @param requestObj 请求对象
     * @param head 请求头
     * @return HttpResponseWrapper 包含状态码和原始响应消息
     */
    public HttpResponseWrapper doDeleteWithContextV2(String path, GetTopReferDataRequest requestObj, Map<String, String> head) {
        final Map<String, String> requestHeaders = head != null ? new HashMap<>(head) : new HashMap<>();
        requestHeaders.putIfAbsent("Content-Type", "application/x-www-form-urlencoded");
        return doRpcV2(path, requestObj, requestHeaders, "delete", null);
    }

    /**
     * post请求
     *
     * @param path
     * @param requestObj
     * @return
     * @throws Exception
     */
    public GetTopReferDataResponse doPost(String path, GetTopReferDataRequest requestObj) throws Exception {
        Map<String, String> head = new HashMap<>();
        head.put("Content-Type", "application/x-www-form-urlencoded");
        return doPost(path, requestObj, head);
    }

    /**
     * post请求
     *
     * @param path
     * @param requestObj
     * @param head
     * @return
     * @throws Exception
     */
    public GetTopReferDataResponse doPost(String path, GetTopReferDataRequest requestObj, Map<String, String> head) throws Exception {
        final Map<String, String> requestHeaders = head != null ? new HashMap<>(head) : new HashMap<>();
        requestHeaders.putIfAbsent("Content-Type", "application/x-www-form-urlencoded");
        String response = doRpc(path, requestObj, requestHeaders, "post");
        return JSON.parseObject(response, GetTopReferDataResponse.class);
    }

    /**
    * post 请求
    * @param path
    * @param requestObj
    * @return
    * @throws Exception
    */
    public GetTopReferDataResponse doPostRaw(String path, GetTopReferDataRequest requestObj) throws Exception {
        Map<String, String> head = new HashMap<>();
        head.put("Content-Type", "application/x-www-form-urlencoded");
        return doPostRaw(path, requestObj, head);
    }

    /**
    * post 请求
    *
    * @param path
    * @param requestObj
    * @return
    * @throws Exception
    */
    public GetTopReferDataResponse doPostRaw(String path, GetTopReferDataRequest requestObj, Map<String, String> head) throws Exception {
        final Map<String, String> requestHeaders = head != null ? new HashMap<>(head) : new HashMap<>();
        requestHeaders.putIfAbsent("Content-Type", "application/x-www-form-urlencoded");
        String response = doRpc(path, requestObj, requestHeaders, "post");
        return JSON.parseObject(response, GetTopReferDataResponse.class);
    }
    /**
     * get 请求
     *
     * @param path
     * @param requestObj
     * @return
     * @throws Exception
     */
    public GetTopReferDataResponse doGet(String path, GetTopReferDataRequest requestObj) throws Exception {
        Map<String, String> head = new HashMap<>();
        head.putIfAbsent("Content-Type", "application/x-www-form-urlencoded");
        return doGet(path, requestObj, head);
    }

        /**
         * get 请求
         *
         * @param path
         * @param requestObj
         * @param head
         * @return
         * @throws Exception
         */
        public GetTopReferDataResponse doGet(String path, GetTopReferDataRequest requestObj, Map<String, String> head) throws Exception {
            final Map<String, String> requestHeaders = head != null ? new HashMap<>(head) : new HashMap<>();
            requestHeaders.putIfAbsent("Content-Type", "application/x-www-form-urlencoded");
            String response = doRpc(path, requestObj, requestHeaders, "get");
            return JSON.parseObject(response, GetTopReferDataResponse.class);
        }

    /**
     * doDelete 请求
     *
     * @param path
     * @param requestObj
     * @return
     * @throws Exception
     */
    public GetTopReferDataResponse doDelete(String path, GetTopReferDataRequest requestObj) throws Exception {
        Map<String, String> head = new HashMap<>();
        head.put("Content-Type", "application/x-www-form-urlencoded");
        return doDelete(path, requestObj, head);
    }

    /**
     * doDelete 请求
     *
     * @param path
     * @param requestObj
     * @param head
     * @return
     * @throws Exception
     */
    public GetTopReferDataResponse doDelete(String path, GetTopReferDataRequest requestObj, Map<String, String> head) throws Exception {
        final Map<String, String> requestHeaders = head != null ? new HashMap<>(head) : new HashMap<>();
        requestHeaders.putIfAbsent("Content-Type", "application/x-www-form-urlencoded");
        String response = doRpc(path, requestObj, requestHeaders, "delete");
        return JSON.parseObject(response, GetTopReferDataResponse.class);
    }


    /**
     * doPut 请求
     *
     * @param path
     * @param requestObj
     * @return
     * @throws Exception
     */
    public GetTopReferDataResponse doPut(String path, GetTopReferDataRequest requestObj) throws Exception {
        Map<String, String> head = new HashMap<>();
        head.putIfAbsent("Content-Type", "application/x-www-form-urlencoded");
        return doPut(path, requestObj, head);
    }

    /**
     * doPut 请求
     *
     * @param path
     * @param requestObj
     * @param head
     * @return
     * @throws Exception
     */
    public GetTopReferDataResponse doPut(String path, GetTopReferDataRequest requestObj, Map<String, String> head) throws Exception {
        final Map<String, String> requestHeaders = head != null ? new HashMap<>(head) : new HashMap<>();
       requestHeaders.putIfAbsent("Content-Type", "application/x-www-form-urlencoded");
        String response = doRpc(path, requestObj, requestHeaders, "put");
        return JSON.parseObject(response, GetTopReferDataResponse.class);
    }

    /**
         * rpc
         *
         * @param path
         * @param requestObj
         * @param head
         * @return
         * @throws Exception
         */
        private String doRpc(String path, GetTopReferDataRequest requestObj, Map<String, String> head, String requestMethod) throws Exception {
            //断言
            Objects.requireNonNull(path, "path cannot be null");
            Objects.requireNonNull(requestObj, "requestObj cannot be null");
            Objects.requireNonNull(requestMethod, "requestMethod cannot be null");
            Objects.requireNonNull(head, "head cannot be null");

            //请求上下文
            RpcRequestContentModel requestContentModel = RpcRequestContentModel.builder()
                    .action(action)
                    .version(version)
                    .service(service)
                    .region(credential.getRegion())
                    .accessKeyId(credential.getSecretKey())
                    .secretAccessKey(credential.getSignStr())
                    .build();

            // 根据内容类型设置请求体
            String contentType = head.getOrDefault("Content-Type", "application/x-www-form-urlencoded");
            JSONObject requestParam = getRequestParam(requestObj, contentType);

            //uri
            path = path + "?Action=" + action + "&Version=" + version;

            //发起请求
            String response = new RpcRequestClient(requestContentModel).beginRpcRequest(path, requestMethod, requestParam, head);
            log.info("doRpc end,path:{},params:{},head:{}", path, JSONObject.toJSON(requestParam), head);
            return response;

        }


        private JSONObject getRequestParam(GetTopReferDataRequest requestObj, String contentType) throws Exception {
            //请求参数
            if (contentType.equalsIgnoreCase("application/json")) {
                return getPostRawRequestParams(requestObj);
            }
            return getSimpleRequestParams(requestObj);
        }


        private JSONObject getSimpleRequestParams(GetTopReferDataRequest requestObj) throws Exception {
            JSONObject requestParams = new JSONObject();

            //设置请求体请求参数
            setRequestField(requestObj, requestParams);
            return requestParams;
        }

        private JSONObject getPostRawRequestParams(GetTopReferDataRequest requestObj) throws Exception {
            JSONObject requestParams = new JSONObject();

            //设置请求体请求参数
            setRequestFieldForPostRaw(requestObj, requestParams);
            return requestParams;
        }

    /**
     * rpc v2 - 返回包含 HTTP 状态码的完整响应
     *
     * @param path 请求路径
     * @param requestObj 请求对象
     * @param head 请求头
     * @param requestMethod HTTP 方法
     * @param urlPathParams URL 路径参数（AccountId、UserId、RoleId）
     * @return HttpResponseWrapper 包含状态码和原始响应消息
     */
    private HttpResponseWrapper doRpcV2(String path, GetTopReferDataRequest requestObj, Map<String, String> head,
                                        String requestMethod, UrlPathParams urlPathParams) {
        try {
            //断言
            Objects.requireNonNull(path, "path cannot be null");
            Objects.requireNonNull(requestObj, "requestObj cannot be null");
            Objects.requireNonNull(requestMethod, "requestMethod cannot be null");
            Objects.requireNonNull(head, "head cannot be null");

            //请求上下文
            RpcRequestContentModel requestContentModel = RpcRequestContentModel.builder()
                    .action(action)
                    .version(version)
                    .service(service)
                    .region(credential.getRegion())
                    .accessKeyId(credential.getSecretKey())
                    .secretAccessKey(credential.getSignStr())
                    .build();

            // 根据内容类型设置请求体
            String contentType = head.getOrDefault("Content-Type", "application/x-www-form-urlencoded");
            JSONObject requestParam = getRequestParam(requestObj, contentType);

            //uri - 基础参数
            path = path + "?Action=" + action + "&Version=" + version;

            // 添加 URL 路径参数（AccountId、UserId、RoleId）到 query string
            if (urlPathParams != null && urlPathParams.hasParams()) {
                if (urlPathParams.getAccountId() != null) {
                    path = path + "&AccountId=" + urlPathParams.getAccountId();
                    log.debug("Added AccountId to URL: {}", urlPathParams.getAccountId());
                }
                if (urlPathParams.getUserId() != null) {
                    path = path + "&UserId=" + urlPathParams.getUserId();
                    log.debug("Added UserId to URL: {}", urlPathParams.getUserId());
                }
                if (urlPathParams.getRoleId() != null) {
                    path = path + "&RoleId=" + urlPathParams.getRoleId();
                    log.debug("Added RoleId to URL: {}", urlPathParams.getRoleId());
                }
            }

            //发起请求
            RpcRequestClient rpcRequestClient = new RpcRequestClient(requestContentModel);
            HttpResponseWrapper response = doRpcV2(rpcRequestClient, path, requestMethod, requestParam, head);
            log.info("doRpcV2 end, statusCode:{}, path:{}, params:{}, head:{}",
                    response.getStatusCode(), path, JSONObject.toJSON(requestParam), head);
            return response;
        } catch (Exception e) {
            log.error("doRpcV2 failed", e);
            return new HttpResponseWrapper(e);
        }
    }
}
