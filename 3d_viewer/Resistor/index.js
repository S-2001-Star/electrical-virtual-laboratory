$(function () {
  $("#btn-1").addClass("active").focus();

  $("#btn-2").on("click", function () {
    if ($(this).hasClass("active")) return;
    $(".pic").hide();
    $(".txt").hide();
    $(".txt-2").show(1200);
    if ($("#btn-1").hasClass("active")) {
      $(".btn2-pos1").show();
    } else if ($("#btn-3").hasClass("active")) {
      $(".btn2-pos2").show();
    }
    $(".btn-group button").removeClass("active");
    $(this).addClass("active");
  });

  // ---------------------------------------------------------------------

  $("#btn-1").on("click", function () {
    if ($(this).hasClass("active")) return;
    $(".pic").hide();
    $(".txt").hide();
    $(".txt-1").show(1200);
    if ($("#btn-3").hasClass("active")) {
      $(".btn1-pos1").show();
    } else if ($("#btn-2").hasClass("active")) {
      $(".btn1-pos2").show();
    }
    $(".btn-group button").removeClass("active");
    $(this).addClass("active");
  });

  // --------------------------------------------------------------------

  $("#btn-3").on("click", function () {
    if ($(this).hasClass("active")) return;
    $(".pic").hide();
    $(".txt").hide();
    $(".txt-3").show(1200);
    if ($("#btn-2").hasClass("active")) {
      $(".btn3-pos1").show();
    } else if ($("#btn-1").hasClass("active")) {
      $(".btn3-pos2").show();
    }
    $(".btn-group button").removeClass("active");
    $(this).addClass("active");
  });
});
