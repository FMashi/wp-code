function generate_username($user_login, $user_email) {
    $parts = explode('@', $user_email);
    $username = $parts[0] . '_' . rand(1000,9999);
    return $username;
}
add_filter('register_new_user', 'generate_username', 10, 2);
