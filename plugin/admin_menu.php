<?php
    // Create AdminMenu
    function nitro_pay_menu() {
        $page_title = 'Pagamento NitroPay';
        $menu_title = 'NitroPay';
        $capability = 10;
        $menu_slug = 'wordpress_nitro_pay/plugin/view/config.php';
        $callable_function = null;
        $icon_url = '';

        add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $callable_function, $icon_url, $position = 2 );
    }

    // Set AdminMenu to be visible
    add_action( 'admin_menu', 'nitro_pay_menu' );
?>