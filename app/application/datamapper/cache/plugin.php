<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'koken_plugins',
  'fields' => 
  array (
    0 => 'id',
    1 => 'path',
    2 => 'setup',
    3 => 'data',
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
    'path' => 
    array (
      'field' => 'path',
      'rules' => 
      array (
      ),
    ),
    'setup' => 
    array (
      'field' => 'setup',
      'rules' => 
      array (
      ),
    ),
    'data' => 
    array (
      'field' => 'data',
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