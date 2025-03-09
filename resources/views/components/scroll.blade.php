<!-- START OF SCROLL BUTTON FUNCTION -->
<button
  id="scrollButton"
  class="fixed bottom-6 left-6 bg-[#3F53E8] text-white p-4 rounded-full border border-[#3F53E8] 
  rounded-md shadow hover:bg-white hover:text-[#3F53E8] hover:border-[#3F53E8] transition-colors duration-300 ease-in-out"
  aria-label="Scroll"
>
  <span id="arrowIcon" class="arrow-icon">↓</span>
</button>

<script>
  const scrollButton = document.getElementById("scrollButton");
  const arrowIcon = document.getElementById("arrowIcon");

  function isAtTop() {
    return window.scrollY === 0;
  }

  function isAtBottom() {
    return (
      window.innerHeight + window.scrollY >= document.body.offsetHeight
    );
  }

  function toggleScrollBehavior() {
    if (isAtTop()) {
      window.scrollTo({ top: document.body.scrollHeight, behavior: "smooth" });
    } else {
      window.scrollTo({ top: 0, behavior: "smooth" });
    }
  }

  function updateArrowDirection() {
    if (isAtTop()) {
      arrowIcon.textContent = "↓";  
    } else if (isAtBottom()) {
      arrowIcon.textContent = "↑";  
    }
  }

  scrollButton.addEventListener("click", toggleScrollBehavior);

  window.addEventListener("scroll", updateArrowDirection);

  updateArrowDirection();
</script>

<style>
  #scrollButton {
    width: 60px;  
    height: 60px; 
    border-radius: 50%; 
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 16px;  
    margin-bottom: 16px; 
  }

  .arrow-icon {
    font-size: 30px;  
    transition: transform 0.3s ease-in-out;
    display: inline-block;
  }

  .arrow-icon.up {
    transform: rotate(180deg);
  }
</style>
<!-- END OF SCROLL BUTTON FUNCTION -->