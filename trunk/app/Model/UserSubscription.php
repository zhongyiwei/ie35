<?php

App::uses('AppModel', 'Model');

/**
 * UserSubscription Model
 *
 */
class UserSubscription extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'user_email' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            'message' => 'The email address cannot be Blank. ',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'email' => array(
                'rule' => array('email'),
                'message' => 'Please enter a valid email address. ',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'subscription_status' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

}
