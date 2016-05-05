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
      array (
        'key' => 'field_538cee3424c99',
        'label' => 'Background color',
        'name' => 'background_color',
        'type' => 'color_picker',
        'default_value' => '',
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

  register_field_group(array (
    'id' => 'acf_posts',
    'title' => 'Posts',
    'fields' => array (
      array (
        'key' => 'field_53f889df994ba',
        'label' => 'Photo credit',
        'name' => 'photo_credit',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_53f88a12994bb',
        'label' => 'Photo credit link',
        'name' => 'photo_credit_link',
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
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));

  register_field_group(array (
    'id' => 'acf_review-widget',
    'title' => 'Review widget',
    'fields' => array (
      array (
        'key' => 'field_54e1c4714e5f1',
        'label' => 'Add review widget',
        'name' => 'add_review_widget',
        'type' => 'checkbox',
        'choices' => array (
          'Add widget' => 'Add widget',
        ),
        'default_value' => '',
        'layout' => 'vertical',
      ),
      array (
        'key' => 'field_54e1c1c73cc72',
        'label' => 'Topbar',
        'name' => '',
        'type' => 'tab',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_54e1c4714e5f1',
              'operator' => '==',
              'value' => 'Add widget',
            ),
          ),
          'allorany' => 'all',
        ),
      ),
      array (
        'key' => 'field_54e1c1533cc71',
        'label' => 'Reviewer Name',
        'name' => 'widget_reviewer_name',
        'type' => 'text',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_54e1c4714e5f1',
              'operator' => '==',
              'value' => 'Add widget',
            ),
          ),
          'allorany' => 'all',
        ),
        'default_value' => 'Review',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_54e1c265fe711',
        'label' => 'Content',
        'name' => '',
        'type' => 'tab',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_54e1c4714e5f1',
              'operator' => '==',
              'value' => 'Add widget',
            ),
          ),
          'allorany' => 'all',
        ),
      ),
      array (
        'key' => 'field_54e1c60676231',
        'label' => 'Review title',
        'name' => 'widget_review_title',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_54e1c2ab6bf3c',
        'label' => 'Provider',
        'name' => 'widget_provider',
        'type' => 'text',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_54e1c4714e5f1',
              'operator' => '==',
              'value' => 'Add widget',
            ),
          ),
          'allorany' => 'all',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_54e1c2c96bf3d',
        'label' => 'Institution',
        'name' => 'widget_institution',
        'type' => 'text',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_54e1c4714e5f1',
              'operator' => '==',
              'value' => 'Add widget',
            ),
          ),
          'allorany' => 'all',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_54e1c2d76bf3e',
        'label' => 'Duration (in Weeks)',
        'name' => 'widget_duration',
        'type' => 'text',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_54e1c4714e5f1',
              'operator' => '==',
              'value' => 'Add widget',
            ),
          ),
          'allorany' => 'all',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_54e1c2eb6bf3f',
        'label' => 'Effort ( Hours/Week)',
        'name' => 'widget_intensity',
        'type' => 'text',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_54e1c4714e5f1',
              'operator' => '==',
              'value' => 'Add widget',
            ),
          ),
          'allorany' => 'all',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_54e1c2fe6bf40',
        'label' => 'Difficulty (Easy/Medium/Hard)',
        'name' => 'widget_difficulty',
        'type' => 'text',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_54e1c4714e5f1',
              'operator' => '==',
              'value' => 'Add widget',
            ),
          ),
          'allorany' => 'all',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_54e1c30b6bf41',
        'label' => 'Content text',
        'name' => 'widget_content_text',
        'type' => 'wysiwyg',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_54e1c4714e5f1',
              'operator' => '==',
              'value' => 'Add widget',
            ),
          ),
          'allorany' => 'all',
        ),
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'no',
      ),
      array (
        'key' => 'field_54e1c32635738',
        'label' => 'Footer',
        'name' => '',
        'type' => 'tab',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_54e1c4714e5f1',
              'operator' => '==',
              'value' => 'Add widget',
            ),
          ),
          'allorany' => 'all',
        ),
      ),
      array (
        'key' => 'field_54e1c32f35739',
        'label' => 'CC Rating',
        'name' => 'widget_cc_rating',
        'type' => 'select',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_54e1c4714e5f1',
              'operator' => '==',
              'value' => 'Add widget',
            ),
          ),
          'allorany' => 'all',
        ),
        'choices' => array (
          '00' => 0,
          '05' => 5,
          10 => 10,
          15 => 15,
          20 => 20,
          25 => 25,
          30 => 30,
          35 => 35,
          40 => 40,
          45 => 45,
          50 => 50,
        ),
        'default_value' => '',
        'allow_null' => 0,
        'multiple' => 0,
      ),
      array (
        'key' => 'field_54e1c3d385bfe',
        'label' => 'Community Rating',
        'name' => 'widget_community_rating',
        'type' => 'select',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_54e1c4714e5f1',
              'operator' => '==',
              'value' => 'Add widget',
            ),
          ),
          'allorany' => 'all',
        ),
        'choices' => array (
          '00' => 0,
          '05' => 5,
          10 => 10,
          15 => 15,
          20 => 20,
          25 => 25,
          30 => 30,
          35 => 35,
          40 => 40,
          45 => 45,
          50 => 50,
        ),
        'default_value' => '',
        'allow_null' => 0,
        'multiple' => 0,
      ),
      array (
        'key' => 'field_54e1c7d2f4887',
        'label' => 'Rating bubble count',
        'name' => 'rating_bubble_count',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_54e1c7e0f4888',
        'label' => 'Rating bubble link',
        'name' => 'rating_bubble_link',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_54e1cab186fc8',
        'label' => 'Go to class link',
        'name' => 'go_to_class_link',
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
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));

  register_field_group(array (
    'id' => 'acf_sidebar-widget',
    'title' => 'Sidebar widget',
    'fields' => array (
      array (
        'key' => 'field_54e1e395cd5c8',
        'label' => 'Sidebar widget course id',
        'name' => 'sidebar_widget_course_id',
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
      'position' => 'side',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}
