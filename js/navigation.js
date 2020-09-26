/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */



    jQuery(document).ready(function(){
        jQuery('.burger-menu-button').on('click' , function () {
            jQuery('.burger-menu-button').toggleClass("change");

            if (jQuery('#primary-burger-menu').css('display') === 'none'){
                jQuery('#primary-burger-menu').css('display', 'flex');
            }
            else{
                jQuery('#primary-burger-menu').css('display', 'none');
            }
        })

    });

