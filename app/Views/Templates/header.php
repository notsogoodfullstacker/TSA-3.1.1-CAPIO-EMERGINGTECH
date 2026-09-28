<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url('/') ?>">POS Foundations</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('/about') ?>">About</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('/customers') ?>">Customer Accounts</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('/users') ?>">User Accounts</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container"></div>