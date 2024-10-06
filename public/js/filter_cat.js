$(".dropdownCheckbox1").toggle();
$("#icon1").on("click", function () {
  $(".dropdownCheckbox1").slideToggle(500);
  if ($("#icon1").hasClass("fa-minus")) {
    $("#icon1").removeClass("fa-minus");
    $("#icon1").addClass("fa-plus");
  } else {
    $("#icon1").removeClass("fa-plus");
    $("#icon1").addClass("fa-minus");
  }
});
