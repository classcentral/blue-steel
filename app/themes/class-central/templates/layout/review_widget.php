<!-- review widget -->
<?php if (get_field('add_review_widget')) : ?>
<div class="wideBlock" itemprop="review" itemscope itemtype="http://schema.org/Review">
<meta itemprop="author" content = "<?php the_field('widget_reviewer_name') ?>"/>
<meta itemprop="name" content="Course Review: <?php the_field('widget_review_title') ?> offered by <?php the_field('widget_institution') ?> on <?php the_field('widget_provider') ?>">

<div class="reviewWidget">

<div class="reviewWidget_topBar">
    <svg role="logo" aria-label="class central logo" viewBox="0 0 332 32" class="class-central-logo">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cc-logo"></use>
    </svg>
    <span class="reviewWidget_topBar_title">Review</span>
    <a href="https://www.class-central.com" class="reviewWidget_topBar_link">class-central.com</a>
</div>

<div class="reviewWidget_header">
    <span class="reviewWidget_title" itemprop="about"><?php the_field('widget_review_title') ?></span>
</div>

<div class="reviewWidget_body">
    <div class="reviewWidget_info">
        <div class="reviewWidget_info_block reviewWidget_info_block-provider">
            <div class="reviewWidget_info_icon">
                <svg class="icon icon-provider-icon" viewBox="0 0 38 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-provider-icon"></use></svg>
            </div>
            <div class="reviewWidget_info_text"><?php the_field('widget_provider') ?></div>
        </div>
        <div class="reviewWidget_info_block reviewWidget_info_block-institution">
            <div class="reviewWidget_info_icon">
                <svg class="icon icon-institution-icon" viewBox="0 0 22 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-institution-icon"></use></svg>
            </div>
            <div class="reviewWidget_info_text"><?php the_field('widget_institution') ?></div>
        </div>
        <div class="reviewWidget_info_block reviewWidget_info_block-duration">
            <div class="reviewWidget_info_icon">
                <svg class="icon icon-calendar-icon" viewBox="0 0 32 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-calendar-icon"></use></svg>
            </div>
            <div class="reviewWidget_info_text"><?php the_field('widget_duration') ?> weeks</div>
        </div>
        <div class="reviewWidget_info_block reviewWidget_info_block-intensity">
            <div class="reviewWidget_info_icon">
                <svg class="icon icon-clock-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-clock"></use></svg>
            </div>
            <div class="reviewWidget_info_text"><?php the_field('widget_intensity') ?> hours/week</div>
        </div>
        <div class="reviewWidget_info_block reviewWidget_info_block-difficulty">
            <div class="reviewWidget_info_icon">
                <svg class="icon icon-bargraph-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-bargraph"></use></svg>
            </div>
            <div class="reviewWidget_info_text"><?php the_field('widget_difficulty') ?></div>
        </div>
    </div>
    <div class="reviewWidget_text"  itemprop="description">
       <?php the_field('widget_content_text') ?>
    </div>
</div>

<div class="reviewWidget_footer">
    <div class="reviewWidget_footer_ccRating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
        <meta itemprop="ratingValue" content="<?php the_field('widget_cc_rating') ?>">
        <meta itemprop="worstRating" content = "1"/>
        <meta itemprop="bestRating" content = "5"/>
        <svg class="icon icon-cc-logo-circle" viewBox="0 0 32 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cc-logo-circle"></use></svg>
        <div class="starRating rating<?php the_field('widget_cc_rating') ?>">
            <div class="starRating_star">
                <svg class="starRating_starShape starRating_starShape-blank">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-full">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                </svg>
            </div>
            <div class="starRating_star">
                <svg class="starRating_starShape starRating_starShape-blank">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-full">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                </svg>
            </div>
            <div class="starRating_star">
                <svg class="starRating_starShape starRating_starShape-blank">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-full">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                </svg>
            </div>
            <div class="starRating_star">
                <svg class="starRating_starShape starRating_starShape-blank">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-full">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                </svg>
            </div>
            <div class="starRating_star">
                <svg class="starRating_starShape starRating_starShape-blank">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-full">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                </svg>
            </div>
        </div>
    </div>

    <div class="reviewWidget_footer_communityRating">
        <span class="communityRating_text">Community Rating</span>
        <div class="starRating rating<?php the_field('widget_community_rating') ?> starRating-small starRating-gray">
            <div class="starRating_star">
                <svg class="starRating_starShape starRating_starShape-blank">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-full">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                </svg>
            </div>
            <div class="starRating_star">
                <svg class="starRating_starShape starRating_starShape-blank">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-full">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                </svg>
            </div>
            <div class="starRating_star">
                <svg class="starRating_starShape starRating_starShape-blank">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-full">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                </svg>
            </div>
            <div class="starRating_star">
                <svg class="starRating_starShape starRating_starShape-blank">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-full">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                </svg>
            </div>
            <div class="starRating_star">
                <svg class="starRating_starShape starRating_starShape-blank">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-full">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                </svg>
                <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                </svg>
            </div>
        </div>
        <a href="<?php the_field('rating_bubble_link') ?>" class="number-of-ratings-bubble"><?php the_field('rating_bubble_count') ?></a>
    </div>

    <a href="<?php the_field('go_to_class_link') ?>" target="_blank" class="reviewWidget_footer_button">Go To Class</a>
</div>
</div>
</div>
<?php endif; ?>
<!-- review widget end -->
