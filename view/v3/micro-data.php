<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Александр Шитик",
        "url": "https://shitik.by"
    }
</script>

<?php if ($_SERVER['REQUEST_URI'] == '/blog') : ?>
<?php $posts = getPosts(); ?>
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Blog",
        "@id": "https://shitik.by/blog/",
        "mainEntityOfPage": "https://shitik.by/blog",
        "name": "Блог Александра Шитика",
        "description": "Мысли в слух о программировании и не только",
        "publisher": {
            "@type": "Person",
            "@id": "https://shitik.by",
            "name": "Александр Шитик"
        },
        "blogPost": [
            <?php $lastElement = end($posts); ?>
            <?php foreach ($posts as $post) : ?>
            {
                "@type": "BlogPosting",
                "@id": "<?php echo $post['url']; ?>",
                "mainEntityOfPage": "<?php echo $post['url']; ?>",
                "headline": "<?php echo $post['h1']; ?>",
                "name": "<?php echo $post['h1']; ?>",
                "description": "<?php echo $post['metaDescription']; ?>",
                "datePublished": "<?php echo $post['date']['htmlFormat']; ?>",
                "dateModified": "<?php echo $post['date']['htmlFormat']; ?>",
                "author": {
                    "@type": "Person",
                    "@id": "https://shitik.by",
                    "name": "Александр Шитик",
                    "url": "https://shitik.by"
                },
                "image": {
                    "@type": "ImageObject",
                    "@id": "<?php echo $post['preview']; ?>",
                    "url": "<?php echo $post['preview']; ?>",
                    "height": "300",
                    "width": "200"
                },
                "url": "<?php echo $post['url']; ?>"
            }
            <?php if ($post != $lastElement) echo ',' ; ?>
            <?php endforeach; ?>
        ]
    }
</script>
<?php endif; ?>


<?php if (str_contains($_SERVER['REQUEST_URI'], '/blog/')) : ?>
    <?php $post = getCurrentPost(); ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "BlogPosting",
            "@id": "<?php echo $post->url ?>",
            "mainEntityOfPage": "<?php echo $post->url ?>",
            "headline": "<?php echo $post->h1 ?>",
            "name": "<?php echo $post->h1 ?>",
            "description": "<?php echo $post->descriptionForIndexBlog ?>",
            "datePublished": "<?php echo $post->date['htmlFormat'] ?>",
            "dateModified": "<?php echo $post->date['htmlFormat'] ?>",
            "author": {
                "@type": "Person",
                "@id": "https://shitik.by",
                "name": "Александр Шитик",
                "url": "https://shitik.by",
                "image": {
                    "@type": "ImageObject",
                    "@id": "https://shitik.by/themes/v3/images/about/photo.jpg",
                    "url": "https://shitik.by/themes/v3/images/about/photo.jpg",
                    "height": "202",
                    "width": "257"
                }
            },
            "image": {
                "@type": "ImageObject",
                "@id": "<?php echo $post->preview ?>",
                "url": "<?php echo $post->preview ?>",
                "height": "300",
                "width": "200"
            },
            "url": "<?php echo $post->url ?>"
        }
    </script>
<?php endif; ?>