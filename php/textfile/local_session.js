//set in the localstorage..

localStorage.setItem("hello","Rima");
let user=['Rima','riddhi'];
localStorage.setItem('username',JSON.stringify(user));
localStorage.removeItem("hello");



//get from localStorage...

localStorage.getItem("hello");
JSON.parse(localStorage.getItem("username"));

//set in the Session Storage..

sessionStorage.setItem("hello","Rima");
var user1=['Rima','riddhi'];
sessionStorage.setItem('username',JSON.stringify(user1));
sessionStorage.removeItem("hello");


//get from sessionStorage...

sessionStorage.getItem("hello");
JSON.parse(sessionStorage.getItem("username"));


