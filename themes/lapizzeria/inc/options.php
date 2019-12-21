<?php 

function lapizzeria_options() {
    add_menu_page( 'La Pizzeria', 'La Pizzeria Options', 'administrator', 'lapizzeria_adjustments', 'lapizzeria_adjustments', '', 20);
}
add_action('admin_menu','lapizzeria_options');

function lapizzeria_adjustments(){
    echo "Hello from lapizzeria_adjustments";
}

?>