<?php $this->extend("layouts/layout"); ?>

<?php $this->section("title"); ?>
<?php echo $post["title"]; ?>
<?php $this->endSection(); ?>

<?php $this->section("content"); ?>
    <h1>
        <?php echo $post["title"]; ?>
    </h1>
    <p>
        <?php echo $post["description"]; ?>
    </p>
<?php $this->endSection(); ?>



