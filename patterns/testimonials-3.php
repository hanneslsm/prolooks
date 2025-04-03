<?php
/**
 * Title: Testimonials 3
 * Slug: prolooks/testimonials-3
 * Categories: Testimonials
 */
?>
<!-- wp:group {"metadata":{"categories":["feature"],"patternName":"prolooks/prolooks-feature-a1"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"var:preset|spacing|40","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-base-2-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-6"}}},"typography":{"lineHeight":"0","fontSize":"4rem"}},"textColor":"base-6"} -->
<p class="has-base-6-color has-text-color has-link-color" style="font-size:4rem;line-height:0"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */
echo sprintf( esc_html__( '%1$s“%2$s', 'prolooks' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"x-large"} -->
<p class="has-x-large-font-size"><?php /* Translators: 1. is the start of a 'em' HTML element, 2. is the end of a 'em' HTML element */
echo sprintf( esc_html__( '%1$sSit itaque minima aut architecto nesciunt aut vero nobis? Nam autem corporis est ullam natus et doloremque consequatur ut consequatur delectus.%2$s', 'prolooks' ), '<em>', '</em>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */
echo sprintf( esc_html__( '%1$sLorenz Ipsum%2$s', 'prolooks' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('CEO', 'prolooks');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"width":"220px","aspectRatio":"9/16","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.png" alt="" class="" style="aspect-ratio:9/16;object-fit:cover;width:220px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|40","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
