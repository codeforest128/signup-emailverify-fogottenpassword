function validateEmail(e){
  var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return regex.test(e);
}
console.log(validateEmail("ka-gi.so.an-dy@gmail.co.za.ie"));

var arr = ["hvbk","hb","hjbib","again"];
console.log(arr.splice(3));
console.log(arr.slice());
