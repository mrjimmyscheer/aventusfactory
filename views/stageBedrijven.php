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
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	height: 0;
	width: 200px;
	border-top: 180px solid rgb(0, 66, 128);
	border-left: 90px solid transparent;
	border-right: 90px solid transparent; 
	}

	.pentagon:after{
	position: absolute;
	content: '';
	border-bottom: 180px solid rgb(0, 66, 128);
	border-left: 180px solid transparent;
	border-right: 180px solid transparent;
	bottom: 200px;
	left: -90px;
	}

</style>

<button type="button" class="collapsible">Verwachtingen</button>

<div class="content">
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
    Ducimus laborum optio, eum dignissimos qui non natus architecto ratione ea nulla.
    </p>
</div>

<div class="pentagon"></div>

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