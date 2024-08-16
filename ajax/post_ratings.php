<?php
require_once(dirname(dirname(__FILE__)) . '/wp-load.php');

if (isset($_POST['id_post'], $_POST['rating'], $_POST['date'])) {
    global $wpdb;
    $post_id = sanitize_text_field($_POST['id_post']);
    $rating = sanitize_text_field($_POST['rating']);
    $number_rating = sanitize_text_field($_POST['number_rating']);
    $existing_rating = $wpdb->get_row($wpdb->prepare("SELECT * FROM tbl_post_ratings WHERE post_id = %d", $post_id));
    $result = false;
    if (!empty($existing_rating)) {
        $result = $wpdb->update(
            'tbl_post_ratings',
            array(
                'rating' => $rating,
                'number_rating' => $number_rating,
            ),
            array('post_id' => $post_id)
        );
        if ($result !== false) {
            echo json_encode(array('status' => 'success', 'message' => 'Rating updated successfully.'));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Failed to update rating.'));
        }
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'Failed to update rating.1'));
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Missing required fields.'));
    die();
}
