<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $page->title; ?></title>

    <link rel="stylesheet" href="<?php echo $config->urls->templates . 'styles/main.min.css'; ?>">
    <link rel="canonical" href="<?php echo $page->httpUrl; ?>">

    <?php
        if (!empty($this->seoTitle)) {
            echo '<meta name="title" content="' . addslashes($this->seoTitle) . '">';
        }
        if (!empty($this->seoDescription)) {
            echo '<meta name="description" content="' . addslashes($this->seoDescription) . '">';
        }
    ?>

    <style>
        <?php $files->include($config->paths->templates . 'styles/critical.min.css'); ?>
    </style>
</head>
<body class="<?php echo 'page-' . $page->id . ' template-' . $page->template->name; ?>">

<?php $files->include('partials/navigation'); ?>
