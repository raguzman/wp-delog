<?php

/*
Plugin Name: WP Delog
Description: Log generator that simplifies code debugging by generating a delog.log file in the WordPress webroot directory. To use, simply include the "delog($var)" function in your code.
Version: 1.0
Author: Ralph Guzman
*/

if ( ! function_exists('delog')) {
   function delog ( $log )  {
       if ( is_array( $log ) || is_object( $log ) ) {
          error_log(print_r($log,1), 3, ABSPATH . "delog.log");
       } else {
          error_log($log . "\n", 3, ABSPATH. "delog.log");
       }
    }
}