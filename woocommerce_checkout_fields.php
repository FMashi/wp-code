add_filter( 'woocommerce_checkout_fields' , 'bbloomer_add_field_and_reorder_fields' );
   
function bbloomer_add_field_and_reorder_fields( $fields ) {
   
    // Add New Fields
        
    $fields['billing']['billing_houseno'] = array(
    'label'     => 'House Number',
    'placeholder'   => 'House Number',
    'priority' => 51,
    'required'  => true,
    'clear'     => true
     );
   
    $fields['shipping']['shipping_houseno'] = array(
    'label'     => 'House Number',
    'placeholder'   => 'House Number',
    'priority' => 51,
    'required'  => true,
    'clear'     => true
     );     
      
    return $fields;
}