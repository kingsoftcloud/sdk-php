<?php

namespace Ksyun\Common;

use Ksyun\Common\Exception\KsyunSDKException;

/**
 * 签名类，禁止client引用
 * @throws KsyunSDKException
 * @package App\Ksyun\Common
 */
class Sign
{
    /**
     * @throws KsyunSDKException
     */
    public static function sign($secretKey, $signStr, $signMethod)
    {
        $signMethodMap = ["HMAC-SHA256" => "sha256"];
        if (!array_key_exists($signMethod, $signMethodMap)) {
            throw new KsyunSDKException("signMethod invalid", "signMethod only support (HMAC-SHA256)");
        }
        return hash_hmac($signMethodMap[$signMethod], $signStr, $secretKey);
    }

}
