<?php

/**
 * Plugin Name: WP Banner Cookie Law
 * Plugin URI: https://github.com/Palmabit-IT/wp-banner-cookie-law
 * Description: WP Banner Cookie Law is a cookie-info banner compliance with the GDPR and the EU cookie law. It allows the user to give consent in a granular way.
 * Version: 0.0.3
 * Author: Palmabit
 * Author URI: https://www.palmabit.com
 * 
 */

define('COOKIE_LAW_BANNER_PLUGIN_PATH', plugin_dir_path(__FILE__));

function render_cookie_banner()
{
    echo '<div id="_rcl-banner"></div>';
}

add_action('wp_footer', 'render_cookie_banner');


/* React Cookie Law static loader Code For Head Tag */
add_action('wp_head', 'wp_head_cookie_banner');
function wp_head_cookie_banner()
{
    ?>
    <!-- React Cookie Law static loader -->
    <script crossorigin src="https://unpkg.com/@palmabit/react-cookie-law-static-loader@0.7.0/index.js"></script>
    <!-- End React Cookie Law static loader -->
<?php
}

/* Render Cookie Law static loader Code For Head Tag */
add_action('wp_head', 'wp_head_cookie_banner_options');
function wp_head_cookie_banner_options()
{
    ?>
    <script>
        renderCookieBanner({
            elementId: '_rcl-banner', // default "_rcl-banner"
            props: {
                message: "<?php echo get_clb_message_option(); ?>",
                policyLink: "<?php echo get_clb_policyLink_option(); ?>",
                privacyPolicyLinkText: "<?php echo get_clb_privacyPolicyLinkText_option(); ?>",
                necessaryOptionText: "<?php echo get_clb_necessaryOptionText_option(); ?>",
                preferencesOptionText: "<?php echo get_clb_preferencesOptionText_option(); ?>",
                statisticsOptionText: "<?php echo get_clb_statisticsOptionText_option(); ?>",
                marketingOptionText: "<?php echo get_clb_marketingOptionText_option(); ?>",
                acceptButtonText: "<?php echo get_clb_acceptButtonText_option(); ?>",
                declineButtonText: "<?php echo get_clb_declineButtonText_option(); ?>",
                showDeclineButton: <?php echo get_clb_showDeclineButton_option(); ?> ,
                dismissOnScroll : <?php echo get_clb_dismissOnScroll_option(); ?> ,
                showPreferencesOption : <?php echo get_clb_showPreferencesOption_option(); ?> ,
                showStatisticsOption : <?php echo get_clb_showStatisticsOption_option(); ?> ,
                showMarketingOption : <?php echo get_clb_showMarketingOption_option(); ?> ,
                managePreferencesButtonText: "<?php echo get_clb_managePreferencesButtonText_option(); ?>" ,
                savePreferencesButtonText: "<?php echo get_clb_savePreferencesButtonText_option(); ?>" ,
                styles : {
                    <?php echo get_clb_styles(); ?>
                },
            }
        })
    </script>
<?php
}

/* Scripts to block */
add_action('wp_head', 'clb_blockScript');
function clb_blockScript()
{
?>
    <script type="text/plain" class="_rcl">
        <?php echo get_clb_scripts(); ?>
    </script>

    <script type="text/plain" class="_rcl_preferences">
        <?php echo get_clb_preferences_scripts(); ?>
    </script>

    <script type="text/plain" class="_rcl_marketing">
        <?php echo get_clb_marketing_scripts(); ?>
    </script>

    <script type="text/plain" class="_rcl_statistics">
        <?php echo get_clb_statistics_scripts(); ?>
    </script>
<?php
}

require_once COOKIE_LAW_BANNER_PLUGIN_PATH . 'includes/clb-admin-get-clb-options.php';
require_once COOKIE_LAW_BANNER_PLUGIN_PATH . 'includes/clb-admin-settings.php';
