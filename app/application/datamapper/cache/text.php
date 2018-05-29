<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'koken_text',
  'fields' => 
  array (
    0 => 'id',
    1 => 'title',
    2 => 'draft_title',
    3 => 'slug',
    4 => 'old_slug',
    5 => 'featured_image_id',
    6 => 'featured',
    7 => 'featured_on',
    8 => 'featured_order',
    9 => 'custom_featured_image',
    10 => 'content',
    11 => 'draft',
    12 => 'excerpt',
    13 => 'published',
    14 => 'page_type',
    15 => 'published_on',
    16 => 'created_on',
    17 => 'modified_on',
    18 => 'internal_id',
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
    'page_type' => 
    array (
      'rules' => 
      array (
        0 => 'validate_type',
      ),
      'field' => 'page_type',
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
    'created_on' => 
    array (
      'rules' => 
      array (
        0 => 'validate_created_on',
      ),
      'field' => 'created_on',
    ),
    'title' => 
    array (
      'rules' => 
      array (
        0 => 'format_title',
      ),
      'get_rules' => 
      array (
        0 => 'readify',
      ),
      'field' => 'title',
    ),
    'draft_title' => 
    array (
      'rules' => 
      array (
        0 => 'format_title',
      ),
      'field' => 'draft_title',
    ),
    'draft' => 
    array (
      'rules' => 
      array (
        0 => 'format_content',
      ),
      'field' => 'draft',
    ),
    'content' => 
    array (
      'rules' => 
      array (
        0 => 'format_content',
      ),
      'field' => 'content',
    ),
    'published' => 
    array (
      'rules' => 
      array (
        0 => 're_slug',
      ),
      'field' => 'published',
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
    'featured_image_id' => 
    array (
      'field' => 'featured_image_id',
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
    'custom_featured_image' => 
    array (
      'field' => 'custom_featured_image',
      'rules' => 
      array (
      ),
    ),
    'excerpt' => 
    array (
      'field' => 'excerpt',
      'rules' => 
      array (
      ),
    ),
    'published_on' => 
    array (
      'field' => 'published_on',
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
    'featured_image' => 
    array (
      'field' => 'featured_image',
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
    'album' => 
    array (
      'field' => 'album',
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
  ),
  'has_one' => 
  array (
    'featured_image' => 
    array (
      'class' => 'content',
      'other_field' => 'text',
      'join_self_as' => 'text',
      'join_other_as' => 'featured_image',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
  ),
  'has_many' => 
  array (
    'category' => 
    array (
      'class' => 'category',
      'other_field' => 'text',
      'join_self_as' => 'text',
      'join_other_as' => 'category',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
    'album' => 
    array (
      'class' => 'album',
      'other_field' => 'text',
      'join_self_as' => 'text',
      'join_other_as' => 'album',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
    'tag' => 
    array (
      'class' => 'tag',
      'other_field' => 'text',
      'join_self_as' => 'text',
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