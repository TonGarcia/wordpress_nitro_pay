<?php
/**
 * Displays the UI for setting NitroPay
 *
 * @since      1.0.0
 *
 * @subpackage wordpress_nitro_pay/plugin/view
 * @package    WordPressNitroPay
 *
 */
?>

<div class="wrap">

    <h2>NitroPay Config</h2>

    <form method="post" action="options.php">
        <h2> Main Settings </h2>
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row">App ID</th>
                    <td>
                                <input type="text" name="nitro_pay[app_id]" value="<?php echo $nitro_pay_app_id; ?>" placeholder="NitroPay App id" />
                                <p class="description" ><?php _e('Create a new App on pay.nitrostart.me and paste App Id here', 'nitro_pay_app_id');?></p>
                    </td>
                </tr>

                <tr>
                    <th scope="row">App Secrets</th>
                    <td>
                        <input type="text" name="nitro_pay[app_secret]" value="<?php echo $nitro_pay_app_secret; ?>" placeholder="NitroPay App Secret" />
                        <p class="description" ><?php _e('Create a new App on pay.nitrostart.me and paste App Secret here', 'nitro_pay_app_secret');?></p>
                    </td>
                </tr>
            </tbody>
        </table>

        <?php
            submit_button();
        ?>
    </form>

</div><!-- .wrap -->