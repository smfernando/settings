<?php
  function ct_add_logo_section_cb() {
    echo '<p>Select your logo</p>';
  }
  function ct_contact_data_section_cb() {
    echo '<p>Complete the next fields with your contact data</p>';
  }
  function ct_social_links_section_cb() {
    echo '<p>Complete the next fields with your social media links</p>';
  }
  function ct_phone_number_cb($args) {
    $options = get_option( 'ct_homepage_settings_contact_data' );
    $options[$args['label_for']] = isset($options[$args['label_for']]) ? esc_attr( $options[$args['label_for']] ) : '';
    $input_html = "<input type='text' name='ct_homepage_settings_contact_data[{$args['label_for']}]' value='{$options[$args['label_for']]}'>";
    echo $input_html;
  }
  function ct_address_cb($args) {
    $options = get_option( 'ct_homepage_settings_contact_data' );
    $options[$args['label_for']] = isset($options[$args['label_for']]) ? esc_attr( $options[$args['label_for']] ) : '';

    $input_html = "<input type='text' name='ct_homepage_settings_contact_data[{$args['label_for']}]' value='{$options[$args['label_for']]}'>";
    echo $input_html;
  }
  function ct_address2_cb($args) {
    $options = get_option( 'ct_homepage_settings_contact_data' );
    $options[$args['label_for']] = isset($options[$args['label_for']]) ? esc_attr( $options[$args['label_for']] ) : '';

    $input_html = "<input type='text' name='ct_homepage_settings_contact_data[{$args['label_for']}]' value='{$options[$args['label_for']]}'>";
    echo $input_html;
  }
  function ct_fax_cb($args) {
    $options = get_option( 'ct_homepage_settings_contact_data' );
    $options[$args['label_for']] = isset($options[$args['label_for']]) ? esc_attr( $options[$args['label_for']] ) : '';

    $input_html = "<input type='text' name='ct_homepage_settings_contact_data[{$args['label_for']}]' value='{$options[$args['label_for']]}'>";
    echo $input_html;
  }
  function ct_facebook_cb($args) {
    $options = get_option( 'ct_homepage_settings_social_data' );
    $options[$args['label_for']] = isset($options[$args['label_for']]) ? esc_attr( $options[$args['label_for']] ) : '';

    $input_html = "<input type='text' name='ct_homepage_settings_social_data[{$args['label_for']}]' value='{$options[$args['label_for']]}'>";
    echo $input_html;

    return $options[$args['label_for']];
  }
  function ct_linkedin_cb($args) {
    $options = get_option( 'ct_homepage_settings_social_data' );
    $options[$args['label_for']] = isset($options[$args['label_for']]) ? esc_attr( $options[$args['label_for']] ) : '';

    $input_html = "<input type='text' name='ct_homepage_settings_social_data[{$args['label_for']}]' value='{$options[$args['label_for']]}'>";
    echo $input_html;
  }
  function ct_twitter_cb($args) {
    $options = get_option( 'ct_homepage_settings_social_data' );
    $options[$args['label_for']] = isset($options[$args['label_for']]) ? esc_attr( $options[$args['label_for']] ) : '';

    $input_html = "<input type='text' name='ct_homepage_settings_social_data[{$args['label_for']}]' value='{$options[$args['label_for']]}'>";
    echo $input_html;
  }
  function ct_pinterest_cb($args) {
    $options = get_option( 'ct_homepage_settings_social_data' );
    $options[$args['label_for']] = isset($options[$args['label_for']]) ? esc_attr( $options[$args['label_for']] ) : '';

    $input_html = "<input type='text' name='ct_homepage_settings_social_data[{$args['label_for']}]' value='{$options[$args['label_for']]}'>";
    echo $input_html;
  }

?>

<form action="options.php" method="post">
  <?php
    settings_fields( 'ct_homepage_settings' );
    do_settings_sections( 'ct_homepage_settings' );
    submit_button( 'Save' );
  ?>
  
</form>

<?php
function ct_social_data_section_cb(){
  echo '<p>Add your social media links</p>';
}

