<?php $this->extend("layouts/layout"); ?>

<?php $this->section("title"); ?>
Posts
<?php $this->endSection(); ?>

<?php $this->section("content"); ?>
<h2>Start posts page</h2>

<?php foreach($posts as $post): ?>
    <h1>
        <?php echo $post["title"]; ?>
    </h1>
    <p>
        <?php echo $post["description"]; ?>
    </p>
<?php endforeach; ?>
<?php $this->endSection(); ?>



