<?php

namespace Ksyun\Common;

use \ReflectionClass;

/**
 * 抽象model类，禁止client引用
 * @package App\Ksyun\Common
 */
abstract class BaseModel
{
    /**
     * 内部实现，用户禁止调用
     */
    public function serialize()
    {
        $ret = $this->objSerialize($this);
        return $ret;
    }

    public function requestObjSerialize($obj)
    {
        $memberRet = [];
        $ref = new ReflectionClass(get_class($obj));
        $memberList = $ref->getProperties();
        foreach ($memberList as $member) {
            $name = ucfirst($member->getName());
            $member->setAccessible(true);
            $memberValue = $member->getValue($obj);
            if ($memberValue) {
                if ($name == 'RequestParams') {
                    $memberRet = array_merge($memberRet, $memberValue);
                } else {
                    foreach ($memberValue as $key => $value) {
                        if ($value) {
                            $memberRet[$key] = $value;
                        }
                    }
                }
            }
        }
        return $memberRet;
    }

    private function responseObjSerialize($obj)
    {
        $objSerialize = json_encode($obj);
        return json_decode($objSerialize, true);
    }


    private function arraySerialize($memberList)
    {
        $memberRet = [];
        foreach ($memberList as $name => $value) {
            if ($value === null) {
                continue;
            }
            if ($value instanceof BaseModel) {
                $memberRet[$name] = $this->objSerialize($value);
            } elseif (is_array($value)) {
                $memberRet[$name] = $this->arraySerialize($value);
            } else {
                $memberRet[$name] = $value;
            }
        }
        return $memberRet;
    }

    private function arrayMerge($array, $prepend = null)
    {
        $results = array();
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $results = array_merge($results, static::arrayMerge($value, $prepend . $key . '.'));
            } else {
                if (is_bool($value)) {
                    $results[$prepend . $key] = json_encode($value);
                } else {
                    $results[$prepend . $key] = $value;
                }

            }
        }
        return $results;
    }

    /**
     * @param string $jsonString json格式的字符串
     */
    public function fromJsonString($jsonString)
    {
        $arr = json_decode($jsonString, true);
        $this->unserialize($arr);
    }

    public function toJsonString()
    {
        $r = $this->responseObjSerialize($this);
        // it is an object rather than an array
        if (empty($r)) {
            return "{}";
        }
        return json_encode($r, JSON_UNESCAPED_UNICODE);
    }

    public function __call($member, $param)
    {
        $act = substr($member, 0, 3);
        $attr = substr($member, 3);
        if ($act === "get") {
            return $this->$attr;
        } else if ($act === "set") {
            $this->$attr = $param[0];
        }
    }


    /**
     * @funcName formatFilterParams 如果是Filter的话 需要对参数进行处理
     * @param $paramName
     * @param $queryParams
     * @return array|mixed
     * @Description 转化 FAlter 类型的数据
     */
    public function formatFilterParams($paramName, $queryParams)
    {
        $res = [];
        foreach ($queryParams as $pKey => $pVal) {
            $prefixName = $paramName . '.' . $pKey;
            if (is_string($pVal) || is_numeric($pVal)) {
                $res[$prefixName] = $pVal;
            }
            if (is_bool($pVal)) {
                $res[$prefixName] = $pVal ? 'true' : 'false';
            }
            if (is_array($pVal) && !empty($pVal)) {
                $res = array_merge($res, $this->formatFilterParams($prefixName, $pVal));
            }

        }
        return $res;
    }
}

