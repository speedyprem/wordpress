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