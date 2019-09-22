function openTab(tabName) {
  var i;
  var x = document.getElementsByClassName("tab-pane");
  var y = document.getElementsByClassName("description");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  document.getElementById(tabName).style.display = "block"
  document.getElementById(tabName).style.active = true; 
}

$(document).ready(function() {
	$("li").click(function() {
        // Clear các thẻ li có Class click cũ
            $(".description").css("visibility","visible");
            $("li").removeClass("click");
        // Thêm Class
            $(this).addClass("click");
	});
});
