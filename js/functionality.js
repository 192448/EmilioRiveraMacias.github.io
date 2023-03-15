function hideAll() {
  _length = document.getElementById("selector").length;
  for (let i = 2; i <= _length; i++) {
    document.getElementById("h"+i).style.display = 'none';
  }
  console.log("hideAll ejecutado");
}

function showHomework() {
  var option = ("h" + document.getElementById("selector").value);
  console.log("Showing homework",option);
  for (let i = 1; i <= _length; i++) {
    document.getElementById("h"+i).style.display = 'none';
  }
  document.getElementById(option).style.display = 'block';
}
