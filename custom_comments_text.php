function custom_comments_text( $translated_text, $text, $domain ) {
  if ( $text === 'Leave a Reply' && $domain === 'default' ) {
    $translated_text = 'Leave a Comment';
  }
  return $translated_text;
}
add_filter( 'gettext', 'custom_comments_text', 20, 3 );
