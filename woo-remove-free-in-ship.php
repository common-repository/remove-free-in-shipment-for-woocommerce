<?php

/*
* Plugin Name: Remove "Free" in shipment for WooCommerce
* Plugin URI: http://yur4enko.com/category/moi-proekty
* Description: Удаляет надпись "(Бесплатно)" из расчета стоимости в WooCommerce
* Version: 0.1
* Author: Evgen Yurchenko
* Author URI: http://yur4enko.com/
*/

/*  Copyright 2015 Evgen Yurchenko  (email: evgen@yur4enko.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc.
*/

//wp=>4.1.0 php=>5.2.4
class woo_remove_free_in_ship {

    protected function __construct() {//wp=>0.0.0 php=>5.2.4
        return NULL; 
    }

    static function remove_free($label, $method) {//wp=>0.0.0 php=>5.2.4
        return str_replace('(Бесплатно)', '', $label);
    }
}

//wp=>4.1.0 php=>5.2.4
add_filter('woocommerce_cart_shipping_method_full_label',array('woo_remove_free_in_ship','remove_free'),10,2);