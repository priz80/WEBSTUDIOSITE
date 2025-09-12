const page1 = document.querySelector(".burger")
const page2 = document.querySelector(".burger-x")
const mbr = document.querySelector(".menu-burger")
const menu = document.querySelector(".menu")


  document.querySelector(".burger").addEventListener("click", () => {
    /* document.querySelector(".burger").classList.toggle("menu-burger") */
    /* document.querySelector(".menu-open").classList.toggle("m-menu") */
    page2.style.display = `block`;
    page1.style.display = `none`;
    mbr.style.display = `block`;
    menu.style.display = `block`;
  });

  document.querySelector(".burger-x").addEventListener("click", () => {
    /* document.querySelector(".burger").classList.toggle("menu-burger") */
    /* document.querySelector(".menu-open").classList.toggle("m-menu") */
    page2.style.display = `none`;
    page1.style.display = `block`;
    mbr.style.display = `none`;
    menu.style.display = `none`;
  });