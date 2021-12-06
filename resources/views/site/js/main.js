// animação do header
const header = document.querySelector("header");
const meioheader = document.querySelector("div.meioheader");
const logo = document.querySelector("div.logo");
window.addEventListener("scroll", () => {
  header.classList.toggle("headerscroll", window.scrollY > 0);
  meioheader.classList.toggle("meioheaderscroll", window.scrollY > 0);
  logo.classList.toggle("logoscroll", window.scrollY > 0);
});

// menu navegação/hamburg
const menuhamburg = document.getElementById('btnmenu');

function toggleMenu() {
  const nav = document.getElementById('nav');
  nav.classList.toggle('menuactive');
}
menuhamburg.addEventListener('click', toggleMenu);

// slide de atividades
var slideIndex = 1;
showSlides(slideIndex);
// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}
// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if(slides.length != "0"){
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
  }
};

//modal
function iniciaModal(modalID) {
  const modal = modalID;
  const bodyhidden = document.querySelector('body')
  if(modal){
    modal.classList.add('show');
    bodyhidden.classList.add('hidden');
    modal.addEventListener('click', (e) => {
      if(e.target.className == 'modalContainer show' || e.target.className == 'btnFechar') {
        modal.classList.remove('show');
        bodyhidden.classList.remove('hidden');
      }
    });
  }
}
const clickBTN = document.querySelector(".buttonQuartos");
const selectModal = document.querySelector('.modalContainer');
if(selectModal != null){
  clickBTN.addEventListener('click', () => iniciaModal(selectModal));
}

// back to top
// target
var target = document.querySelector("footer");

var scrollToTopBtn = document.querySelector(".scrollToTopBtn");
var rootElement = document.documentElement;


function callback(entries, observer) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      scrollToTopBtn.classList.add("showBtn");
    } else {
      scrollToTopBtn.classList.remove("showBtn");
    }
  });
}

function scrollToTop() {
  rootElement.scrollTo({
    top: 0,
    behavior: "smooth"
  });
}
scrollToTopBtn.addEventListener("click", scrollToTop);

let observer = new IntersectionObserver(callback);
observer.observe(target);
// end main