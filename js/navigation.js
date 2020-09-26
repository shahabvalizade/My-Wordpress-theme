/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */



    jQuery(document).ready(function(){
        jQuery('.burger-menu-container').on('click' , function () {
            jQuery('.burger-menu-container').toggleClass("change");
        })
    });

