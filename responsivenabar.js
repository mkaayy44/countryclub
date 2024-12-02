
    document.addEventListener("DOMContentLoaded", () => {
   const menuButton = document.querySelector(".menubutton");
   const navigation = document.querySelector(".navi");
 
   // Toggle the menu on click
   menuButton.addEventListener("click", () => {
     navigation.classList.toggle("mobilemenu");
   });
 
   // Ensure the menu resets when resizing to desktop view
   window.addEventListener("resize", () => {
     if (window.innerWidth > 850) {
       navigation.classList.remove("mobilemenu");
     }
   });
 });
  