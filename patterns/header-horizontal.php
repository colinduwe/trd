<?php
/**
 * Title: Header with site title and menu. This is the default header in the theme.
 * Slug: trd/header-horizontal
 * Categories: trd-header
 */
?>
<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2em"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-title {"fontSize":"medium"} /-->

		<!-- wp:navigation {"__unstableLocation":"primary","layout":{"type":"flex","setCascadingProperties":"true","justifyContent":"left","orientation":"horizontal","flexWrap":"wrap"}} -->

		<!-- wp:navigation-link {"label":"Work","url":"#","kind":"custom","isTopLevelLink":true} /-->

		<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->

		<!-- wp:navigation-link {"label":"News","url":"#","kind":"custom","isTopLevelLink":true} /-->

		<!-- /wp:navigation -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->