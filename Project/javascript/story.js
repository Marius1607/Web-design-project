function seeMore() {
  var txt = document.getElementById("secondPart");
  var btn = document.getElementById("next");
  if (txt.style.display === "none") {
    txt.style.display = "block";
	btn.innerHTML = "See less";
	
  } else {
    txt.style.display = "none";
	btn.innerHTML = "See more";
  }
}

