<html>
  <head><meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
</head>
<style>


@import url('https://fonts.googleapis.com/css2?family=Karla:wght@200&display=swap');

:root {
  
  --grd:linear-gradient(150deg, #0d324d 10%, #ff00cc 84%);
  --size:scale(1);
  --msize:scale(1);
  --mar:1%;
  --dsp:none;
  }
      
  
body{
background-color: #e8e8e8;
font-family: 'Karla', sans-serif;

}

.back{
background-color: #2a2a72;
background:var(--grd);
height:650px;
color:white;
overflow:hidden;

    
}
 

.title{
  font-family:arial;
  font-size:40px;
  font-weight:80;
  margin:15px 0px 10px;
  letter-spacing:5px;    
   transform: var(--msize); 
  transition: all 0.3s ease-in-out;
}
  .head{
      transform: var(--msize); 
  transition: all 0.3s ease-in-out;
   
  }
  
  
  .add{
  
  font-size: 16px;
    font-weight: 5px;
     height: 60px ;
      width: 60px ;
      border-radius:50%;
    border: none ;
    
    background: #00d363;
    color: white;
}
.add:hover {
     background: white;
     color: green;
     box-shadow:2px 3px 8px black;
}

.reset{
  
    font-size: 16px;
    font-weight: 5px;

    border: none ;
  
    background: #DC143C;
    color: white;
      height: 60px ;
      width: 60px ;
      border-radius:50%;
}
.reset:hover {
     background: white;
     color: #DC143C;
     box-shadow:2px 3px 8px black;
}

    
  .done{
  
  font-size: 16px;
    font-weight: 5px;
     height: 35px ;
    display:var(--dsp);
      border-radius:10%;
    border: none ;
    
    background:  #4B0082;
    color: white;
}
.done:hover {
     background: white;
     color:  #4B0082;
     box-shadow:2px 3px 8px black;
}
  
  
  .timer{
 font-family: 'Karla', sans-serif;
  font-size:70px;
      margin: 0%;
    padding-top: 32%;
  font-weight:100;
  letter-spacing:5px; 
color: white;}
 
  .time{
  font-family: Arial;
  width:7%;
    
    font-size:30px;
    margin-top:-2%;
    padding-left:10px;
    color: white;
    
     background: transparent;
  border: none;
  border-bottom: 1px solid grey;
  }

    .circle {
  background-color: rgba(225,225,225,0.03);
  margin:var(--mar);
  height: 210px;
  width: 210px;
  display: inline-block;
  border-radius: 50%;
  box-shadow:5px 7px 12px black;
  backdrop-filter: blur(12px);
  text-align: center;
  transform: var(--size); 
  transition: all 0.3s ease-in-out;
      
}
 
.circle:hover {
  background-color: rgba(225,25,15,0.8);
  transform: scale(1.05); 
    transition: all 0.3s ease-in-out;
  }
  
.box{

padding:20px 10px;
margin-top:-120px;
margin-bottom:25px;
background-color: white;
box-shadow:5px 7px 12px black;
border-radius: 1%;
max-width:80%;
min-height:400px;
text-align:center;
color:black;
overflow:hidden;
    transform: var(--msize); 
  transition: all 0.3s ease-in-out;
}

.form1{
  margin:2% 2%;
  display: inline-block;
  min-height: 35px;
  padding: 6px 16px;
  font-size:20px;
  width: 35%;
  border: none;
  background-color: #f3f3f3;
  transition: all 0.3s ease-in-out;
  }
  
  .form1:hover,.form1:focus {
    font-size:14px;
  background-color: black;
    color:white;
    min-height: 55px;
  }

   table {
        border: 4px solid white;
        color: black;
        border-collapse: collapse;
        margin: 0px 0px 2%;
        padding: 0;
        width: 65%;
         table-layout: fixed;
      }

      table td {
        background-color: #e8e8e8;
        border: 4px solid white;
        margin-top:3px;
        font-weight:80;
        font-size:25px;
        padding-left:3%;
      }

     

 /* css code for mobile view only */ 
  @media screen and (max-width: 500px) {
.title{
    font-size:40px;
  font-weight:80;
 margin:2px 0px 5px;
}

.circle {
 height: 250px;
width: 250px;     
}
    
.box{
margin-top:-90px;
max-width:90%;
min-height:200px;
}
.back{

height:600px;
color:white;
overflow:hidden;  
}    
  
.head{
    font-size:14px;
    
  }
    
    
    
    .add,.reset{
      margin:5% 3% 5%; 
   font-size: 14px;
     height: 50px ;
      width: 50px ;
   
    border-radius:50%;
 
    }
}
  
  
  
</style>
<body>
    <section class='back'>
        <center><h1 class='title'><strong>&#9737;</strong>Focus</h1>
        
        <hr style="width:50%"></div>
        <h1 class="head"> <span id='title'>Pomodoro Timer for <input id='rel'	placeholder="25"
    class='time' type='number'> minutes,<br><br></span> &nbsp; <button class="add" onclick="timer();"> Start</button> &nbsp; <small>or</small>  &nbsp;<button onclick="reset();" class="reset" >Reset</button>  </h1>
 <div class='circle'>    
    
   
<h1 id="cd" class='timer'>01:00</h1>      
                    
          </center>
 </section>  

<center>
<section>
<div class='box' >

  <h1>Add  Goals</h1>
<h4>Fill your task below and click <b>Add</b></h4>

  <center><table id="tbl">   
    
  </table>
    
    <button onclick="done();" id="cmp" class="done"> &#10004; Done</button>
  </center>
  
  <button onclick="lol();" class="reset">Delete</button>
  <input	type="text"  placeholder="Task" id="tsk"
     class="form1"   >
     <button onclick="goal();" class="add">Add</button>
  <br>


<br>
</section>
  </center>


</body>
  
  <script>
    let sb = 300; //300
    let lb = 1200; //300
    let brk= false;
    let time = 0;
    let a = null;
    let startmin=0;
    let bck = "linear-gradient(20deg, #ff00cc 0%, #333399 74%)"
    let set = 0;
    
    

 
function reset() {
  document.documentElement.style.setProperty('--size', "scale(1)") 
  document.documentElement.style.setProperty('--mar', "1%") 
   document.documentElement.style.setProperty('--msize', "scale(1)") 
  document.getElementById("title").innerHTML = " Pomodoro Timer for <input id='rel'	value='1'   onblur='getVal()'   class='time' type='number'> minutes,<br><br>";
  let bk = "linear-gradient(150deg, #0d324d 10%, #ff00cc 84%)"
 document.documentElement.style.setProperty('--grd', bk) 
 
  clearInterval(a);
    const clock = document.getElementById('cd');
    clock.innerHTML = "00:00";
}
//---------------------picking time-----    
  let piktime = document.getElementById('rel')
		piktime.addEventListener('change', (e) => {
     startmin=e.target.value;
			console.log(startmin)
			 let clock =document.getElementById('cd');
      clock.innerHTML = e.target.value+":00";
		})   
    
function timer(){ 

 document.documentElement.style.setProperty('--grd', bck) 
    document.documentElement.style.setProperty('--mar', "2% 0% 4%") 
   document.documentElement.style.setProperty('--size', "scale(1.27)") 
    document.documentElement.style.setProperty('--msize', "scale(0.75)") 
 document.getElementById("title").innerHTML = "Pomodoro Timer for <input id='rel'  onblur='getVal()'   class='time' type='number'> minutes,<br><br>";

clearInterval(a);
time = startmin*60;//60 
const clock = document.getElementById('cd');
   
a = setInterval(updatecd,1000) ;
 
function updatecd() {
const minutes = Math.floor(time/60); 
let seconds = time%60;
 seconds = seconds < 10 ? '0'+ seconds : seconds; 
clock.innerHTML = minutes+":"+seconds ;
time--;

if (time < 10 && brk==false) {
  let fnt = "linear-gradient(20deg, #ED213A 0%, #93291E 74%)"
 document.documentElement.style.setProperty('--grd', fnt) 
}
  
time = time < 0 ? 0 : time;


if (time < 1 && brk==false) {
 brk=true;
 
  //short break
 if (set < 3){ 
   time = sb; //300
   set+=1;
   document.getElementById("title").innerHTML = "&#9835; Short Break Time! &#9835;";
 }
  
  //long break
  
  else {
   time= lb;// 1200
   document.getElementById("title").innerHTML = "&#9835; Long Break Time! &#9835;";
    set = 0;
    done();
 }
 
  
  let fnt = "linear-gradient(20deg, #0bab64 0%, #3bb78f 74%)"
   document.documentElement.style.setProperty('--grd', fnt) 
  document.documentElement.style.setProperty('--size', "scale(1)") 
  document.documentElement.style.setProperty('--mar', "1%") 
   document.documentElement.style.setProperty('--msize', "scale(1)") 
     
 }
  if (time < 1 && brk==true){
    brk=false;
    timer();
  }

}
}
 //------------------updclock-----------
    
    
 //-----------------------Goal---------------------
  let tr = 0;  
    let id = 1;
function goal() {
 
let table =document.getElementById('tbl');
var task = document.getElementById("tsk").value;
tr = "<td  id=t"+id+"> "+id+". "+task+" </td>";
console.log(id);
id++;
   
table.innerHTML += tr;
 document.documentElement.style.setProperty('--dsp', 'block') 
 }

 function lol() {
id--;
let rid= 't'+id;
 
if(id>0){
let task=document.getElementById(rid);
task.remove();

} 
   
}
 
    
     function done() {
id--;
let rid= 't'+id;
 
if(id>0){
let task=document.getElementById(rid);
  task.style.color="white";
  task.style.backgroundColor = "green";
  task.style.textDecoration = "line-through";
  
setTimeout(() => {  task.remove(); }, 15000);

} 
   
}

  
  </script>
</html>
