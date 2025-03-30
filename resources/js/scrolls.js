const scrollButton = document.getElementById("scrollButton");
const arrowIcon = document.getElementById("arrowIcon");

function isAboveMiddle() {
  const middleOfPage = document.body.offsetHeight / 2;
  return window.scrollY + window.innerHeight / 2 < middleOfPage;
}


function toggleScrollBehavior() {
  if (isAboveMiddle()) {

    window.scrollTo({ top: document.body.scrollHeight, behavior: "smooth" });
  } else {

    window.scrollTo({ top: 0, behavior: "smooth" });
  }
}

function updateArrowDirection() {
  if (isAboveMiddle()) {
    arrowIcon.textContent = "↓"; 
  } else {
    arrowIcon.textContent = "↑"; 
  }
}

scrollButton.addEventListener("click", toggleScrollBehavior);
window.addEventListener("scroll", updateArrowDirection);

updateArrowDirection();