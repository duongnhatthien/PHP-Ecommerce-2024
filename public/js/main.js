document.addEventListener("DOMContentLoaded", () => {
  const inputField = document.getElementById("inputField");
  const overlay = document.createElement("div");
  overlay.className = "overlay";

  document.body.appendChild(overlay);

  inputField.addEventListener("focus", () => {
    overlay.style.display = "block";
  });

  inputField.addEventListener("blur", () => {
    overlay.style.display = "none";
  });
});

$(document).ready(function () {
  $("#divScroll").toggle();
  $("#divScroll1").toggle();
  $("#divScroll2").toggle();
  $("#divScroll3").toggle();
  $("#divScroll4").toggle();
  $("#divScroll5").toggle();

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
});
