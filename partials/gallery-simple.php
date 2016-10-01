<?php
$images = get_field('galerie');

if ($images):
    ?>
    <div class="gallery-simple">
        <?php foreach ($images as $image): ?>
        <figure>
            <img src="<?php echo $image['sizes']['large']; ?>"  srcset="<?php echo $image['sizes']['small']; ?> 320w, <?php echo $image['sizes']['medium']; ?> 600w, <?php echo $image['sizes']['large']; ?> 900w" alt="<?php echo $image['alt']; ?>" />
            <figcaption><?php echo $image['caption']; ?></figcaption>
            </figure>
        <?php endforeach; ?>
    </div>
<?php endif; ?>