<?php
/**
 * Title: Hidden No Results Content
 * Slug: uncommon2023/hidden-no-results-content
 * Inserter: no
 */
?>
<!-- wp:paragraph -->
<p>
<?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'uncommon2023' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'uncommon2023' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'uncommon2023' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'uncommon2023' ); ?>","buttonUseIcon":true} /-->
