<?php
    require_once 'wp-load.php';
    if (isset($_POST['submit'])) {
        $username = sanitize_text_field($_POST['code']);
        $password = $_POST['motdepasse'];

        $credentials = array(
            'user_login' => $username,
            'user_password' => $password,
            'remember' => true
        );

        $user = wp_signon($credentials, false);

        if (is_wp_error($user)) {
            echo '<p class="error-message">Identifiants incorrects. Veuillez réessayer.</p>';
        } else {
            wp_redirect(admin_url());
            exit;
        }
    }
?>