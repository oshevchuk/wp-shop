<?php
/**
 * Plugin Name: OS-Plugin
 * Description: this is os-plugin
 * Version: v1.0
 * Author: OShevchuk
 * Created by PhpStorm.
 * User: Oshevchuk
 * Date: 12.09.2017
 * Time: 8:45
 */

register_activation_hook(__FILE__, 'os_install');

function os_install()
{
    global $wp_version;
    if (version_compare($wp_version, '3.6', '<')) {
        wp_die('plugin wp version low');
    }
}

register_deactivation_hook(__FILE__, 'os_deactivation');

function os_deactivation()
{

}

add_option('os_display_mode', 'Light Day');

add_action('admin_menu', 'os_create_menu');
function os_create_menu()
{
    add_menu_page('hallowen plugin', 'halo plug', 'manage_options', 'os_main_menu', 'os_main_plugin_page', plugins_url('/images/Icon_picking.svg', __FILE__));
    add_submenu_page('os_main_menu', 'halo settings page', 'Settings', 'manage_options', 'halloween_settings', 'os_settings_page');
    add_submenu_page('os_main_menu', 'halo support page', 'Support', 'manage_options', 'halloween_support', 'os_support_page');
    add_action('admin_init', 'os_register_settings');
}

function os_register_settings()
{
    register_setting('os-settings-group', 'os_options', 'os_sanitize_options');
}

?>

<?php
function os_settings_page()
{
    ?>
    <div class="wrap">
        <h2>Halo Plugin OPtions</h2>
        <form action="options.php" method="post">
            <?php settings_fields('os-settings-group'); ?>
            <?php $prowp_options=get_option('prowp_options'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Name</th>
                    <td>
                        <input type="text" name="prowp_option[option_name]" value="<?php echo esc_attr($prowp_options['option_name']); ?>">
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Email</th>
                    <td>
                        <input type="text" name="prowp_option[option_email]" value="<?php echo esc_attr($prowp_options['option_email']); ?>">
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Email</th>
                    <td>
                        <input type="text" name="prowp_option[option_url]" value="<?php echo esc_attr($prowp_options['option_url']); ?>">
                    </td>
                </tr>
            </table>
            <p class="submit">
                <input type="submit" class="button-primary" value="Save Changes">
            </p>
        </form>
    </div>

    <?php
}

?>
