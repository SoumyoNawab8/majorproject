//For navigation part

function scrllNav(args){
  if(args=='home'){
      
      $(document).ready(function(){
        $('nav').removeClass('blue-gradient');
        $('nav.blue-gradient').css('background-color','transparent');

       
       var iScrollPos = 0;

      $(window).scroll(function () {
          var iCurScrollPos = $(this).scrollTop();
          var cnt=5;

          if (iCurScrollPos > iScrollPos) {
              cnt++;
              //Scrolling Down
              $("nav").css('background','linear-gradient(40deg,#45cafc,#303f9f)');
              $(".navbar").addClass(".nav-bx-shdw");
              $(".navbar").css('box-shadow',' 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12)');
              $("a.btn.btn-assistance.waves-effect").css("border-width","1px");
          } else {
            cnt--;
             //Scrolling Up
             
             

          }
          console.log(iScrollPos);
          // var getScroll=;
          if(document.documentElement.scrollTop==0){
               $("nav").css('background','transparent');
               $(".navbar").css('box-shadow','none');
               $(".navbar").removeClass(".nav-bx-shdw");
               $("a.btn.btn-assistance.waves-effect").css("border-width","0px");
             }
          iScrollPos = iCurScrollPos;

      });
       
      });

  }
  else if(args=='login'){
    $('header').css('display','none');
    $('input').val("");
  }
  else if(args=='registration'){
    $('header').css('display','none');
    // $('input').val("");

  }
  else if(args=='regAPI'){
    $('header').css('display','none');
  }
  else if(args=='adminUI'){
    $('.btn-assistance').css('display','none');
  }
}



//For User Registration
function UserRegister(name,email,cemail,password,siteUrl){
// alert(name+" "+email+" "+cemail+" "+password+""+siteUrl+"mob_rg_1");
var isEmpty=0;
if(name==""){
  $('div.chk1').html('<span class="redValidate">Cant be left Empty!</span>');
  isEmpty++;
}
if(email==""){
  $('div.chk2').html('<span class="redValidate">Cant be left Empty!</span>');
  isEmpty++;
}
if(cemail!=email){
  $('div.chk3').html('<span class="redValidate">Invalid Email!</span>');
  isEmpty++;
}
if(password==""){
  $('div.chk4').html('<span class="redValidate">Cant be left Empty!</span>');
  isEmpty++;
}
if(isEmpty==0){
   $('div.chk1').hide();
   $('div.chk2').hide();
   $('div.chk3').hide();
   $('div.chk4').hide();

   $.ajax({
    url: siteUrl+'mob_rg_1',
    type: "POST",
    data: {
      "name": name,
      "email": email,
      "password": password,
      "siteUrl": siteUrl
       },


  success: function(response){
       var resp=response.split('~');
        if(resp[1]=='True'){
          toastr.success("Registration Succesful");
        }
        else{
          // toastr.error("Registration Failed");
          var temp=resp[1].substr(0,4);
          if(temp=="Dupl"){
            toastr.error("Email id already registered!");
          }
          else{
            toastr.error("Registration failed");
          }
          
        }
    }
  });
}

}

//for User Login functionality
function UserLogin(Email,Password,siteUrl){
  //Validation of the input fields
 var isEmpty=0;
  if(Email == ""){
    isEmpty++;
  }
  if(Password== ""){
    isEmpty++;
  }
//if not Empty will call the AJAX function to call the login backend page
 $.ajax({
  url: siteUrl+'mob_login',
  type: "POST",
  data: {
    "LogEmail": Email,
    "LogPassw": Password
    },
    success:function(response){
      var data=response.split('~');
      
      if(data[1]!="Email not Registered"){
        $('h2 #LoggedUser').text(data[1]);
        $('#non-logged').addClass("animated fadeOut");
        $('#non-logged').hide();
        $('body').css("background-blend-mode","luminosity");
        $('h2').show();
        $('h2').addClass("animated fadeIn");
      }
      else{
        toastr.error(data[1]);
      }
    },
    beforesend:function(){
      $('button#Loginbtn').text("Processing");
    },
    complete:function(){
      // $('button#Loginbtn').text('Welcome');
      
    }


 });

}
// alert("ok");
$(document).ready(function(){
  $("input#product_search").focus(function(){
    $(this).val("");
  })
  $("input#product_search").focusout(function(){
    $(this).val("Search");
  })
});


// Admin User Login
function adminLogin(usrname,password,siteUrl){
  if(password=="next"){
    $.ajax({
      url:siteUrl+'adminlogEngine',
      type:"POST",
      data:{
        "usrname": usrname,
        "password": password
      },
      success:function(response){
        var data=response.split('~');
        var temp=data[1].substr(0,3);
        if(temp!="Inv"){
          $('div.am_log1').hide();
          $('div.am_log2').show();
           $('div.am_log2').addClass('animated fadeIn');
           // alert(data[1])
           $('h5#WelAdm').text(data[1]);

        }

      }
    })
  }
  else{
        $.ajax({
      url:siteUrl+'adminlogEngine',
      type:"POST",
      data:{
        "usrname": usrname,
        "password": password
      },
      success:function(response){
        var data=response.split('~');
        var temp=data[1].substr(0,3);
        if(temp!="Inv"){
          Cookies.set('login', usrname);
            var rUrl=siteUrl+"admin";
                    window.location.href = rUrl;

        }

      }
    })
  }
}


function logout(siteUrl){
  Cookies.set('login', "kol");
  window.location.href=siteUrl;
}