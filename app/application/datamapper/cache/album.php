<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'koken_albums',
  'fields' => 
  array (
    0 => 'id',
    1 => 'title',
    2 => 'slug',
    3 => 'old_slug',
    4 => 'summary',
    5 => 'description',
    6 => 'sort',
    7 => 'visibility',
    8 => 'level',
    9 => 'left_id',
    10 => 'right_id',
    11 => 'deleted',
    12 => 'featured',
    13 => 'featured_on',
    14 => 'featured_order',
    15 => 'total_count',
    16 => 'video_count',
    17 => 'published_on',
    18 => 'created_on',
    19 => 'modified_on',
    20 => 'album_type',
    21 => 'internal_id',
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
    'created_on' => 
    array (
      'rules' => 
      array (
        0 => 'validate_time',
      ),
      'field' => 'created_on',
    ),
    'published_on' => 
    array (
      'rules' => 
      array (
        0 => 'validate_time',
      ),
      'field' => 'published_on',
    ),
    'left_id' => 
    array (
      'rules' => 
      array (
        0 => 'into_tree',
        1 => 'required',
      ),
      'field' => 'left_id',
    ),
    'visibility' => 
    array (
      'rules' => 
      array (
        0 => 'tree',
      ),
      'field' => 'visibility',
    ),
    'title' => 
    array (
      'rules' => 
      array (
        0 => 'required',
      ),
      'get_rules' => 
      array (
        0 => 'readify',
      ),
      'field' => 'title',
    ),
    'slug' => 
    array (
      'rules' => 
      array (
        0 => 'slug',
        1 => 'required',
      ),
      'field' => 'slug',
    ),
    'id' => 
    array (
      'field' => 'id',
      'rules' => 
      array (
        0 => 'integer',
      ),
    ),
    'old_slug' => 
    array (
      'field' => 'old_slug',
      'rules' => 
      array (
      ),
    ),
    'summary' => 
    array (
      'field' => 'summary',
      'rules' => 
      array (
      ),
    ),
    'description' => 
    array (
      'field' => 'description',
      'rules' => 
      array (
      ),
    ),
    'sort' => 
    array (
      'field' => 'sort',
      'rules' => 
      array (
      ),
    ),
    'level' => 
    array (
      'field' => 'level',
      'rules' => 
      array (
      ),
    ),
    'right_id' => 
    array (
      'field' => 'right_id',
      'rules' => 
      array (
      ),
    ),
    'deleted' => 
    array (
      'field' => 'deleted',
      'rules' => 
      array (
      ),
    ),
    'featured' => 
    array (
      'field' => 'featured',
      'rules' => 
      array (
      ),
    ),
    'featured_on' => 
    array (
      'field' => 'featured_on',
      'rules' => 
      array (
      ),
    ),
    'featured_order' => 
    array (
      'field' => 'featured_order',
      'rules' => 
      array (
      ),
    ),
    'total_count' => 
    array (
      'field' => 'total_count',
      'rules' => 
      array (
      ),
    ),
    'video_count' => 
    array (
      'field' => 'video_count',
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
    'album_type' => 
    array (
      'field' => 'album_type',
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
    'category' => 
    array (
      'field' => 'category',
      'rules' => 
      array (
      ),
    ),
    'text' => 
    array (
      'field' => 'text',
      'rules' => 
      array (
      ),
    ),
    'tag' => 
    array (
      'field' => 'tag',
      'rules' => 
      array (
      ),
    ),
    'cover' => 
    array (
      'field' => 'cover',
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
    'cover' => 
    array (
      'class' => 'content',
      'join_table' => 'koken_join_albums_covers',
      'other_field' => 'covers',
      'join_other_as' => 'cover',
      'join_self_as' => 'album',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
    'content' => 
    array (
      'class' => 'content',
      'other_field' => 'album',
      'join_self_as' => 'album',
      'join_other_as' => 'content',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
    'category' => 
    array (
      'class' => 'category',
      'other_field' => 'album',
      'join_self_as' => 'album',
      'join_other_as' => 'category',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
    'text' => 
    array (
      'class' => 'text',
      'other_field' => 'album',
      'join_self_as' => 'album',
      'join_other_as' => 'text',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
    'tag' => 
    array (
      'class' => 'tag',
      'other_field' => 'album',
      'join_self_as' => 'album',
      'join_other_as' => 'tag',
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
      0 => 'title',
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