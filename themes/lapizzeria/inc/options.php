<?php 

function lapizzeria_options() {
    add_menu_page( 'La Pizzeria', 'La Pizzeria Options', 'administrator', 'lapizzeria_adjustments', 'lapizzeria_adjustments', '', 20);

    add_submenu_page('lapizzeria_adjustments', 'Reservations', 'Reservations', 'administrator', 'lapizzeria_reservations', 'lapizzeria_reservations');
}
add_action('admin_menu','lapizzeria_options');

function lapizzeria_adjustments(){
    //Rest of the code

function lapizzeria_reservations() {
    //Rest of the code
}

?>