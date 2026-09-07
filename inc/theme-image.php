<?php
/**
 * Theme image helpers.
 *
 * @package HiGloss2026
 */

if ( ! function_exists( 'higloss_theme_image' ) ) {
    /**
     * Render a theme asset image with explicit dimensions and loading hints.
     *
     * @param string $filename Theme-relative image filename.
     * @param string $alt      Accessible alternative text.
     * @param array  $args     Optional image attributes.
     * @return string
     */
    function higloss_theme_image( $filename, $alt = '', $args = array() ) {
        $defaults = array(
            'width'         => 1408,
            'height'        => 768,
            'loading'       => 'lazy',
            'decoding'      => 'async',
            'fetchpriority' => '',
            'class'         => '',
            'sizes'         => '',
        );

        $args = wp_parse_args( $args, $defaults );
        $src  = HIGLOSS_THEME_URI . '/assets/images/' . ltrim( $filename, '/' );

        $attributes = array(
            'src'    => esc_url( $src ),
            'alt'    => esc_attr( $alt ),
            'width'  => absint( $args['width'] ),
            'height' => absint( $args['height'] ),
        );

        foreach ( array( 'loading', 'decoding', 'fetchpriority', 'class', 'sizes' ) as $attribute ) {
            if ( '' !== $args[ $attribute ] ) {
                $attributes[ $attribute ] = $args[ $attribute ];
            }
        }

        $markup = '<img';

        foreach ( $attributes as $name => $value ) {
            $markup .= sprintf( ' %1$s="%2$s"', esc_attr( $name ), esc_attr( $value ) );
        }

        return $markup . '>';
    }
}
