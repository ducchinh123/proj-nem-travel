<?php

// Load WordPress environment
require_once(dirname(dirname(__FILE__)) . '/wp-load.php');

// Handle the AJAX request
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])) {
    // Sanitize and validate the form data
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);
    $created_at = current_time('mysql');

    // Insert the form data into the database
    global $wpdb;
    $table_name = 'tbl_contact'; // Replace 'tbl_contact' with your actual table name

    if(!empty($message)) {
        // Prepare the SQL query
    $sql = $wpdb->prepare(
        "INSERT INTO $table_name (name, email, phone, message, created_at) VALUES (%s, %s, %s, %s, %s)",
        $name, $email, $phone, $message, $created_at
    );

    // Execute the query
    $result = $wpdb->query($sql);

    if ($result === false) {
        $error_message = $wpdb->last_error; // Get the last database error
        // Return JSON response for error
        wp_send_json_error(array('status' => 'error', 'message' => 'Không thể lưu thông tin vào cơ sở dữ liệu.', 'db_error' => $error_message));
    } else {
        // Return JSON response for success
        wp_send_json_success(array('status' => 'success'));
    }
    
    }

} else {
    header('Location: /404');
    die;
}
