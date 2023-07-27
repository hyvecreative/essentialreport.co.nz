<?php


// Gravity Forms remove TabIndex
add_filter("gform_tabindex", create_function("", "return false;"));


// Gravity Forms remove Scroll to submit
add_filter("gform_confirmation_anchor", create_function("","return false;"));


?>