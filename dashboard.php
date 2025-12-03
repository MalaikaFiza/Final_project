<?php require_once 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Dashboard — Manage Items</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <style>
    .top-actions { display:flex; gap:12px; align-items:center; margin-top:12px; }
    .search { padding:8px; border-radius:8px; border:1px solid #ddd; }
  </style>
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <a class="logo" href="index.html">Malaika</a>
      <nav class="nav">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="dashboard.php" class="active">Dashboard</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="container">
    <h2>Items Dashboard</h2>
    <div class="top-actions">
      <a href="add_item.php" class="btn">+ Add New</a>
      <input id="searchInput" class="search" placeholder="Search by title..." oninput="loadItems(this.value)">
      <div id="statusMessage" style="margin-left:auto;"></div>
    </div>

    <div id="itemsContainer" style="margin-top:16px;"></div>
  </div>

  <script src="script.js"></script>
  <script>document.addEventListener('DOMContentLoaded', ()=>loadItems());</script>
</body>
</html>
