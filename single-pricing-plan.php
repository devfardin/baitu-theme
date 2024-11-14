<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header();
?>
<div class="baitu-body">
    <div id="content">
        <div class="single_pricing__slider">
            <?php echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(605); ?>
        </div>
        <div class="single_pricing_content">
            <?php echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(611); ?>
        </div>

    </div>
</div>

<?php
get_footer();