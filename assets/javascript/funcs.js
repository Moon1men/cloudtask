function hidePassword() {
  var x = document.getElementById("passid");
  var img = document.getElementById("hide")
  if (x.type === "password") {
    img.style.background = "url(assets/img/closedeye.svg)"
    x.type = "text";
  } else {
    img.style.background = "url(assets/img/eye.svg)"
    x.type = "password";
  }
}