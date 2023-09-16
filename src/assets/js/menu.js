document.addEventListener("click", (e) => {
  const menu = document.getElementById("menu");

  if (e.target.matches(".btn-menu") || e.target.matches(".btn-menu > *")) {
    if (menu.style.left === "0px") {
      menu.style.left = "-100%";
    } else {
      menu.style.left = "0px";
    }
  }
});

window.addEventListener("resize", (e) => {
  const menu = document.getElementById("menu");

  const windowWidth =
    window.innerWidth ||
    document.documentElement.clientWidth ||
    document.body.clientWidth;

  if (windowWidth > 768) {
    menu.style.left = "0px";
  } else {
    menu.style.left = "-100%";
  }
});
