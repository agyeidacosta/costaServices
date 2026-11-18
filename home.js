
let humbuger=document.getElementById("humbuger1");
let close=document.getElementById("close1"); 
let search=document.querySelectorAll("#navClass1 a"); 


/*menu button*/
humbuger.addEventListener('click',()=>{
navClass1.classList.add("open")
});


/*close button*/
close.addEventListener('click',()=>{
navClass1.classList.remove("open")
});




/*Search button*/
search.forEach(link=>{
link.addEventListener('click',()=>{
navClass1.classList.remove("open")
})
})



// toggle theme button

const toggleBtn=document.getElementById('themetoggle');
if(localStorage.getItem("theme")==="dark"){
    document.body.classList.add('dark'); 
}
toggleBtn.addEventListener('click',()=>{
    const isDark=document.body.classList.toggle("dark");
    localStorage.setItem("theme",isDark?"dark":"light");
})