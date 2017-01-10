<?php

function garntante_add_custom_neuigkeit_metabox() {
    add_meta_box(
        'garntante_neuigkeit_meta', // id
        'Neuigkeit anzeigen',
        'garntante_neuigkeit_meta_callback', // callback function
        'neuigkeit',
        'normal', // horizontal positioning
        'high' // priority for positioning (vertical) of the metabox
    );
}
add_action('add_meta_boxes', 'garntante_add_custom_neuigkeit_metabox');

function garntante_neuigkeit_meta_callback() {
    wp_nonce_field(basename(__FILE__), 'garntante_neuigkeit_nonce');
    $checkbox = get_post_meta(get_the_ID(), 'neuigkeit_anzeigen', true)

?>

    <div>
        <div class="meta-row">
            <div class="meta-td">
                <input type="checkbox" name="neuigkeit_anzeigen" value="1" <?php checked(true, $checkbox, true); ?>> Neuigkeit anzeigen<br>
            </div>
        </div>
    </div>
<?php
}

function garntante_neuigkeit_meta_save($post_id) {
    $is_autosave = wp_is_post_autosave($post_id);
    $is_revision = wp_is_post_revision($post_id);
    $is_valid_nonce = isset($_POST['garntante_neuigkeit_nonce']) && wp_verify_nonce($_POST['garntante_neuigkeit_nonce'], basename(__FILE__)) ? true : false;

    if ($is_autosave || $is_revision || !$is_valid_nonce) {
        return;
    }

    update_post_meta($post_id, 'neuigkeit_anzeigen', $_POST['neuigkeit_anzeigen']);


}
add_action('save_post', 'garntante_neuigkeit_meta_save');
