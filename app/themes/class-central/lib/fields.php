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
    'id' => 'acf_post-images',
    'title' => 'Post Images',
    'fields' => array (
      array (
        'key' => 'field_5386f660e3121',
        'label' => 'Banner',
        'name' => 'banner',
        'type' => 'image',
        'instructions' => '1600x600 image used in the header of the blog, archive or post page. If empty, a single color background will be used instead.',
        'save_format' => 'object',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ),
      array (
        'key' => 'field_5386f410cb892',
        'label' => 'Thumbnail',
        'name' => 'thumbnail',
        'type' => 'image',
        'instructions' => '400x265 thumbnail used on Blog and Archive pages. If empty, the featured image will be used instead.',
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
  register_field_group(array (
    'id' => 'acf_pinned',
    'title' => 'Pinned',
    'fields' => array (
      array (
        'key' => 'field_5386f89ac67db',
        'label' => 'Pin this post',
        'name' => 'pinned',
        'type' => 'checkbox',
        'choices' => array (
          'pinned' => 'Pinned',
        ),
        'default_value' => '',
        'layout' => 'vertical',
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
    'menu_order' => -1,
  ));
}
