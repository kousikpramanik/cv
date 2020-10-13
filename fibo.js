function fib() {

  var n = document.getElementById("number").value;
  var i;
  var fib0 = 0;
  var fib1 = 1;
  var fib2;

  if (n <= 1) {
    document.getElementById("output").innerHTML = "Please Enter number grater than one";

    return;
  }

  for (i = 2; i <= n; i++) {
    fib2 = fib0 + fib1;
    document.write(fib2 + " ")
    fib0 = fib1;
    fib1 = fib2;
  }
}
