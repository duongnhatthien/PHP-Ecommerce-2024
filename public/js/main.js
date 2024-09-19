document.addEventListener("DOMContentLoaded", () => {
  const inputField = document.getElementById("inputField");
  const inputFieldClass = document.getElementsByClassName("container");
  const inputManageSB = document.getElementsByClassName("ManageSB");
  const overlay = document.createElement("div");

  overlay.className = "overlay";

  document.body.appendChild(overlay);

  inputField.addEventListener("focus", () => {
    overlay.style.display = "block";
    inputFieldClass[0].classList.remove("divInput");
    inputManageSB[0].classList.remove("Sidebar");
  });

  inputField.addEventListener("blur", () => {
    overlay.style.display = "none";
    inputFieldClass[0].classList.add("divInput");
    inputManageSB[0].classList.add("Sidebar");
  });
  function mouseenterAppear() {
    overlay.style.display = "block";
  }
  function mouseleaveDisappear() {
    overlay.style.display = "none";
  }
  inputManageSB[0].addEventListener("mouseenter", mouseenterAppear);
  inputManageSB[0].addEventListener("mouseleave", mouseleaveDisappear);
  var count = 0;
  document.getElementById("toggle6").addEventListener("click", function () {
    if (count % 2 == 0) {
      inputManageSB[0].removeEventListener("mouseenter", mouseenterAppear);
      console.log("Events removed!");
      count++;
      console.log("count now:" + count);
    } else {
      inputManageSB[0].addEventListener("mouseenter", mouseenterAppear);
      console.log("Events removed!");
      count++;
      console.log("count now:" + count);
    }
  });
});

$(document).ready(function () {
  $("#divScroll").toggle();
  $("#divScroll1").toggle();
  $("#divScroll2").toggle();
  $("#divScroll3").toggle();
  $("#divScroll4").toggle();
  $("#divScroll5").toggle();
  $("#divScroll6").toggle();

  // Thêm sự kiện click vào phần tử input
  $("#toggle").click(function () {
    // Cuộn trang đến phần tử có id "section2"
    $("#divScroll").toggle("slow");
  });
  $("#toggle1").click(function () {
    // Cuộn trang đến phần tử có id "section2"
    $("#divScroll1").toggle("slow");
  });
  $("#toggle2").click(function () {
    // Cuộn trang đến phần tử có id "section2"
    $("#divScroll2").toggle("slow");
  });
  $("#toggle3").click(function () {
    // Cuộn trang đến phần tử có id "section2"
    $("#divScroll3").toggle("slow");
  });
  $("#toggle4").click(function () {
    // Cuộn trang đến phần tử có id "section2"
    $("#divScroll4").toggle("slow");
  });
  $("#toggle5").click(function () {
    // Cuộn trang đến phần tử có id "section2"
    $("#divScroll5").toggle("slow");
  });
  $("#toggle6").click(function () {
    // Cuộn trang đến phần tử có id "section2"
    console.log("Toggle6 is click!!!");
    $("#divScroll6").toggle("slow");
    // $(".AddAnimate").toggleClass("ManageSB Sidebar");//dùng để thêm và xoá
    console.log("toggle6 chạy xong");
  });
});
