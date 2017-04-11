<?php
add_action('show_user_profile', 'blizzpro_author_social_fields');
add_action('edit_user_profile', 'blizzpro_author_social_fields');
add_action('personal_options_update', 'blizzpro_save_author_social_fields');
add_action('edit_user_profile_update', 'blizzpro_save_author_social_fields');

function blizzpro_author_social_fields($user) {
?>
    <h3>Social Media</h3>

    <table class="form-table">
        <tr>
            <th><label for="twitter">Twitter</label></th>
            <td>
                <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr(get_the_author_meta('twitter', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description">Please enter your Twitter username.</span>
            </td>
        </tr>

    </table>
<?php
}

function blizzpro_save_author_social_fields($user_id) {

    if (!current_user_can('edit_user', $user_id)) {
        return false;
    }

    update_usermeta($user_id, 'twitter', $_POST['twitter']);
}