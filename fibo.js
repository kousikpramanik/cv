


function fib() {

  var n = document.getElementById("number").value;
  var i;
  var fib0 = 0;
  var fib1 = 1;
  var fib2;
  var values=[0,1];

  if (n <= 1) {
    document.getElementById("output").innerHTML = "Please Enter number grater than one";

    return;
  }

  if(n>50){

    document.getElementById("output").innerHTML = "Maximum Term Should Be 50";
    return;

  }

  for (i = 2; i <= n; i++) {
    fib2 = fib0 + fib1;
    values.push(fib2);
    fib0 = fib1;
    fib1 = fib2;
  }

  var result=values.toString();
  document.getElementById("output").innerHTML = result;

}
