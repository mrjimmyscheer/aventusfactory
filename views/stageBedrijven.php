<style>
.pentagon {
  position: relative;
  width: 200px;
  height: 200px;
  background-color: #555;
  clip-path: polygon(50% 0%, 100% 38%, 81% 92%, 22% 92%, 0% 38%);
  transform: rotate(60deg);
}

.pentagon:before {
  content = "";
  position: absolute;
  top: -5px;
  left: -5px;
  width: 210px;
  height: 210px;
  background: red;
  clip-path: polygon(50% 0%, 100% 38%, 81% 92%, 22% 92%, 0% 38%);
  z-index: -1;
  transform: rotate(60deg);
}

</style>

<!-- <div class="py-16 bg-gray-100" style="margin-bottom: 100px;">
  <div class="max-w-7xl mx-auto">
    <h2 class="font-bold text-5xl" style="max-width: 200px; word-wrap: break-word;">Een stage is een win-win situatie</h2>
  </div>
</div> -->

<div>
  home > Stagebedrijven
</div>

<div class="max-w-7xl mx-auto mb-16">
  <?php for ($i = 0; $i <= 5; $i++): ?>
  <button type="button" class="collapsible w-full text-left px-4 py-4 text-white bg-gray-600 hover:bg-gray-700 rounded-lg text-base font-medium focus:outline-none">
    Verwachtingen
  </button>

  <div class="content px-4 py-4 bg-gray-100 hidden">
    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
      Ducimus laborum optio, eum dignissimos qui non natus architecto ratione ea nulla.
    </p>
  </div>
  <?php endfor; ?>
</div>

<div class="max-w-7xl mx-auto flex justify-center items-center">
  <div class="pentagon">
    <div class="pentagon-outline"></div>
    <img style="transform: rotate(-60deg);" src="./assets/images/femke_nijman.jpg" alt="Femke Nijman" draggable="false">
  </div>
  <div>
    <h2 class="font-bold text-4xl">Vragen?</h2>
    <p>Neem contact op met onze BPV-begeleider</p>

    <a href="#">John-Doe@aventus.nl</a>
    <a href="#">06-12345678</a>
  </div>
</div>