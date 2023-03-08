<?php
/**
* Plugin Name: Disable New User Notification
* Plugin URI: https://github.com/ramhee98/disable-new-user-notifications
* Description: This Plugin disables Wordpress sending an email to the Admin when a new User is created.
* Version: 1.0
* Author: ramhee
* Author URI: https://ramhee.ch/
* License: GPL-3.0
* License URI: https://github.com/ramhee98/disable-new-user-notifications/blob/main/LICENSE
*/

/***** this deactivates sending email to admin when a new user is created *****/

function disable_new_user_notification_emails( $user_id ) {
   return null;
}
add_filter( 'new_user_notification_email', 'disable_new_user_notification_emails' );