//

let isim = prompt("isim giriniz...")
 document.getElementById("myName").innerHTML = isim;

 //


 
//
 
 let datetime = Date(Date.now());

 date = datetime.toString()
 
 let myClock = document.querySelector ("#myClock");
 
 myClock.innerHTML = `${myClock.innerHTML} ${date}`

 //

 

