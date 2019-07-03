<?php

/**
 * Adds a 'Cookie Law Banner Options' submenu to the 'Settings'
 * menu in the WordPress administration menu.
 */
function cookie_banner_admin_menu()
{
    add_menu_page('Cookie Law Banner Settings', 'Cookie Banner Settings', 'administrator', 'cookie-banner-settings', 'cookie_banner_settings_page', 'dashicons-admin-generic');
}
add_action('admin_menu', 'cookie_banner_admin_menu');

function cookie_banner_settings_page()
{
    ?>
    <div class="wrap">
        <h1>Cookie Law Banner</h1>

        <form method="post" action="options.php">
            <?php
            settings_fields('cookie-banner-setting');
            do_settings_sections('cookie-banner-options');
            submit_button();
            ?>
        </form>
    </div>
<?php
}

add_action('admin_init', 'cookie_banner_settings_page_setup');
function cookie_banner_settings_page_setup()
{
    add_settings_section('cookie-banner-setting', 'Options', null, 'cookie-banner-options');

    add_settings_field('clb_message', 'Banner message', 'setting_clb_message', 'cookie-banner-options', 'cookie-banner-setting');
    add_settings_field('clb_policyLink', 'Policy URL', 'setting_clb_policyLink', 'cookie-banner-options', 'cookie-banner-setting');
    add_settings_field('clb_privacyPolicyLinkText', 'Privacy Policy URL text', 'setting_clb_privacyPolicyLinkText', 'cookie-banner-options', 'cookie-banner-setting');
    add_settings_field('clb_necessaryOptionText', 'Necessary option text', 'setting_clb_necessaryOptionText', 'cookie-banner-options', 'cookie-banner-setting');
    add_settings_field('clb_preferencesOptionText', 'Preferences option text', 'setting_clb_preferencesOptionText', 'cookie-banner-options', 'cookie-banner-setting');
    add_settings_field('clb_statisticsOptionText', 'Statistics option text', 'setting_clb_statisticsOptionText', 'cookie-banner-options', 'cookie-banner-setting');
    add_settings_field('clb_marketingOptionText', 'Marketing option text', 'setting_clb_marketingOptionText', 'cookie-banner-options', 'cookie-banner-setting');
    add_settings_field('clb_acceptButtonText', 'Accept button text', 'setting_clb_acceptButtonText', 'cookie-banner-options', 'cookie-banner-setting');
    add_settings_field('clb_showDeclineButton', 'Show decline button', 'setting_clb_showDeclineButton', 'cookie-banner-options', 'cookie-banner-setting');
    add_settings_field('clb_declineButtonText', 'Decline button text', 'setting_clb_declineButtonText', 'cookie-banner-options', 'cookie-banner-setting');
    add_settings_field('clb_dismissOnScroll', 'Dismiss on scroll', 'setting_clb_dismissOnScroll', 'cookie-banner-options', 'cookie-banner-setting');
    add_settings_field('clb_showPreferencesOption', 'Show preferences checkbox', 'setting_clb_showPreferencesOption', 'cookie-banner-options', 'cookie-banner-setting');
    add_settings_field('clb_showStatisticsOption', 'Show statistics checkbox', 'setting_clb_showStatisticsOption', 'cookie-banner-options', 'cookie-banner-setting');
    add_settings_field('clb_showMarketingOption', 'Show marketing checkbox', 'setting_clb_showMarketingOption', 'cookie-banner-options', 'cookie-banner-setting');
    add_settings_field('clb_styles', 'Styles', 'setting_clb_styles', 'cookie-banner-options', 'cookie-banner-setting');
    add_settings_field('clb_scripts', 'Scripts to block', 'setting_clb_scripts', 'cookie-banner-options', 'cookie-banner-setting');
    
    register_setting('cookie-banner-setting', 'clb_message');
    register_setting('cookie-banner-setting', 'clb_policyLink');
    register_setting('cookie-banner-setting', 'clb_privacyPolicyLinkText');
    register_setting('cookie-banner-setting', 'clb_necessaryOptionText');
    register_setting('cookie-banner-setting', 'clb_preferencesOptionText');
    register_setting('cookie-banner-setting', 'clb_statisticsOptionText');
    register_setting('cookie-banner-setting', 'clb_marketingOptionText');
    register_setting('cookie-banner-setting', 'clb_acceptButtonText');
    register_setting('cookie-banner-setting', 'clb_showDeclineButton');
    register_setting('cookie-banner-setting', 'clb_declineButtonText');
    register_setting('cookie-banner-setting', 'clb_dismissOnScroll');
    register_setting('cookie-banner-setting', 'clb_showPreferencesOption');
    register_setting('cookie-banner-setting', 'clb_showStatisticsOption');
    register_setting('cookie-banner-setting', 'clb_showMarketingOption');

    register_setting('cookie-banner-setting', 'clb_styles');
    register_setting('cookie-banner-setting', 'clb_scripts');

}

