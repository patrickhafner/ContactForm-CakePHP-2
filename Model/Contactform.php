<?php
/**
 * ContactForm for CakePHP 2.x
 *
 * Copyright 2012-2013 by Patrick Hafner (http://patrickhafner.de)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 */

App::uses('AppModel', 'Model');

/**
 * Contact Model
 *
 * @property Contact $Contact
 */
class Contactform extends AppModel {

    public $validationDomain = 'contactform';

    public $_schema = array(
        'Name' => array('type' => 'string', 'null' => false, 'default' => '', 'length' => '50'),
        'Mail' => array('type' => 'string', 'null' => false, 'default' => '', 'length' => '80'),
        'Message' => array('type' => 'text', 'null' => false, 'default' => ''),
        'Spamprotection' => array('type' => 'string', 'null' => false, 'default' => ''),
    );

    public $useTable = false;
    
    public $validate = array(
        'Name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'required' => true,
                'message' => 'please insert your name'
            )
        ),
        'Mail' => array(
            'email' => array(
                'rule' => array('email'),
                'required' => true,
                'message' => 'please insert your email address'
            )
        ),
        'Message' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'required' => true,
                'message' => 'please enter your message'
            )
        ),
        'Spamprotection' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'please solve the calculation'
            ),
            'checkSpamProtectionCalculation' => array(
                'rule' => array('checkSpamProtectionCalculation'),
                'required' => true,
                'message' => 'your solution was not correct'
            ),
        ),
    );

    public function checkSpamProtectionCalculation($check) {
        App::uses('CakeSession', 'Model/Datasource');
        return intval($check['Spamprotection']) === intval(CakeSession::read('Contactform.spamcalc'));
    }

}