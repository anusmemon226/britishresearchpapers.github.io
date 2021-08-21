// Navbar Active

// var link = document.querySelectorAll('.nav-link');
// link.addEventListener('click',function(){
//     for(var i=0; i<link.length; i++){
//         link[i].style.color = 'orange !important';
//     }
// })
function nav_active(id){
    var link = document.querySelectorAll('.nav-link');
    link.forEach(function(key,value){
      if(value == id){
        key.style.color = 'orange'
      }
   })
}


 
// Click Form 

var discount = document.getElementById('discount');
var clickForm = document.getElementById('click')


window.addEventListener('scroll',function(){
    var scroll = this.scrollY;
    if(scroll > 0){
        clickForm.style.right='-325px'
        // $('#click').css('right','-325px')
    }
    else{
        clickForm.style.right='0px'
        // $('#click').css('right','0px')
    }
})


function clickOpen() {
    if(clickForm.style.right == '0px'){
        clickForm.style.right = '-325px'
        // $('#click').css('right','-325px')
    }else{
        clickForm.style.right = '0px'
        // $('#click').css('right','0px')
    }
}