function setting_clb_message()
{ ?>
    <input style="width:70%;" type="text" name="clb_message" id="clb_message" value="<?php echo get_option('clb_message'); ?>" />
<?php
}

function setting_clb_policyLink()
{ ?>
    <input style="width:70%;" type="text" name="clb_policyLink" id="clb_policyLink" value="<?php echo get_option('clb_policyLink'); ?>" />
<?php
}

function setting_clb_privacyPolicyLinkText()
{ ?>
    <input style="width:70%;" type="text" name="clb_privacyPolicyLinkText" id="clb_privacyPolicyLinkText" value="<?php echo get_option('clb_privacyPolicyLinkText'); ?>" />
<?php
}

function setting_clb_necessaryOptionText()
{ ?>
    <input style="width:70%;" type="text" name="clb_necessaryOptionText" id="clb_necessaryOptionText" value="<?php echo get_option('clb_necessaryOptionText'); ?>" />
<?php
}

function setting_clb_preferencesOptionText()
{ ?>
    <input style="width:70%;" type="text" name="clb_preferencesOptionText" id="clb_preferencesOptionText" value="<?php echo get_option('clb_preferencesOptionText'); ?>" />
<?php
}

function setting_clb_statisticsOptionText()
{ ?>
    <input style="width:70%;" type="text" name="clb_statisticsOptionText" id="clb_statisticsOptionText" value="<?php echo get_option('clb_statisticsOptionText'); ?>" />
<?php
}

function setting_clb_marketingOptionText()
{ ?>
    <input style="width:70%;" type="text" name="clb_marketingOptionText" id="clb_marketingOptionText" value="<?php echo get_option('clb_marketingOptionText'); ?>" />
<?php
}

function setting_clb_acceptButtonText()
{ ?>
    <input style="width:70%;" type="text" name="clb_acceptButtonText" id="clb_acceptButtonText" value="<?php echo get_option('clb_acceptButtonText'); ?>" />
<?php
}

function setting_clb_declineButtonText()
{ ?>
    <input style="width:70%;" type="text" name="clb_declineButtonText" id="clb_declineButtonText" value="<?php echo get_option('clb_declineButtonText'); ?>" />
<?php
}

function setting_clb_showDeclineButton()
{ ?>
    <input type="checkbox" name="clb_showDeclineButton" id="clb_showDeclineButton" value="true" <?php checked(1, get_option('clb_showDeclineButton'), true); ?>" />
<?php
}

function setting_clb_dismissOnScroll()
{ ?>
    <input type="checkbox" name="clb_dismissOnScroll" id="clb_dismissOnScroll" value="true" <?php checked(1, get_option('clb_dismissOnScroll'), true); ?>" />
<?php
}

function setting_clb_showPreferencesOption()
{ ?>
    <input type="checkbox" name="clb_showPreferencesOption" id="clb_showPreferencesOption" value="false" <?php checked(1, get_option('clb_showPreferencesOption'), true); ?>" />
<?php
}

function setting_clb_showStatisticsOption()
{ ?>
    <input type="checkbox" name="clb_showStatisticsOption" id="clb_showStatisticsOption" value="false" <?php checked(1, get_option('clb_showStatisticsOption'), true); ?>" />
<?php
}

function setting_clb_showMarketingOption()
{ ?>
    <input type="checkbox" name="clb_showMarketingOption" id="clb_showMarketingOption" value="false" <?php checked(1, get_option('clb_showMarketingOption'), true); ?>" />
<?php
}

function setting_clb_styles()
{ ?>
    <textarea style="width:70%;" rows="10" name="clb_styles" id="clb_styles"><?php echo get_option('clb_styles');?></textarea>
<?php
}

function setting_clb_scripts()
{ ?>
    <textarea style="width:70%;" rows="10" name="clb_scripts" id="clb_scripts"><?php echo get_option('clb_scripts');?></textarea>
<?php
}
