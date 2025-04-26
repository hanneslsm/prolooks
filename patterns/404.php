<?php
/**
 * Title: 404
 * Slug: prolooks/404
 * Inserter: no
 */
?>
<!-- wp:group {"align":"wide","style":{"dimensions":{"minHeight":"100dvh"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide" style="min-height:100dvh"><!-- wp:group {"align":"wide","className":"is-style-section-base-2","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|10","top":"var:preset|spacing|10"}},"border":{"bottom":{"color":"var:preset|color|base-3","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide is-style-section-base-2" style="border-bottom-color:var(--wp--preset--color--base-3);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:template-part {"slug":"header","area":"header","align":"wide"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"dimensions":{"minHeight":"100%"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="min-height:100%;margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","className":"is-style-section-base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"8px","width":"1px"}},"borderColor":"base-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide is-style-section-base-2 has-border-color has-base-3-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:site-logo {"align":"center"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-6"}}}},"textColor":"base-6","fontSize":"xx-large"} -->
<p class="has-text-align-center has-base-6-color has-text-color has-link-color has-xx-large-font-size"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$s404%2$s', 'prolooks' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"4rem"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-size:4rem"><?php esc_html_e('Not Found', 'prolooks');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('The resource requested could not be found on this server.', 'prolooks');?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"11px"} -->
<div style="height:11px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:site-title {"level":0,"textAlign":"center","fontSize":"small"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /--></div>
<!-- /wp:group -->