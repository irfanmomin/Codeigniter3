<h2><?php echo $item->name . '&ndash; $' . $item->price; ?></h2>

<p><?php echo nl2br( $item->description ); ?></p>

<?php $segments = array( 'purchase', url_title( $item->name, 'dash', true ), $item->id );  ?>
<p class="purchase">
    <a href="<?php echo base_url().implode("/", $segments) ?> ">Purchase
    </a>
</p>