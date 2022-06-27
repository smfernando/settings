<?php

/**
 * Add homepage settings to the admin menu
 */

if( ! function_exists( 'ct_setting_page' ) ) {
  add_action( 'admin_menu', 'ct_setting_page' );

  function ct_setting_page() {
    add_menu_page(
      'CT Homepage Settings',
      'CT Homepage Settings',
      'manage_options',
      'ct_homepage_settings',
      'ct_display_homepage_settings',
      get_template_directory_uri(  ) . '/icons/ct-dashicon.svg',
      15
    );
  }
}
/**
 *Include settings page template part
 */
if( ! function_exists( 'ct_display_homepage_settings' ) ) {
  function ct_display_homepage_settings() {
      get_template_part( 'template-parts/settings', 'content' );
  }
}
/**
 * Register homepage settings
 * */

if( ! function_exists( 'ct_homepage_settings_init' ) ){
  function ct_homepage_settings_init(){
    register_setting( 'ct_homepage_settings', 'ct_homepage_settings_logo' );
    register_setting( 'ct_homepage_settings', 'ct_homepage_settings_contact_data' );
    register_setting( 'ct_homepage_settings', 'ct_homepage_settings_social_data' );

    //Register settings sections
    add_settings_section(
      'ct_add_logo_section',  //Id
      'Add your logo here',  //Title
      'ct_add_logo_section_cb',  //Callback
      'ct_homepage_settings' // Page
    );
    //Register settings sections
    add_settings_section(
      'ct_contact_data_section',  //Id
      'Add your contact data below',  //Title
      'ct_contact_data_section_cb',  //Callback
      'ct_homepage_settings' // Page
    );
    //Register settings sections
    add_settings_section(
      'ct_social_links_section',  //Id
      'Add your social media links below',  //Title
      'ct_social_links_section_cb',  //Callback
      'ct_homepage_settings' // Page
    );


    //Register phone fiels
    add_settings_field( 
      'ct_phone_number',  //Id
      'Your Phone Number',  //Name
      'ct_phone_number_cb',  //Callback
      'ct_homepage_settings',  //Page
      'ct_contact_data_section',  //Section
      array(
        'label_for'        => 'phone_number',
        'class'            => 'ct-custom-input',
        'ct_custom_data'   => ''
      )
    );

    //Register address fiels
    add_settings_field( 
      'ct_address',  //Id
      'Your Address Line 1',  //Name
      'ct_address_cb',  //Callback
      'ct_homepage_settings',  //Page
      'ct_contact_data_section',  //Section
      array(
        'label_for'        => 'address',
        'class'            => 'ct-custom-input',
        'ct_custom_data'   => 'custom'
      )
    );
    //Register address fiels
    add_settings_field( 
      'ct_address2',  //Id
      'Your Address line 2',  //Name
      'ct_address2_cb',  //Callback
      'ct_homepage_settings',  //Page
      'ct_contact_data_section',  //Section
      array(
        'label_for'        => 'address2',
        'class'            => 'ct-custom-input',
        'ct_custom_data'   => 'custom'
      )
    );
    //Register fax fiels
    add_settings_field( 
      'ct_fax_number',  //Id
      'Your Fax Number',  //Name
      'ct_fax_cb',  //Callback
      'ct_homepage_settings',  //Page
      'ct_contact_data_section',  //Section
      array(
        'label_for'        => 'fax_number',
        'class'            => 'ct-custom-input',
        'ct_custom_data'   => 'custom'
      )
    );
    //Register facebook fiels
    add_settings_field( 
      'ct_facebook_link',  //Id
      'Add your Facebook link',  //Name
      'ct_facebook_cb',  //Callback
      'ct_homepage_settings',  //Page
      'ct_social_links_section',  //Section
      array(
        'label_for'        => 'facebook',
        'class'            => 'ct-custom-input',
        'ct_custom_data'   => 'custom'
      )
    );
    //Register linkedin fiels
    add_settings_field( 
      'ct_linkedin_number',  //Id
      'Add your LinkedIn link',  //Name
      'ct_linkedin_cb',  //Callback
      'ct_homepage_settings',  //Page
      'ct_social_links_section',  //Section
      array(
        'label_for'        => 'linkedin',
        'class'            => 'ct-custom-input',
        'ct_custom_data'   => 'custom'
      )
    );
    //Register twitter fiels
    add_settings_field( 
      'ct_twitter_number',  //Id
      'Add your Twitter link',  //Name
      'ct_twitter_cb',  //Callback
      'ct_homepage_settings',  //Page
      'ct_social_links_section',  //Section
      array(
        'label_for'        => 'twitter',
        'class'            => 'ct-custom-input',
        'ct_custom_data'   => 'custom'
      )    );
    //Register pinterest fiels
    add_settings_field( 
      'ct_pinterest_number',  //Id
      'Add your Pinterest link',  //Name
      'ct_pinterest_cb',  //Callback
      'ct_homepage_settings',  //Page
      'ct_social_links_section',  //Section
      array(
        'label_for'        => 'pinterest',
        'class'            => 'ct-custom-input',
        'ct_custom_data'   => 'custom'
      )    );
  }
}
add_action( 'admin_init', 'ct_homepage_settings_init');