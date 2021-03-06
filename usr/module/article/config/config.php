<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link         http://code.piengine.org for the Pi Engine source repository
 * @copyright    Copyright (c) Pi Engine http://piengine.org
 * @license      http://piengine.org/license.txt BSD 3-Clause License
 */

/**
 * Module config config
 *
 * @author Zongshu Lin <lin40553024@163.com>
 */
return [
    'category' => [
        [
            'name'  => 'general',
            'title' => _t('General'),
        ],
        [
            'name'  => 'autosave',
            'title' => _t('Autosave'),
        ],
        [
            'name'  => 'seo',
            'title' => _t('SEO'),
        ],
        [
            'name'  => 'summary',
            'title' => _t('Summary and subject'),
        ],
        [
            'name'  => 'media',
            'title' => _t('Media'),
        ],
    ],

    'item' => [
        // General
        'page_limit_all'               => [
            'category'    => 'general',
            'title'       => _t('Article List Page Limit'),
            'description' => _t('Maximum count of articles in a front page.'),
            'value'       => 40,
            'filter'      => 'int',
        ],
        'page_limit_topic'             => [
            'category'    => 'general',
            'title'       => _t('Topic Article List Page Limit'),
            'description' => _t('Maximum count of topic articles in a front page.'),
            'value'       => 5,
            'filter'      => 'int',
        ],
        'page_limit_management'        => [
            'category'    => 'general',
            'title'       => _t('Article Management Page Limit'),
            'description' => _t('Maximum count of articles in a management page.'),
            'value'       => 40,
            'filter'      => 'int',
        ],
        'author_limit'                 => [
            'category'    => 'general',
            'title'       => _t('Author Limit'),
            'description' => _t('Maximum count of author in management page.'),
            'value'       => 20,
            'filter'      => 'int',
        ],
        'category_limit'               => [
            'category'    => 'general',
            'title'       => _t('Category Limit'),
            'description' => _t('Maximum count of category in management page.'),
            'value'       => 20,
            'filter'      => 'int',
        ],
        'enable_tag'                   => [
            'category'    => 'general',
            'title'       => _t('Enable Tag'),
            'description' => _t('Enable tag (Tag module must be installed)'),
            'edit'        => 'checkbox',
            'value'       => 1,
            'filter'      => 'int',
        ],
        'default_source'               => [
            'category'    => 'general',
            'title'       => _t('Default Source'),
            'description' => _t('Display when no source is provided.'),
            'value'       => Pi::config('sitename') . ' (' . Pi::url('www', true) . ')',
        ],
        'default_category'             => [
            'category'    => 'general',
            'title'       => _t('Default Category'),
            'description' => _t('Can not be deleted.'),
            'edit'        => 'Module\Article\Form\Element\Category',
            'value'       => 2,
            'filter'      => 'int',
        ],
        'max_related'                  => [
            'category'    => 'general',
            'title'       => _t('Max Related Articles'),
            'description' => _t('Maximum related articles to fetch.'),
            'value'       => 5,
            'filter'      => 'int',
        ],
        'markup'                       => [
            'category'    => 'general',
            'title'       => _t('Markup Language'),
            'description' => _t('Default markup language for editing draft.'),
            'value'       => _t('html'),
            'edit'        => [
                'type'    => 'select',
                'options' => [
                    'options' => [
                        'html'     => _t('HTML'),
                        'compound' => _t('Compound'),
                        'markdown' => _t('Markdown'),
                        'default'  => _t('Textarea'),
                    ],
                ],
            ],
            'filter'      => 'string',
        ],
        'default_topic_template_image' => [
            'category'    => 'general',
            'title'       => _t('Default Topic Template Screenshot'),
            'description' => '',
            'value'       => 'image/default-topic-template.png',
        ],
        'max_sub_category'             => [
            'category'    => 'general',
            'title'       => _t('Max Sub-category'),
            'description' => _t('Max sub-category number in category article list page'),
            'value'       => 2,
        ],
        'list_item'                    => [
            'category'    => 'general',
            'title'       => _t('Items of List Page'),
            'description' => _t('Items to display in list page'),
            'value'       => '',
            'edit'        => [
                'type'    => 'multiCheckbox',
                'options' => [
                    'options' => [
                        'feature'  => _t('Feature image'),
                        'summary'  => _t('Summary'),
                        'time'     => _t('Created time'),
                        'author'   => _t('Author'),
                        'category' => _t('Category'),
                    ],
                ],
            ],
            'filter'      => 'array',
        ],
        'list_summary_length'          => [
            'category'    => 'general',
            'title'       => _t('Max Summary Length'),
            'description' => _t('Max summary length to display in list page'),
            'value'       => 120,
        ],
        'enable_list_nav'              => [
            'category'    => 'general',
            'title'       => _t('Enable List Nav'),
            'description' => _t('Whether to enable category nav in list page'),
            'edit'        => 'checkbox',
            'value'       => 1,
            'filter'      => 'int',
        ],
        'default_homepage'             => [
            'category'    => 'general',
            'title'       => _t('Default Homepage'),
            'description' => _t('Use relative url, leave it empty if you want to dress up yourselves'),
            'value'       => '',
            'filter'      => 'string',
        ],
        'enable_front_edit'            => [
            'category'    => 'general',
            'title'       => _t('Enable Front-end Management'),
            'description' => _t('Whether to allow user compose and manage list in front-end'),
            'edit'        => 'checkbox',
            'value'       => 1,
            'filter'      => 'int',
        ],

        // Autosave
        'autosave_interval'            => [
            'category'    => 'autosave',
            'title'       => _t('Interval'),
            'description' => _t('How many minutes to save draft once again, there will not autosave if it set to 0.'),
            'value'       => 5,
            'filter'      => 'int',
        ],

        // Summary
        'enable_summary'               => [
            'category'    => 'summary',
            'title'       => _t('Enable Summary'),
            'description' => _t('Enable summary'),
            'edit'        => 'checkbox',
            'value'       => 1,
            'filter'      => 'int',
        ],
        'max_summary_length'           => [
            'category'    => 'summary',
            'title'       => _t('Max Summary Length'),
            'description' => _t('Not more than 255'),
            'value'       => 255,
            'filter'      => 'int',
        ],
        'max_subject_length'           => [
            'category'    => 'summary',
            'title'       => _t('Max Subject Length'),
            'description' => _t('Not more than 255'),
            'value'       => 60,
            'filter'      => 'int',
        ],
        'max_subtitle_length'          => [
            'category'    => 'summary',
            'title'       => _t('Max Subtitle Length'),
            'description' => _t('Not more than 255'),
            'value'       => 40,
            'filter'      => 'int',
        ],

        // Media
        'path_media'                   => [
            'category'    => 'media',
            'title'       => _t('Media Path'),
            'description' => _t('Path to save media file.'),
            'value'       => 'upload/article/media',
        ],
        'media_extension'              => [
            'category'    => 'media',
            'title'       => _t('Media Extension'),
            'description' => _t('Media types which can be uploaded.'),
            'value'       => 'pdf,rar,zip,doc,txt,docx,xls,xlsx,ppt,pptx,jpg,jpeg,png,gif',
        ],
        'image_format'                 => [
            'category'    => 'media',
            'title'       => _t('Image Format'),
            'description' => _t('Decide which extension belong to image'),
            'value'       => 'jpg,jpeg,png,gif,bmp,tiff,exif',
        ],
        'doc_format'                   => [
            'category'    => 'media',
            'title'       => _t('Documentation Format'),
            'description' => _t('Decide which extension belong to doc'),
            'value'       => 'pdf,doc,docx,xls,xlsx,ppt,pptx,txt,csv',
        ],
        'video_format'                 => [
            'category'    => 'media',
            'title'       => _t('Video Format'),
            'description' => _t('Decide which extension belong to video'),
            'value'       => 'avi,rm,rmvb,flv,swf,wmv,mp4',
        ],
        'zip_format'                   => [
            'category'    => 'media',
            'title'       => _t('Compression Format'),
            'description' => _t('Decide which extension belong to compression'),
            'value'       => 'zip,rar',
        ],
        'max_media_size'               => [
            'category'    => 'media',
            'title'       => _t('Max Media Size'),
            'description' => _t('Max media size, unit is Byte'),
            'value'       => 2097152,
            'filter'      => 'int',
        ],
        'default_media_image'          => [
            'category'    => 'media',
            'title'       => _t('Default Media Image'),
            'description' => _t('Path to default media image of article.'),
            'value'       => 'image/default-media.png',
        ],
        'default_media_thumb'          => [
            'category'    => 'media',
            'title'       => _t('Default media thumb'),
            'description' => _t('Path to default media thumb of article.'),
            'value'       => 'image/default-media-thumb.png',
        ],
        'image_width'                  => [
            'category'    => 'media',
            'title'       => _t('Image Width'),
            'description' => _t('Max allowed image width'),
            'value'       => 540,
        ],
        'image_height'                 => [
            'category'    => 'media',
            'title'       => _t('Image Height'),
            'description' => _t('Max allowed image height'),
            'value'       => 460,
        ],
        'image_extension'              => [
            'category'    => 'media',
            'title'       => _t('Image Extension'),
            'description' => _t('Images types which can be uploaded.'),
            'value'       => 'jpg,png,gif',
        ],
        'max_image_size'               => [
            'category'    => 'media',
            'title'       => _t('Max Image Size'),
            'description' => _t('Max image size allowed, unit is Byte'),
            'value'       => 2097152,
            'filter'      => 'int',
        ],
        'path_author'                  => [
            'category'    => 'media',
            'title'       => _t('Author Path'),
            'description' => _t('Path to upload photo of author.'),
            'value'       => 'upload/article/author',
        ],
        'path_category'                => [
            'category'    => 'media',
            'title'       => _t('Category Path'),
            'description' => _t('Path to upload image of category.'),
            'value'       => 'upload/article/category',
        ],
        'path_feature'                 => [
            'category'    => 'media',
            'title'       => _t('Feature Path'),
            'description' => _t('Path to upload feature image of article.'),
            'value'       => 'upload/article/feature',
        ],
        'path_topic'                   => [
            'category'    => 'media',
            'title'       => _t('Topic Path'),
            'description' => _t('Path to upload image of topic.'),
            'value'       => 'upload/article/topic',
        ],
        'sub_dir_pattern'              => [
            'category'    => 'media',
            'title'       => _t('Pattern'),
            'description' => _t('Use datetime as pattern of sub directory.'),
            'value'       => 'Y/m/d',
            'edit'        => [
                'type'    => 'select',
                'options' => [
                    'options' => [
                        'Y/m/d' => 'Y/m/d',
                        'Y/m'   => 'Y/m',
                        'Ym'    => 'Ym',
                    ],
                ],
            ],
        ],
        'author_size'                  => [
            'category'    => 'media',
            'title'       => _t('Author Photo Size'),
            'description' => _t('Author photo width and height'),
            'value'       => 110,
            'filter'      => 'int',
        ],
        'default_author_photo'         => [
            'category'    => 'media',
            'title'       => _t('Default Author Photo'),
            'description' => _t('Path to default photo of author.'),
            'value'       => 'image/default-author.png',
        ],
        'category_width'               => [
            'category'    => 'media',
            'title'       => _t('Category Image Width'),
            'description' => _t('Category image width'),
            'value'       => 40,
            'filter'      => 'int',
        ],
        'category_height'              => [
            'category'    => 'media',
            'title'       => _t('Category Image Height'),
            'description' => _t('Category image height'),
            'value'       => 40,
            'filter'      => 'int',
        ],
        'default_category_image'       => [
            'category'    => 'media',
            'title'       => _t('Default Category Image'),
            'description' => _t('Path to default image of category.'),
            'value'       => 'image/default-category.png',
        ],
        'topic_width'                  => [
            'category'    => 'media',
            'title'       => _t('Topic Image Width'),
            'description' => _t('Topic image width'),
            'value'       => 320,
            'filter'      => 'int',
        ],
        'topic_height'                 => [
            'category'    => 'media',
            'title'       => _t('Topic Image Height'),
            'description' => _t('Topic image height'),
            'value'       => 240,
            'filter'      => 'int',
        ],
        'topic_thumb_width'            => [
            'category'    => 'media',
            'title'       => _t('Topic thumb width'),
            'description' => '',
            'value'       => 80,
            'filter'      => 'int',
        ],
        'topic_thumb_height'           => [
            'category'    => 'media',
            'title'       => _t('Topic thumb height'),
            'description' => '',
            'value'       => 60,
            'filter'      => 'int',
        ],
        'default_topic_thumb'          => [
            'category'    => 'media',
            'title'       => _t('Default topic thumb'),
            'description' => _t('Path to default topic thumb.'),
            'value'       => 'image/default-topic-thumb.png',
        ],
        'default_topic_image'          => [
            'category'    => 'media',
            'title'       => _t('Default Topic Image'),
            'description' => _t('Path to default image of topic.'),
            'value'       => 'image/default-topic.png',
        ],
        'feature_width'                => [
            'category'    => 'media',
            'title'       => _t('Feature Image Width'),
            'description' => _t('Feature image width'),
            'value'       => 440,
            'filter'      => 'int',
        ],
        'feature_height'               => [
            'category'    => 'media',
            'title'       => _t('Feature Image Height'),
            'description' => _t('Feature image height'),
            'value'       => 300,
            'filter'      => 'int',
        ],
        'default_feature_image'        => [
            'category'    => 'media',
            'title'       => _t('Default Feature Image'),
            'description' => _t('Path to default feature image of article.'),
            'value'       => 'image/default-feature.png',
        ],
        'feature_thumb_width'          => [
            'category'    => 'media',
            'title'       => _t('Feature thumb width'),
            'description' => '',
            'value'       => 80,
            'filter'      => 'int',
        ],
        'feature_thumb_height'         => [
            'category'    => 'media',
            'title'       => _t('Feature thumb height'),
            'description' => '',
            'value'       => 60,
            'filter'      => 'int',
        ],
        'default_feature_thumb'        => [
            'category'    => 'media',
            'title'       => _t('Default feature thumb'),
            'description' => _t('Path to default feature thumb of article.'),
            'value'       => 'image/default-feature-thumb.png',
        ],
        'content_thumb_width'          => [
            'category'    => 'media',
            'title'       => _t('Content thumb width'),
            'description' => '',
            'value'       => 640,
            'filter'      => 'int',
        ],
        'content_thumb_height'         => [
            'category'    => 'media',
            'title'       => _t('Content thumb height'),
            'description' => '',
            'value'       => 360,
            'filter'      => 'int',
        ],

        // SEO
        'seo_keywords'                 => [
            'category'    => 'seo',
            'title'       => _t('Keywords'),
            'description' => _t('Setup head keywords.'),
            'value'       => 0,
            'filter'      => 'int',
            'edit'        => [
                'type'    => 'select',
                'options' => [
                    'options' => [
                        0 => _a('Site default'),
                        1 => _a('Use tag'),
                        2 => _a('Use category'),
                    ],
                ],
            ],
        ],
        'seo_description'              => [
            'category'    => 'seo',
            'title'       => _t('Description'),
            'description' => _t('Setup head description.'),
            'value'       => 0,
            'filter'      => 'int',
            'edit'        => [
                'type'    => 'select',
                'options' => [
                    'options' => [
                        0 => _a('Site default'),
                        1 => _a('Use summary'),
                    ],
                ],
            ],
        ],
    ],
];
