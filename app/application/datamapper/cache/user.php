<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'koken_users',
  'fields' => 
  array (
    0 => 'id',
    1 => 'password',
    2 => 'email',
    3 => 'created_on',
    4 => 'modified_on',
    5 => 'first_name',
    6 => 'last_name',
    7 => 'public_first_name',
    8 => 'public_last_name',
    9 => 'public_display',
    10 => 'public_email',
    11 => 'twitter',
    12 => 'facebook',
    13 => 'google',
    14 => 'internal_id',
    15 => 'remember_me',
  ),
  'validation' => 
  array (
    'internal_id' => 
    array (
      'label' => 'Internal id',
      'rules' => 
      array (
        0 => 'internalize',
        1 => 'required',
      ),
      'field' => 'internal_id',
    ),
    'password' => 
    array (
      'label' => 'password',
      'rules' => 
      array (
        0 => 'hash_password',
        1 => 'required',
      ),
      'field' => 'password',
    ),
    'public_first_name' => 
    array (
      'rules' => 
      array (
        0 => 'fallback',
      ),
      'field' => 'public_first_name',
    ),
    'public_last_name' => 
    array (
      'rules' => 
      array (
        0 => 'fallback',
      ),
      'field' => 'public_last_name',
    ),
    'public_email' => 
    array (
      'rules' => 
      array (
        0 => 'fallback',
      ),
      'field' => 'public_email',
    ),
    'id' => 
    array (
      'field' => 'id',
      'rules' => 
      array (
        0 => 'integer',
      ),
    ),
    'email' => 
    array (
      'field' => 'email',
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
    'modified_on' => 
    array (
      'field' => 'modified_on',
      'rules' => 
      array (
      ),
    ),
    'first_name' => 
    array (
      'field' => 'first_name',
      'rules' => 
      array (
      ),
    ),
    'last_name' => 
    array (
      'field' => 'last_name',
      'rules' => 
      array (
      ),
    ),
    'public_display' => 
    array (
      'field' => 'public_display',
      'rules' => 
      array (
      ),
    ),
    'twitter' => 
    array (
      'field' => 'twitter',
      'rules' => 
      array (
      ),
    ),
    'facebook' => 
    array (
      'field' => 'facebook',
      'rules' => 
      array (
      ),
    ),
    'google' => 
    array (
      'field' => 'google',
      'rules' => 
      array (
      ),
    ),
    'remember_me' => 
    array (
      'field' => 'remember_me',
      'rules' => 
      array (
      ),
    ),
    'content' => 
    array (
      'field' => 'content',
      'rules' => 
      array (
      ),
    ),
    'application' => 
    array (
      'field' => 'application',
      'rules' => 
      array (
      ),
    ),
    'history' => 
    array (
      'field' => 'history',
      'rules' => 
      array (
      ),
    ),
  ),
  'has_one' => 
  array (
  ),
  'has_many' => 
  array (
    'content' => 
    array (
      'class' => 'content',
      'other_field' => 'created_by',
      'join_self_as' => 'created_by',
      'join_other_as' => 'content',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
    'application' => 
    array (
      'class' => 'application',
      'other_field' => 'user',
      'join_self_as' => 'user',
      'join_other_as' => 'application',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
    'history' => 
    array (
      'class' => 'history',
      'other_field' => 'user',
      'join_self_as' => 'user',
      'join_other_as' => 'history',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
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