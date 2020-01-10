function mB() {
  var height = document.getElementsByClassName("bottom").style.height;
  var newX = screen.height - height;
  var cssString = newX.tostring();
  cssString = "translateY(" + cssString + ");";
  document.getElementsByClassName("bottom").style.transform = cssString;
}
