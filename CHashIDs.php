<?php

Yii::import('application.extensions.hashids.Hashids.Hashids');

/**
 * Description of CHashIDs
 *
 * @author Martin Fillafer unki2aut@gmail.com
 */
class CHashIDs extends CApplicationComponent
{
    /**
     * Set a salt for the application
     * @var string
     */
    public $salt = 'e1z93a0z8ll5k1lxpcn1ztfjqgx6e87g';

    public $hash_length = 8;

    public $custom_alphabet = 'abcdefghijklmnopqrstuvwxyz0123456789';

    private $hashids;

    public function init()
    {
        parent::init();
        $this->hashids = new Hashids($this->salt, $this->hash_length, $this->custom_alphabet);
    }

    public function __call($name, $parameters)
    {
        if (method_exists($this->hashids, $name)) {
            $res = call_user_func_array(array($this->hashids, $name), $parameters);
            if(is_array($res) && count($res) === 1) return $res[0];
            else return $res;
        } else {
            throw new CException('method not found!');
        }
    }
}

?>
