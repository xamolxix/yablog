<?php $_extends = 'app/templates/layout.php' ?>

<h1><?php echo $_title ?></h1>
<ul>
    <?php foreach ($posts as $post): ?>
        <li>
            <a href="/post/show/<?php echo $post['slug'] ?>"> <?php echo $post['title'] ?></a>
        </li>
    <?php endforeach; ?>
</ul>
