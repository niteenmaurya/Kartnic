<?php
/**
 * The template for displaying search forms in Kartnic
 *
 * @package Kartnic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<form role="search" method="get" id="search-form-search" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <fieldset>
        <div class="sr-form">
            <div>
                <input type="text" name="s" class="search-field" value="<?php the_search_query(); ?>" placeholder="Search..." autofocus>
                <button type="submit">Search</button>
            </div>
        </div>
    </fieldset>
</form>

