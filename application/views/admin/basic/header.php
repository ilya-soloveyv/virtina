<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/admin.css">
        <title>Admin</title>
    </head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/admin">Virtina</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item<?php if($this->uri->segment(2) == 'dom') {echo ' active';} ?>"><a class="nav-link" href="/admin/dom">Дома</a></li>
            <li class="nav-item<?php if($this->uri->segment(2) == 'news') {echo ' active';} ?>"><a class="nav-link" href="/admin/news">Новости</a></li>
            <li class="nav-item<?php if($this->uri->segment(2) == 'blog') {echo ' active';} ?>"><a class="nav-link" href="/admin/blog">Энциклопедия</a></li>
        </ul>
    </div>
</nav>