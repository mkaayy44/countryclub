document.addEventListener("DOMContentLoaded", () => {
    const stars = document.querySelectorAll(".star");
    const ratingValue = document.getElementById("rating-value");
  
    stars.forEach((star) => {
      star.addEventListener("click", () => {
        removeSelection();
        star.classList.add("selected");
        const rating = star.getAttribute("data-value");
        ratingValue.textContent = `Rating: ${rating}`;
      });
  
      star.addEventListener("mouseover", () => {
        highlightStars(star);
      });
  
      star.addEventListener("mouseout", () => {
        removeHoverEffect();
      });
    });
  
    function removeSelection() {
      stars.forEach((star) => star.classList.remove("selected"));
    }
  
    function highlightStars(star) {
      star.classList.add("hover");
      let previous = star.previousElementSibling;
      while (previous) {
        previous.classList.add("hover");
        previous = previous.previousElementSibling;
      }
    }
  
    function removeHoverEffect() {
      stars.forEach((star) => star.classList.remove("hover"));
    }
  });
  