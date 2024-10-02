// Header scroll
const header = document.getElementById("header");
document.addEventListener("scroll", () => {
  if (window.scrollY > 0) {
    header.classList.add("scroll");
  } else {
    header.classList.remove("scroll");
  }
});

// change placeholder 
function updatePlaceholder() {
  const input = document.getElementById('header-input');
  if (window.innerWidth <= 1023) {
    input.placeholder = "Tìm kiếm";
  } else {
    input.placeholder = "Tìm Kiếm sản phẩm, Danh mục mong muốn....";
  }
}

window.addEventListener('resize', updatePlaceholder);
updatePlaceholder();


//click burger-menu 
const burger = document.getElementById('burger-menu');
burger.addEventListener('click', () => {
  burger.classList.toggle('is-active');
});