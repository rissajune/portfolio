var welcome;  
var date = new Date();  
var hour = date.getHours();  
var minute = date.getMinutes();  
var second = date.getSeconds();  
if (minute < 10) {  
  minute = "0" + minute;  
}  
if (second < 10) {  
  second = "0" + second;  
}  
if (hour < 12) {  
  welcome = "good morning";  
} else if (hour < 17) {  
  welcome = "good afternoon";  
} else {  
  welcome = "good evening";  
}  
document.write("<h2>" + "<font color='pink'>" + welcome + "</font>" + " welcome to my website");  
document.write("<br>" + hour + ":" + minute + ":" + second);  
