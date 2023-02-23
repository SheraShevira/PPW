function satu() {
  document.getElementById("demo").innerHTML = "Hallo World";
}
function dua() {
  document.getElementById("demo").innerHTML = "Hello Dunia";
}

function konfirmasi() {
  var txt;
  var r = confirm("Apakah mau di hapus?");
  if (r == true) {
    txt = "Data telah dihapus!";
  } else {
    txt = "Kamu batal menghapus data!";
  }
  document.getElementById("konfirmasi").innerHTML = txt;
}

function myAlert() {
  alert("Hello! UPJ");
}

function hitung() {
  var txt;
  var a = parseFloat(document.getElementById("var1").value);
  var b = parseFloat(document.getElementById("var2").value);
  var c = a + b;
  document.getElementById("Hasil").innerHTML = c;
}
