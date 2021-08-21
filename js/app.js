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
var clickForm1 = $('#click .form')

window.addEventListener('scroll',function(){
     
    var scroll = this.scrollY;
    if(scroll > 0){
        clickForm.style.marginRight='0px'
         clickForm1.fadeOut( "slow")
    }
    else{
         clickForm1.fadeIn( "slow")
        clickForm.style.marginRight='1px'
    }
})


function clickOpen() {
    var discount = document.getElementById('discount');
    // alert(clickForm.style.marginRight)
    if(clickForm.style.marginRight == '1px'){
        clickForm.style.marginRight = '0px'
     clickForm1.fadeOut( "slow")
    }else{
        clickForm.style.marginRight = '1px'
        // clickForm1.show()
        clickForm1.fadeIn( "slow")
        
        
    }
}

// form_Submittion 


function form_submit(id) {
    var array = $('#'+id).serializeArray();
    var ret = 0;
    $.each(array,function(key,value){
        if(value['value'] == ""){
            $('#'+id+' input[name = '+value['name']+']').css('border' , '2px solid red' )
            ret++ ;
        }
        else{
            $('#'+id+' input[name = '+value['name']+']').css('border' , '1px solid #ced4da' )
        }

    });   
    if(ret != 0){
        return false;
    }
        var data = $('#'+id).serialize();
        $.ajax({
            url: 'form_result.php',
            type: 'POST',
            data: data,
            success: function (req) {
                console.log(req)
            }
        })
  
}

