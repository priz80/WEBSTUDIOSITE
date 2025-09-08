const page1 = document.querySelector(".page-slide");
const page2 = document.querySelector(".page-main");

page1.style.transform = `translateX(-100%)`; // Скрываем первую страницу

document.getElementById("header-btn").addEventListener("click", () => {
  /* function goToPage2() { */
  /* const page1 = document.querySelector(".page-slide");
  const page2 = document.querySelector(".main-page"); */
  page2.style.transform = `translateX(-100%)`;
  page1.style.transform = `translateX(100%)`;
  /* page1.style.display = "block"; // Скрываем первую страницу
  page2.style.display = "none"; // Показываем вторую страницу */
  /* } */
});



