<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'koken_drafts',
  'fields' => 
  array (
    0 => 'id',
    1 => 'path',
    2 => 'live_data',
    3 => 'data',
    4 => 'current',
    5 => 'draft',
    6 => 'created_on',
    7 => 'modified_on',
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
    'live_data' => 
    array (
      'field' => 'live_data',
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
    'current' => 
    array (
      'field' => 'current',
      'rules' => 
      array (
      ),
    ),
    'draft' => 
    array (
      'field' => 'draft',
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