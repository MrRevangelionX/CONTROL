<?php
    require_once('./config.php');

    function NuevoItem($name, $description, $quantity, $purch_price, $purch_unit, $sale_price, $sale_unit, $username) {
    $query = "INSERT INTO `productos` 
                    (`id`,
                    `Item_name`,
                    `item_description`,
                    `quantity`,
                    `purchase_price`,
                    `purchase_measurement _unit`,
                    `sales_price`,
                    `sales_measurement_unit`,
                    `created_at`,
                    `created_who`,
                    `last_changed`,
                    `last_changed_who`,
                    `active`)
                VALUES
                    ('',
                    ". $name .",
                    ". $description .",
                    ". $quantity .",
                    ". $purch_price .",
                    ". $purch_unit .",
                    ". $sale_price .",
                    ". $sale_unit .",
                    current_timestamp(),
                    ". $username .",
                    NULL,
                    NULL,
                    '1');";
    Query($query);
    }