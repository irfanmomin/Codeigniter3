<?php
if ( ! $items ) :
  echo '<p>No items found.</p>';

else :
  echo '<h2>Items</h2>';
  echo '<ul>';

  foreach ( $items as $item ) {
    $segments = array( 'item', url_title( $item->name, 'dash', true ), $item->id );
    echo '<li> <a href="'.implode("/", $segments)  .'">'.$item->name.'</a> &ndash; $' . $item->price . '</li>';
    //echo '<li>' . anchor( $segments, $item->name ) . ' &ndash; $' . $item->price . '</li>';
  }

  echo '</ul>';

endif;