<?php
// Add custom rewrite rule
add_action('init', 'add_account_orders_rewrite');
function add_account_orders_rewrite(){
    add_rewrite_rule('^account/orders/?$', 'index.php?account_orders=1', 'top');
}

// Register custom query variable
add_filter('query_vars', 'add_account_orders_query_vars');
function add_account_orders_query_vars($vars){
    $vars[] = 'account_orders';
    return $vars;
}

// Redirect to custom template
add_action('template_include', 'account_orders_template');
function account_orders_template($template){
    if (get_query_var('account_orders') == 1){
        // Locate your custom template file
        $new_template = locate_template(array('account-orders.php'));
        if (!empty($new_template)) {
            return $new_template;
        }
    }
    return $template;
}
