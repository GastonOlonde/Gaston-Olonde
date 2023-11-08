let toggle = document.querySelector(".toggle");
let body = document.querySelector('body');

toggle.addEventListener('click',function(){
    body.classList.toggle("open");
})


const logomdp = document.getElementById('logo-mdp');

logomdp.addEventListener('click',function(){
    logomdp.classList.toggle("active");
});


e = true;
function changer(){
    if(e){
        document.getElementById('pass').setAttribute('type','text');
        e = false;
    }else{
        document.getElementById('pass').setAttribute('type','password');
        e = true;
    }
}