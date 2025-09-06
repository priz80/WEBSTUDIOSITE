// Получаем элементы слайдера
const slyder = document.querySelector('.sliderportfolio');
const prevButtons = document.querySelector('.right-arrow');
const nextButtons = document.querySelector('.left-arrow');
const slydes = Array.from(slyder.querySelectorAll('img'));
const slideCounter = slydes.length;
let sliderInd = 0;
/* let sliderI = 1; */

// Устанавливаем обработчики событий для кнопок
prevButtons.addEventListener('click', showPreviousSlide);
nextButtons.addEventListener('click', showNextSlide);

// Функция для показа предыдущего слайда
function showPreviousSlide() {
  sliderInd = (sliderInd - 1 + slideCounter) % slideCounter;
  updateSlider();
}

// Функция для показа следующего слайда
function showNextSlide() {
  sliderInd = (sliderInd + 1) % slideCounter;
  updateSlider();
}

// Функция для обновления отображения слайдера
function updateSlider() {
  slydes.forEach((slide, index) => {

    if (index === sliderInd) {
      slide.style.display = 'block';
    } 
    else if (index === sliderInd + 1) {
      slide.style.display = 'block';
    } 

    else {
      slide.style.display = 'none';
    }

  });
}


// Инициализация слайдера
updateSlider();