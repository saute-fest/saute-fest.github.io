function mB() {
  var height = document.getElementsByClassName("bottom").style.height;
  var newX = screen.height - height;
  var cssString = newX.toString();
  cssString = "translateY(" + cssString + ")";
  document.getElementsByClassName("bottom").style.transform = cssString;
}
