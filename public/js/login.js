// scripts.js

document.addEventListener("DOMContentLoaded", function () {
  const showLogin = document.getElementById("show-login");
  const showRegister = document.getElementById("show-register");

  const formRegister = document.querySelector(".form-register");
  const formLogin = document.querySelector(".form-login");

  const navphone = document.getElementById("drawer-navigation");
  const btnshowNav = document.getElementById("showNav");
  const btncloseNav = document.getElementById("btnClose");

  btnshowNav.addEventListener("click", function () {
    navphone.classList.remove("-translate-x-full");
    console.log("event is work");
  });
  btncloseNav.addEventListener("click", function () {
    navphone.classList.add("-translate-x-full");
    console.log("event is work");
  });
  showLogin.addEventListener("click", function (e) {
    e.preventDefault();
    formRegister.classList.remove("active");
    formLogin.classList.add("active");
    formLogin.classList.add("flag");
    showLogin.style.color = "black";
    showRegister.style.color = "rgb(163, 158, 158)";
  });

  showRegister.addEventListener("click", function (e) {
    e.preventDefault();
    formLogin.classList.remove("active");
    formRegister.classList.add("active");
    showRegister.style.color = "black";
    showLogin.style.color = "rgb(163, 158, 158)";
  });

  // Set initial state
  formRegister.classList.add("active");
  $(document).ready(function () {
    // Thêm sự kiện click vào phần tử input
    $("#toggleDown").click(function () {
      // Cuộn trang đến phần tử có id "section2"
      $(".divScroll").slideDown(1000);
    });
    $("#toggleUp").click(function () {
      // Cuộn trang đến phần tử có id "section2"
      $(".divScroll").slideUp(1000);
    });
  });
});
