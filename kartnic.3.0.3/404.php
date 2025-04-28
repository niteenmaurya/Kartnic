<?php
/**
 *
 *
 * @package Kartnic
 */
get_header();

?>
<div class="site-content container" id="content">
	<div class="content-area">
        
        <div class="inside-article error-page">
            <header class="entry-header">
                <h1 class="entry-title" itemprop="headline">Oops! That page can’t be found.</h1>
            </header>
            <div class="entry-content" itemprop="text">
                <p>It looks like nothing was found at this location. Maybe try searching?</p><form method="get" class="search-form" action="https://kartnic.com/">
                <label>
                    <span class="screen-reader-text">Search for:</span>
                    <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:">
                </label>
                <button class="search-submit" aria-label="Search"><span class="gp-icon icon-search"><svg viewBox="0 0 512 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"><path fill-rule="evenodd" clip-rule="evenodd" d="M208 48c-88.366 0-160 71.634-160 160s71.634 160 160 160 160-71.634 160-160S296.366 48 208 48zM0 208C0 93.125 93.125 0 208 0s208 93.125 208 208c0 48.741-16.765 93.566-44.843 129.024l133.826 134.018c9.366 9.379 9.355 24.575-.025 33.941-9.379 9.366-24.575 9.355-33.941-.025L337.238 370.987C301.747 399.167 256.839 416 208 416 93.125 416 0 322.875 0 208z"></path></svg></span></button></form>
            </div>
        </div>
 
	</div>
	<?php get_sidebar(); ?>	
</div>
</div>
<?php 
	get_footer(); 
?>	