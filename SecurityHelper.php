<?php

namespace wolverineo250kr\helpers\security;

use Yii;
use yii\base\Object;

class SecurityHelper extends Object {

    /*
        * Usage SecurityHelper::encodeStringByKey($string, $key)
        * @param string $string
        * @param string $key
        * @return string 
    */
    static public function encodeStringByKey(string $string, string $key): string {
        $yiiSecured = Yii::$app->security->encryptByKey($string, $key);

        $based = self::base64UrlEncode($yiiSecured);

        $urlEncoded = urlencode($based);

        return $urlEncoded;
    }

    /*
        * Usage SecurityHelper::decodeStringByKey($string, $key)
        * @param string $string
        * @param string $key
        * @return string     
    */
    static public function decodeStringByKey(string $string, string $key): string {
        $urlDecoded = urldecode($string);

        $reBased = self::base64UrlDecode($urlDecoded);

        $yiiOpened = Yii::$app->security->decryptByKey($reBased, $key);

        return $yiiOpened;
    }

      static public function base64UrlEncode($data) {
        $base64Encoded = base64_encode($data);

        if ($base64Encoded === false) {
            return false;
        }

        $url = strtr($base64Encoded, '+/', '-_');

        return rtrim($url, '=');
    }

    /**
     * Decode data from Base64URL
     * @param string $data
     * @param boolean $strict
     * @return boolean|string
     */
      static public function base64UrlDecode($data, $strict = false) {
        $base64Encoded = strtr($data, '-_', '+/');

        return base64_decode($base64Encoded, $strict);
    }

}
