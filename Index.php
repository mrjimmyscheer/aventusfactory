<?php
include 'meta.php';

?>


<!DOCTYPE html>
<html lang="en">
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

<nav>
    <!-- <img src="./assets/images/AventusLogo.png" alt="Aventus logo"> -->
</nav>
<?php
// echo "hallo vanuit de Index.php";

$page = $_GET['p'] ?? 'home';

echo $page;
// include "$page.php";


?>
<div class="border"><a href="http://localhost/wedotech/pages/home.php">home</a></div>
<a href="http://localhost/wedotech/pages/huidigeStudenten.php">huidige studenten</a>

<footer>

</footer>

</body>
</html>