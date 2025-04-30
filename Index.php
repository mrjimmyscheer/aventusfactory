<?php
  include 'meta.php';

  $baseLocalPage = 'http://localhost/wedotech/pages/';
  $baseLocal = 'http://localhost/wedotech/';

  $baseSecure = 'https://wedotech.nl/';
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta content="description" content="<?php echo $metaDescription; ?>">
    <meta name="keywords" content="WeDoTech, WeTech, WeDo, ITC, CTI, ICT, ICT opleiding, IT, Software developer, Aventus, Aventus ICT, Aventus software developer, Software development Apeldoorn, ">

    <!-- Content die wordt laten zien als de website gedeeld word. -->
    <meta property="og:title" content="WeDoTech - Meld je aan voor een leuke ICT opleiding">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://example.com/image.jpg">
    <meta property="og:description" content="Een website voor een ICT opleiding">

    <script src="https://cdn.tailwindcss.com"></script>

    <title><?php echo $pageTitle; ?></title>
</head>
<body>
  <header class="bg-white">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">

      <a href="<?php echo $baseLocal; ?>index.php"><img src="assets/images/AventusLogo.png" alt="Aventus logo" style="width: 200px;"></a>

      <nav class="space-x-6 hidden md:flex">
        <a href="#" class="text-gray-600 hover:text-blue-500">Studenten</a>
        <a href="#" class="text-gray-600 hover:text-blue-500">Voor Bedrijven</a>
        <a href="#" class="text-gray-600 hover:text-blue-500">Discord link</a>
      </nav>
      <!-- Mobile Menu Icon -->
      <button class="md:hidden text-gray-600">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
  </header>

  <main>
    <div class="container flex justify-center items-center" style="margin-bottom: 300px;"> <!-- placeholder div -->
      <div class="card bg-gray-100 p-4" style="border-radius: 6px;">
        <img src="assets/images/aventus-algemeen.jpg" alt="Aventus-alg" style="width: 400px; border-radius: 6px; margin-bottom: 10px;">
        <h3 class="font-bold">Informatie opleiding</h3>
        <p>Lorem ipsum dolor sit amet.<p>
        <button class="bg-gray-200 p-4" style="border-radius: 3px; float: right;">Meer informatie</button>
      </div>
    </div>
    <div class="bg-gray-100 max-w-full flex justify-center items-center p-4 ">
      <h2>Check 'T Filmpje!</h2>
      <iframe style="border-radius: 10px;" width="854" height="480" src="https://www.youtube.com/embed/watch?v=QBRsLHjoaks" frameborder="0"></iframe>
    </div>
    <div class="max-w-7xl mx-auto px-4 py-4">
      <h2>Meet the team!</h2>
    
      <div class="card">
        <img src="assets/images/kevin_smit.jpg" alt="Kevin" style="width: 200px;">
        <p class="font-bold">John Doe</p>
        <p>Docent Software Development</p>
      </div>
    </div>
  </main>

  <?php
      // $page = $_GET['p'] ?? 'home'; // Haal pagina op uit de URL. Als deze niet bestaat, haal dan de homepagina op.
      // include "pages/$page.php";
  ?>

  <footer class="bg-gray-100 mt-16">
    <div class="max-w-7xl mx-auto px-4 py-8 flex flex-col md:flex-row justify-between items-center text-center md:text-left">
      <p class="text-gray-500">&copy; 2025 MyWebsite. All rights reserved.</p>
      <div class="mt-4 md:mt-0 space-x-4">
        <a href="https://www.instagram.com/aventusmbo/" class="">Insta</a>
        <a href="https://www.facebook.com/aventus.school" class="">Facebook</a>
        <a href="https://www.youtube.com/@OntdekAventus" class="">YT</a>
        <a href="https://www.tiktok.com/@aventusmbo" class="">Tiktok</a>
        <a href="#" class="">Linkedin</a>
      </div>
    </div>
  </footer>
</body>
</html>
