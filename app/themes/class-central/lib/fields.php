<?php

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_post-subtitle',
    'title' => 'Post Subtitle',
    'fields' => array (
      array (
        'key' => 'field_5386f3a715748',
        'label' => 'Subtitle',
        'name' => 'subtitle',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'acf_after_title',
      'layout' => 'default',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
  register_field_group(array (
    'id' => 'acf_post-thumbnail',
    'title' => 'Post Thumbnail',
    'fields' => array (
      array (
        'key' => 'field_5386f410cb892',
        'label' => 'Thumbnail',
        'name' => 'thumbnail',
        'type' => 'image',
        'instructions' => 'Thumbnail used on Blog and Archive pages. If empty, the featured image will be used instead.',
        'save_format' => 'object',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}
