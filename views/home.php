<main>
  <div class="py-16 bg-gray-100" style="margin-bottom: 200px;">
    <div class="max-w-7xl mx-auto">
      <h2 class="font-bold text-5xl" style="max-width: 200px; word-wrap: break-word;">Welkom, ICT student</h2>
    </div>
  </div>

  <div class="max-w-7xl mx-auto flex" style="margin-bottom: 300px;">
    <!-- <h2>Informatie voor je stage</h2> -->
    <?php for ($y = 0; $y <= 2; $y++): ?>
    <div class="card bg-gray-100 p-4" style="border-radius: 6px;">
      <img src="assets/images/aventus-algemeen.jpg" alt="Aventus-alg" style="width: 400px; border-radius: 6px; margin-bottom: 10px;">
      <h3 class="font-bold text-2xl">Informatie opleiding</h3>
      <p style="max-width: 300px; word-wrap: break-word;">um iusto pariatur dolor doloribus quo, possimus quam!</p>
      <button class="bg-gray-200 p-4" style="border-radius: 3px; float: right; margin-top: 40px;">Meer informatie</button>
    </div>
      <?php endfor; ?>
  </div>

  <div class="bg-gray-100 p-10">
    <div class="max-w-6xl mx-auto md:flex justify-between items-center">
      <div class="mb-16 md:mb-0">
        <h2 class="font-bold text-3xl pb-4">Check 'T Filmpje!</h2>
        <p style="max-width: 400px; word-wrap: break-word;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae quibusdam dolores animi</p>
      </div>
      <iframe style="border-radius: 10px; width: 500px; height: 300px;" src="https://www.youtube.com/embed/QBRsLHjoaks" frameborder="0"></iframe>
    </div>
  </div>

  <div class="max-w-7xl mx-auto px-4 py-4">
    <h2 class="font-bold text-3xl mb-8">Meet the team!</h2>

    <div class="grid grid-cols-2 md:">
      <?php for ($x = 0; $x <= 7; $x++): ?>
      <div class="card mb-4">
        <img src="assets/images/kevin_smit.jpg" alt="Kevin" style="width: 134px; height: 150px;">
        <p class="font-bold">John Doe</p>
        <p style="max-width: 150px; word-wrap: break-word;">Docent Software Development</p>
      </div>
      <?php endfor; ?>
    </div>

  </div>
</main>