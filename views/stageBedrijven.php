
<style>
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}

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

<div>
  home > Stagebedrijven
</div>

<div class="max-w-7xl mx-auto">
  <button type="button" class="collapsible rounded-lg">Verwachtingen</button>
  
  <div class="content">
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
      Ducimus laborum optio, eum dignissimos qui non natus architecto ratione ea nulla.
      </p>
  </div>
</div>

<div class="max-w-7xl mx-auto">
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



<script>
    var collapsible = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < collapsible.length; i++) {
        collapsible[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>