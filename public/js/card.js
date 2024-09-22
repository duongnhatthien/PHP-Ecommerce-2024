document.addEventListener("DOMContentLoaded", () => {
  //   const img1 = document.getElementById("img1");
  //   const img2 = document.getElementById("img1");

  //   img1.addEventListener("mousemove", (event) => {
  //     const rect = img1.getBoundingClientRect();
  //     const x = event.clientX - rect.left; // Tọa độ X tương đối với ảnh
  //     const y = event.clientY - rect.top; // Tọa độ Y tương đối với ảnh

  //     if (x < rect.width / 2) {
  //       console.log("Bên trái ảnh");
  //     } else {
  //       carousel.style.transform = "translateX(-200px)";
  //     }
  //   });
  //   img2.addEventListener("mousemove", (event) => {
  //     const rect = img2.getBoundingClientRect();
  //     const x = event.clientX - rect.left; // Tọa độ X tương đối với ảnh
  //     const y = event.clientY - rect.top; // Tọa độ Y tương đối với ảnh

  //     if (x < rect.width / 2) {
  //       carousel.style.transform = "translateX(0px)";
  //     } else {
  //       console.log("Bên phải ảnh");
  //     }
  //   });
  // const imgs = document.getElementsByTagName("img");
  // imgs[0].addEventListener("click", () => {
  //   console.log("Mouse entered img 1");
  // });
  // imgs[1].addEventListener("click", () => {
  //   console.log("Mouse entered img 2");
  // });
  // const carouselTong = document.querySelector(".carouselTong");
  // carouselTong.addEventListener("mouseenter", (e) => {
  //   console.log("Mouse entered:", e.clientX);
  // });
  const carouselContainers = document.querySelectorAll(".carousel-container");
  const carouselimg = document.querySelector(".carousel");
  const firstImage = carouselimg.querySelector("img");
  const imageWidth = firstImage.offsetWidth;
  carouselContainers.forEach((carouselContainer) => {
    const carouselItem = carouselContainer.querySelector(".carousel");
    let startX;
    let currentPosition = 0;
    const maxPosition = -580; // Assuming each image is 290px wide and you have 3 images

    carouselItem.addEventListener("mouseenter", (e) => {
      startX = e.clientX;
      console.log("Mouse entered:", startX);
    });

    carouselContainer.addEventListener("mousemove", (e) => {
      if (startX - e.clientX > 50) {
        // Add a threshold to prevent small movements
        currentPosition = Math.max(maxPosition, currentPosition - 290);
        carouselItem.style.transform = `translateX(${currentPosition}px)`;
        startX = e.clientX;
      } else if (e.clientX - startX > 50) {
        currentPosition = Math.min(0, currentPosition + 290);
        carouselItem.style.transform = `translateX(${currentPosition}px)`;
        startX = e.clientX;
      }
      console.log("mousemove chạy rồi");
    });

    carouselContainer.addEventListener("mouseleave", () => {
      currentPosition = 0;
      carouselItem.style.transform = "translateX(0)";
      console.log("mouseleave chạy r");
    });
  });
});
