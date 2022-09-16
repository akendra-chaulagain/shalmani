const images = document.querySelectorAll(".img-gallery");
const imagesLight = document.querySelector(".image-pop");
const containerLight = document.querySelector(".image-lightbox");

images.forEach((image) => {
  image.addEventListener("click", () => {
    appearImage(image.getAttribute("src"));
  });
});

const appearImage = (image) => {
  imagesLight.src = image;
  containerLight.classList.add("show");
  imagesLight.classList.add("showImage");
};

containerLight.addEventListener("click", (e) => {
  if (e.target !== imagesLight) {
    containerLight.classList.remove("show");
    imagesLight.classList.remove("showImage");
  }
});
