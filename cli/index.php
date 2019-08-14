<?php
/**
 * WP-CLI commands for learning purpose.
 *
 * @package WordPress
 * @subpackage Twentysixteen
 */

# Register a custom 'foo' command to output a supplied positional param.
#
# $ wp foo bar --append=qux
# Success: bar qux

/**
 * My awesome closure command
 *
 * <message>
 * : An awesome message to display
 *
 * --append=<message>
 * : An awesome message to append to the original message.
 *
 * @when before_wp_load
 */
$foo = function( $args, $assoc_args ) {
    WP_CLI::success( $args[0] . ' ' . $assoc_args['append'] );
};
WP_CLI::add_command( 'foo', $foo );

/**
 * WP_CLI commands to add 'fwm_user_level` meta_key with default value 1.
 */
function fwm_set_user_role() {
	WP_CLI::log( 'DB operation started...' );
	$all_users = get_users();
	foreach ( $all_users as $user ) {
		if ( update_user_meta( $user->ID, 'fwm_user_level', '1' ) ) {
			WP_CLI::log( 'User meta updated.' );
		}
	}

}

WP_CLI::add_command( 'addmeta', 'fwm_set_user_role' );
