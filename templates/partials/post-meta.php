<?php $categories_list = get_the_category_list( __( ', ', 'storefront' ) ); ?>
<div class="post-meta">
  <div class="vcard vcard__image">
    <?php echo get_avatar( get_the_author_meta( 'ID' ), 128 ); ?>
  </div>
  <div class="vcard vcard__info">
    <?php echo '<div class="label">' . esc_attr( __( 'Written by ', 'storefront' ) ) . sprintf( '<a href="%1$s" class="url fn" rel="author">%2$s</a>', esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ), get_the_author() ) . '</div>'; ?>
    <?php if ( $categories_list ) : ?>
      <div class="cat-links">
        <?php
        echo '<div class="label">' . esc_attr( __( 'Posted in ', 'storefront' ) ) . wp_kses_post( $categories_list ) . '</div>';
        ?>
      </div>
    <?php endif; // End if categories. ?>
  </div>
</div>