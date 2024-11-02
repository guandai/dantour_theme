<?php
// Add custom rewrite rule
add_action('init', 'add_account_orders_rewrite');
function add_account_orders_rewrite(){
    add_rewrite_rule('^account/booking/?$', 'account/', 'top');
}
