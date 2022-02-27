<?php

function get_clb_message_option()
{
    if (empty(get_option('clb_message'))) {
        return "Here yor cookie banner message";
    }
    return get_option('clb_message');
}

function get_clb_policyLink_option()
{
    if (empty(get_option('clb_policyLink'))) {
        return "/#";
    }
    return get_option('clb_policyLink');
}

function get_clb_privacyPolicyLinkText_option()
{
    if (empty(get_option('clb_privacyPolicyLinkText'))) {
        return "Privacy Policy";
    }
    return get_option('clb_privacyPolicyLinkText');
}

function get_clb_necessaryOptionText_option()
{
    if (empty(get_option('clb_necessaryOptionText'))) {
        return "Necessary";
    }
    return get_option('clb_necessaryOptionText');
}

function get_clb_preferencesOptionText_option()
{
    if (empty(get_option('clb_preferencesOptionText'))) {
        return "Preferences";
    }
    return get_option('clb_preferencesOptionText');
}

function get_clb_statisticsOptionText_option()
{
    if (empty(get_option('clb_statisticsOptionText'))) {
        return "Analytics";
    }
    return get_option('clb_statisticsOptionText');
}

function get_clb_marketingOptionText_option()
{
    if (empty(get_option('clb_marketingOptionText'))) {
        return "Marketing";
    }
    return get_option('clb_marketingOptionText');
}

function get_clb_acceptButtonText_option()
{
    if (empty(get_option('clb_acceptButtonText'))) {
        return "Accept";
    }
    return get_option('clb_acceptButtonText');
}

function get_clb_declineButtonText_option()
{
    if (empty(get_option('clb_declineButtonText'))) {
        return "Rejected";
    }
    return get_option('clb_declineButtonText');
}

function get_clb_showDeclineButton_option()
{
    if (empty(get_option('clb_showDeclineButton'))) {
        return 'false';
    }
    return get_option('clb_showDeclineButton');
}

function get_clb_dismissOnScroll_option()
{
    if (empty(get_option('clb_dismissOnScroll'))) {
        return 'false';
    }
    return get_option('clb_dismissOnScroll');
}

function get_clb_showPreferencesOption_option()
{
    if (empty(get_option('clb_showPreferencesOption'))) {
        return 'false';
    }
    return get_option('clb_showPreferencesOption');
}

function get_clb_showStatisticsOption_option()
{
    if (empty(get_option('clb_showStatisticsOption'))) {
        return 'false';
    }
    return get_option('clb_showStatisticsOption');
}

function get_clb_showMarketingOption_option()
{
    if (empty(get_option('clb_showMarketingOption'))) {
        return 'false';
    }
    return get_option('clb_showMarketingOption');
}

function get_clb_managePreferencesButtonText_option()
{
    if (empty(get_option('clb_managePreferencesButtonText'))) {
        return 'Customize';
    }
    return get_option('clb_managePreferencesButtonText');
}

function get_clb_savePreferencesButtonText_option()
{
    if (empty(get_option('clb_savePreferencesButtonText'))) {
        return 'Save preferences';
    }
    return get_option('clb_savePreferencesButtonText');
}

function get_clb_styles()
{
    if (empty(get_option('clb_styles'))) {
        return '{}';
    }
    return get_option('clb_styles');
}

function get_clb_scripts() {
    return get_option('clb_scripts');
}

function get_clb_preferences_scripts() {
    return get_option('clb_preferences_scripts');
}

function get_clb_marketing_scripts() {
    return get_option('clb_marketing_scripts');
}

function get_clb_statistics_scripts() {
    return get_option('clb_statistics_scripts');
}