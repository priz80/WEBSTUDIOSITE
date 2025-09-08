const page1 = document.querySelector(".page-slide");
const page2 = document.querySelector(".page-main");

page1.style.display = "none"; // Скрываем первую страницу

document.getElementById("header-btn").addEventListener("click", () => {
  /* function goToPage2() { */
  /* const page1 = document.querySelector(".page-slide");
  const page2 = document.querySelector(".main-page"); */

  page1.style.display = "block"; // Скрываем первую страницу
  page2.style.display = "none"; // Показываем вторую страницу
  /* } */
});



document.getElementById("refreshBtn").addEventListener("click", () => {
    location.reload(); // Перезагружает страницу
});