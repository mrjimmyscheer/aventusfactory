<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="<?php echo $metaDescription; ?>">
    <meta name="keywords" content="WeDoTech, ICT, ICT opleiding, IT, Software developer, Aventus, Aventus ICT, Aventus software developer, Software development Apeldoorn ">

    <!-- Content die wordt laten zien als de website gedeeld word. -->
    <meta property="og:title" content="WeDoTech - Meld je aan voor een leuke ICT opleiding">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://example.com/image.jpg">
    <meta property="og:description" content="Een website voor een ICT opleiding">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="./scripts/menu.js"></script>

    <title><?php echo $pageTitle; ?></title>
</head>
<body>
  <header>
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">

      <a href="<?php echo $baseLocal; ?>"><img src="assets/images/AventusLogo.png" alt="Aventus logo" style="width: 200px;"></a>

      <nav class="space-x-6 hidden md:flex">
        <a href="<?php echo $baseLocal; ?>huidigeStudenten" class="text-gray-600 hover:text-blue-500">Studenten</a>
        <a href="<?php echo $baseLocal; ?>stagebedrijven" class="text-gray-600 hover:text-blue-500">Voor Bedrijven</a>
        <!-- <a href="#" class="text-gray-600 hover:text-blue-500">Discord link</a> -->
      </nav>

      <!-- Mobile Menu Icon -->
      <button class="md:hidden text-gray-600">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>

      <ul class="content hidden">
        <li><a href="<?php echo $baseLocal; ?>"></a>Home</li>
        <li><a href="<?php echo $baseLocal; ?>huidigeStudenten">Studenten</a></li>
        <li><a href="<?php echo $baseLocal; ?>stagebedrijven">Voor Bedrijven</a></li>
      </ul>
  </header>