window.addEventListener("scroll", function () {
  const nav = document.querySelector(".nav");

  if (window.scrollY > 100) {
    // Cambia este valor según cuando quieras que el navbar se haga más pequeño
    nav.style.heigth = "50px";
  } else {
    nav.style.heigth = "100px";
  }
});
