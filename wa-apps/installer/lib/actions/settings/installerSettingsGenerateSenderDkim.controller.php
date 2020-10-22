<?php

class installerSettingsGenerateSenderDkimController extends waJsonController
{
    public function execute()
    {
        if (!extension_loaded('openssl')) {
            return $this->errors = array(_w('Extension openssl is not installed'));
        }

        // Create the keypair
        $params = array(
            'private_key_type' => OPENSSL_KEYTYPE_RSA,
            'private_key_bits' => 1024,
        );
        $res = openssl_pkey_new($params);
        if (!$res) {
            return $this->errors = array(_w('Failed to create DKIM signature'));
        }

        // Get private key
        openssl_pkey_export($res, $dkim_pvt_key);
        if (!$dkim_pvt_key) {
            return $this->errors = array(_w('Failed to create DKIM signature'));
        }

        // Get public key
        $pubkey = openssl_pkey_get_details($res);
        if (!$pubkey) {
            return $this->errors = array(_w('Failed to create DKIM signature'));
        }
        $dkim_pub_key = $pubkey['key'];

        $one_string_key = installerHelper::getOneStringKey($dkim_pub_key);

        $email = trim(waRequest::post('email'));
        $e = explode('@', $email);

        $selector = installerHelper::getDkimSelector($email);

        $this->response = array(
            'dkim_pvt_key'    => $dkim_pvt_key,
            'dkim_pub_key'    => $dkim_pub_key,
            'one_string_key'  => $one_string_key,
            'sender_selector' => ifempty($selector, 'key1'),
            'sender_domain'   => array_pop($e),
        );
    }
}