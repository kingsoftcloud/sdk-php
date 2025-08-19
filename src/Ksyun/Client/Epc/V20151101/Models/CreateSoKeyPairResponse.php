<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateSoKeyPairResponse extends BaseModel
{
         /** 3322**/
         public  $KeyPairName;

         /** -----BEGIN RSA PRIVATE KEY-----
MIIEowIBAAKCAQEA5Ya/wQ4XIYRdyuJwOXZ335c/Tr31K+sm4GZFp24DwCG8Eaw1
CQArr1naKXIdreFbIp6UmLJXCKHN1A9giNla0GmJKmfmq0eVCga7293GhXy0BBrL
JakHsRBK6oTBIqP553+T0UlUykYD0Z4wGxeq1qQXoQ9Xy8HWHQDaRxK097aaqcXM
mGv+9h51VavG60+CGFbWTihWgXx8+C0iYgqNXYyNhWe0Y8zeo9fkJaWm6HFTBkAA
6aMjxA7kRZoBlNfSyHkReN8u69Nx1t7btS5wJUX9ATxxcLD7eEbY3ie1tqxjanq/
1e654f6a0axnDbVkYQflCiI5la0OxxGeZmMEBQIDAQABAoIBAFX9ks+YINBcz+rX
xOWyXZy2BHDSuAy5L7p4dnYQwHT17ojMdJ4nozYxuos2hqoDOOqScOd4QSUpwXxG
OotqqxxTvaDWhlP7IHo+JZls0BhorOSwyRUV65zJltef3t/EgTba1B1flNWnP30D
/8/WoRmDJpsfrWvX9gitrhlch9IZsL8CqCbasEd8UTS/0noLsERdRcs+EUjjzc2V
jLT+MgPy9//Il9F+d2XltURmJl4Pc0nlQ8Q/IxJ8jEjg4yTO2QtmhXUf8nCOyWym
wYoPPRHZr/XA6rq2KljdHqyal1XgtnpOuNqmLF1x4+vFwH/jIPP+8I4RfOXppjCM
2bbNbA0CgYEA+y6JGsdu2ZhiGmu9N5jK12nmoCJjALRSLQLt2jejLi6v2nHtlwgj
W/fNiG+xrf33iba4fQZZ5f8d3eJDY3YSrXwKDrVycSRBhI/ot3taMDb71ybcwB4E
uQa0u5mwRxx3TKdNE6eNsbt/qr7JWwJIWPILLAGljdiI+AbNYIJV6qMCgYEA6e3f
FZ+JuVtk3sauCe2UCt1XV8pzuNesl/14T7gZlIXsREbs3JPo5M/qq64o/j3blSTG
dolj9fy/aHGxmTERjVSyJeTI/Qq2viUq5bCr+0WaYZTXXLS5XW1Kgq1/43T0COUi
m8QfgGmpA9iF762XjgtHyYxsKopz0ZR++0JYqTcCgYAo9bK34jOqWhYNVupZKZpS
PFu2W0UntT/9RRACWLZMbqKQjal/ynzxn1wt1oDz7YkzNM+q26FHRy3Yo+/3RSbQ
kXyWX3JVDuN8OXdqjDvtxtmUgSrYTUzZ20UXnn1Ha1Xs8w83mEgb5oZwEoKFS77+
eiHmQDJ+CgRz5bAR/88A3wKBgQCS2JPVyxR1mv2zKx1Ndioct92AasJCIoFh1+eS
g4rrRTaPlcZSoTbti+dQZj+teb9B3JgJCS4K2OJ++f/2nmraQXSjfP7+eZ9Ftac8
EK+lSIglAX4/3+MM1vKTHb7OVjhq7QvQpEjyH2HN3DoXvu0IaeRijRfJjKgvw/wC
Vh+5+QKBgF+nS5XlFcvNYiOzfs1SsNG/cH6AJqAAF3DL7LhNm19QmBa3uiOZyykm
ngYNMUmMyZpg1wvEqSQzGZowm9SdjNjXZwh6b8WoURQLV+yEtVji8W4nbTIXEL3E
aF9EcSQGIkeFwstr9/jp+YGqndyu0FSfxXW4vs+1M2rAS1p5OT6X
-----END RSA PRIVATE KEY-----
**/
         public  $PrivateKey;

         /** kp-ye0xql4lnf38dgb1slmk**/
         public  $KeyPairId;

         /** 89b726fd64d277c1a4af88bec56753b3**/
         public  $FingerPrint;

         /** db1675cf-4cb6-4563-b67f-78f096ffb341**/
         public  $RequestId;

         /** true**/
         public  $Return;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("KeyPairName",$param) and $param["KeyPairName"] !== null) {
                $this->KeyPairName = $param["KeyPairName"];
            }
            if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
                $this->PrivateKey = $param["PrivateKey"];
            }
            if (array_key_exists("KeyPairId",$param) and $param["KeyPairId"] !== null) {
                $this->KeyPairId = $param["KeyPairId"];
            }
            if (array_key_exists("FingerPrint",$param) and $param["FingerPrint"] !== null) {
                $this->FingerPrint = $param["FingerPrint"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("Return",$param) and $param["Return"] !== null) {
                $this->Return = $param["Return"];
            }

        }
}