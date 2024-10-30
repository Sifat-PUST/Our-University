const nav_bar=document.getElementById('nav-links')
const manu= document.getElementById('fa-bars')
const close_manu=document.getElementById('fa-times')

manu.onclick=function(){
    nav_bar.style.right='0';
}
close_manu.onclick=function(){
    nav_bar.style.right='-20vw';
}

const year=document.getElementById('year')

const date=new Date()
year.innerHTML=date.getFullYear()