<?php
    
/**
 * Get shipping methods
 */
 
function fn_settings_variants_addons_smsc_admin_sms_send_shipping()
{
    return fn_smsc_get_shipping_methods();
}

function fn_settings_variants_addons_smsc_customer_sms_send_shipping()
{
    return fn_smsc_get_shipping_methods();
}


/**
 * Get order statuses
 */
 
function fn_settings_variants_addons_smsc_customer_sms_send_order_statuses()
{
    return fn_smsc_get_order_statuses();
}

function fn_settings_variants_addons_smsc_admin_sms_send_order_statuses()
{
    return fn_smsc_get_order_statuses();
}