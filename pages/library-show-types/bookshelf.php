<div class="bookshelf-wrap">
    <div class="bookshelf">
        <div class="shelf">
            <?php foreach ($books as $book) : ?>
                <div class="book js-open-modal" data-modal="1" data-label="<?php echo $book['title']; ?>" style="background: <?php echo $book['color']; ?>"></div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
