<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'koken_history',
  'fields' => 
  array (
    0 => 'id',
    1 => 'user_id',
    2 => 'message',
    3 => 'created_on',
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
    'message' => 
    array (
      'field' => 'message',
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
      'other_field' => 'history',
      'join_self_as' => 'history',
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