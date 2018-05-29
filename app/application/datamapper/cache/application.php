<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'koken_applications',
  'fields' => 
  array (
    0 => 'id',
    1 => 'user_id',
    2 => 'nonce',
    3 => 'token',
    4 => 'role',
    5 => 'name',
    6 => 'created_on',
    7 => 'single_use',
  ),
  'validation' => 
  array (
    'id' => 
    array (
      'field' => 'id',
      'rules' => 
      array (
        0 => 'integer',
      ),
    ),
    'user_id' => 
    array (
      'field' => 'user_id',
      'rules' => 
      array (
      ),
    ),
    'nonce' => 
    array (
      'field' => 'nonce',
      'rules' => 
      array (
      ),
    ),
    'token' => 
    array (
      'field' => 'token',
      'rules' => 
      array (
      ),
    ),
    'role' => 
    array (
      'field' => 'role',
      'rules' => 
      array (
      ),
    ),
    'name' => 
    array (
      'field' => 'name',
      'rules' => 
      array (
      ),
    ),
    'created_on' => 
    array (
      'field' => 'created_on',
      'rules' => 
      array (
      ),
    ),
    'single_use' => 
    array (
      'field' => 'single_use',
      'rules' => 
      array (
      ),
    ),
    'user' => 
    array (
      'field' => 'user',
      'rules' => 
      array (
      ),
    ),
  ),
  'has_one' => 
  array (
    'user' => 
    array (
      'class' => 'user',
      'other_field' => 'application',
      'join_self_as' => 'application',
      'join_other_as' => 'user',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
  ),
  'has_many' => 
  array (
  ),
  '_field_tracking' => 
  array (
    'get_rules' => 
    array (
    ),
    'matches' => 
    array (
    ),
    'intval' => 
    array (
      0 => 'id',
    ),
  ),
);