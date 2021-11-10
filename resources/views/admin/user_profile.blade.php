@extends('admin.index')
@section('Title','User Profile')
@section('breadcrumbs','User Profile')
@section('breadcrumbs_link','/user_profile')
@section('breadcrumbs_title','User Profile')
@section('content')


<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="dropjone/dropzone.min.js"></script>
<link rel="stylesheet" type="text/css" href="dropjone/dropzone.min.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="container">
@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade in">
            <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> {{ Session::get('success') }}
    </div>
   
@endif
     <div>
        <h2>User Profile</h2><hr>
     </div>
       @php

       $role_id_get=DB::table('role_user')->where('user_id',Auth::user()->id)->first();
        $role_data=DB::table('roles')->where('id',$role_id_get->role_id)->first();
        $permission_id=DB::table('permission_role')->where('role_id',$role_data->id)->get();
       @endphp
         
       @foreach($permission_id as $permission_id_fetch)
          
           @php
           $permission_role_based[]=DB::table('permissions')->where('id',$permission_id_fetch->permission_id)->first();
          
           @endphp
          
       @endforeach 
       @php
        
       @endphp
      
<div class="col-sm-12">

    <div class="col-sm-6">
      <div class="image_part">
        <img style="width: 20%" src="img/blankavatar.png">
     </div>
    </div>

    <div style="float: right;margin-top: 20%;" class="col-sm-6">
        <table style=" border: 1px black solid;" class="table table-responsive">
                <thead>
                    <tr>
                        <td>Last Login</td>
                        <td>{{date('d-M-y')}}</td>

                    </tr>

                    <tr>
                      <td>Permission</td>
                      <td>
                      
                           @foreach($permission_role_based as $permission_role)
                          @if($permission_role->description=="Content Permission")
                          {{$permission_role->display_name}}
                         @endif
                         
                        @endforeach
                      </td>
                    </tr>


                    <tr>
                      <td>Role</td>
                      <td>{{$role_data->name}}</td>
                    </tr>



                    <tr style="background: #37414B;color:#fff">
                      <td class="text-center" colspan="2">{{Session::get('school.system_name')}}( {{Session::get('school.school_eiin')}} )</td>
                    </tr>
                </thead>
            </table>
    </div>
</div>



<div class="col-sm-12">
    <div class="col-sm-6">
        <div>
            <table class="table-responsive">
                <thead>
                    <tr>
                        <td>{{Auth::user()->name}}</td>
                      
                    </tr>
                    <tr><td>{{$role_data->name}}</td></tr>
                    <tr><td>{{Session::get('school.system_name')}}( {{Session::get('school.school_eiin')}} )</td></tr>
                    <tr><td style="color:green"><i class="fa fa-circle-thin" aria-hidden="true"></i> &nbsp {{Auth::user()->status}}</td></tr>
                </thead>
            </table>
        </div>
    </div>



</div>


<div class="col-sm-12">
  <div class="col-sm-6">

    <table  style="width: 50%;margin-top: 12%;" class="table table-responsive">
                <thead>
                    <tr style="background: #37414B;color:#fff">
                      <td class="text-center" colspan="2">Which Module Are You Access In</td>
                    </tr>
                      @foreach($permission_role_based as $module_permission)
                          @if($module_permission->description=="MODULE")     
                    <tr>
                        <td>{{$module_permission->display_name}}</td>


                    </tr>
                    @endif
                    
                    @endforeach



                </thead>
            </table>
  </div>
    <p style="color:red">Have More Module But We dont disclose this Have Security Purpose</p>
  </div>

</div>



<div class="container">
  <div class="row">
      <div class="col-sm-12">

  {{Form::open(['url'=>"/user_profile/".Auth::user()->id,'class'=>'form-horizontal','method'=>'put','name'=>'basic_validate','id'=>'basic_validate','novalidate'=>'novalidate'])}}
              <div class="container">
          <h1 class="heading-primary"></h1>
          <div class="accordion">
            <dl>
              <dt>
                <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">Basic Information</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
                  <table class="table table-responsive">
                    <thead>
                        <tr>
                          <td>Name</td>
                          <td>
                          {{Form::text('name',Auth::user()->name,['id'=>'required','placeholder'=>'Name','title'=>'name'])}}
                          </td>
                        </tr>

                        <tr>
                          <td>Birth Date</td>
                          <td>
                           {{Form::date('date',Auth::user()->date,['id'=>'required','placeholder'=>'Date','title'=>'name'])}}
                          </td>
                        </tr>

                        <tr>
                          <td>Gender</td>
                          <td style="display: inline-flex;">
                          @if(Auth::user()->gender=="Female")
                            <label>
                           <input type="radio" value="Female" checked="checked" class="gender" name="gender"/>
                            Female</label> 
                           <label>
                            <input type="radio" value="Male" class="gender" name="gender"/>
                           Male</label> 
                          @elseif(Auth::user()->gender=="Male")
                            <label>
                           <input type="radio" value="Female" class="gender" name="gender"/>
                            Female</label> 
                           <label>
                            <input type="radio" value="Male" checked="checked" class="gender" name="gender"/>
                           Male</label>
                           @else
                            <label>
                           <input type="radio" value="Female" class="gender" name="gender"/>
                            Female</label> 
                           <label>
                            <input type="radio" value="Male" class="gender" name="gender"/>
                           Male</label>
                          @endif

                           
                          </td>
                        </tr>

                        <tr>
                            <td>Phone</td>
                            <td>
                             {{Form::text('phone',Auth::user()->phone,['id'=>'required','placeholder'=>'Phone','title'=>'phone'])}}
                            </td>
                        </tr>




                    </thead>
                  </table>
              </dd>
      
              <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Third Accordion Information
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">


                  <table class="table table-responsive">
                    <thead>
                        <tr>
                          <td>Email</td>
                          <td>
                          {{Form::email('email',Auth::user()->email,['id'=>'required','placeholder'=>'Email','title'=>'email'])}}
                            
                          </td>
                         
                        </tr>

                        <tr>
                          <td>Password</td>
                          <td>
                           {{Form::password('password', ['class' =>'form-control','onkeyup'=>'password_len_check()','id'=>'password','title'=>'password'])}}
                               <span class="add-on" style="width:0%" id="help_block" ></span>
                          </td>
                        </tr>

                        <tr>
                          <td>confiram Password</td>
                          <td>
                          {{Form::password('confiram_password', ['class' =>'form-control','id'=>'password_confirm','title'=>'confiram_password','onkeyup'=>'Password_match()'])}} 
                             <span id="password_match"></span>
                          </td>
                        </tr>






                    </thead>
                  </table>

                   {{Form::submit('Submit',['class'=>'btn btn-success','id'=>'submit_button','style'=>'    margin-left: 384px;','disabled'=>'disabled'])}} 
              </dd>
            </dl>

          </div>
        </div>


      </div>
  </div>
</div>










</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

 <script type="text/javascript">
 function password_len_check()
 {
    var password_length_for_password=$("#password").val().length;
        // alert(password_length_for_password);
     if(password_length_for_password < 8)
     {
     $("#help_block").html("<font color='red'> Password Weak</font>");
     }
     else
     {
     $("#help_block").html("<font color='green'> Password Strong</font>");
    }

}

   $(document).ready(function(){
     
                            $("#password_show_button").mouseup(function(){
                                
                                $("#password").attr("type", "password");
                            });
                            $("#password_show_button").mousedown(function(){
                                $("#password").attr("type", "text");

                            });
                        });


 function Password_match()
 {
   var password_get=$("#password").val();
   var confiram_password_get=$("#password_confirm").val();
   if(password_get==confiram_password_get)
   {
   $("#password_match").html("<font color='green'> Password Match</font>");
   $("#submit_button").attr('disabled',false);
   }
   else
   {
   $("#password_match").html("<font color='red'> Password Not Match</font>");
    $("#submit_button").attr('disabled',true);
   }
 }



 </script>
<style type="text/css">

//updated ver
* {
  box-sizing:border-box;
}
@import url(https://fonts.googleapis.com/css?family=Lato:400,700);
body {

  font-family:'Lato';
}
.heading-primary {
  font-size:2em;
  padding:2em;
  text-align:center;
}
.accordion dl,
.accordion-list {
   border:1px solid #ddd;
   &:after {
       content: "";
       display:block;
       height:1em;
       width:100%;
       background-color:darken(#38cc70, 10%);
     }
}
.accordion dd,
.accordion__panel {
   background-color:#eee;
   font-size:1em;
   line-height: 5.5em;
}
.accordion p {
  padding:1em 2em 1em 2em;
}

.accordion {
    position:relative;
    background-color:#eee;
}
.container {
  max-width:960px;
  margin:0 auto;
  padding:2em 0 2em 0;
}
.accordionTitle,
.accordion__Heading {
 background-color:#37414B;
   text-align:center;
     font-weight:700;
          padding:2em;
          display:block;
          text-decoration:none;
          color:#fff;
          transition:background-color 0.5s ease-in-out;
  border-bottom:1px solid darken(#38cc70, 5%);
  &:before {
   content: "+";
   font-size:1.5em;
   line-height:0.5em;
   float:left;
   transition: transform 0.3s ease-in-out;
  }
  &:hover {
    background-color:darken(#38cc70, 10%);
  }
}
.accordionTitleActive,
.accordionTitle.is-expanded {
   background-color:darken(#38cc70, 10%);
    &:before {

      transform:rotate(-225deg);
    }
}
.accordionItem {
    height:auto;
    overflow:hidden;
    //SHAME: magic number to allow the accordion to animate

     max-height:50em;
    transition:max-height 1s;


    @media screen and (min-width:48em) {
         max-height:15em;
        transition:max-height 0.5s

    }


}

.accordionItem.is-collapsed {
    max-height:0;
}
.no-js .accordionItem.is-collapsed {
  max-height: auto;
}
.animateIn {
     animation: accordionIn 0.45s normal ease-in-out both 1;
}
.animateOut {
     animation: accordionOut 0.45s alternate ease-in-out both 1;
}
@keyframes accordionIn {
  0% {
    opacity: 0;
    transform:scale(0.9) rotateX(-60deg);
    transform-origin: 50% 0;
  }
  100% {
    opacity:1;
    transform:scale(1);
  }
}

@keyframes accordionOut {
    0% {
       opacity: 1;
       transform:scale(1);
     }
     100% {
          opacity:0;
           transform:scale(0.9) rotateX(-60deg);
       }
}
</style>


<script type="text/javascript">
  //uses classList, setAttribute, and querySelectorAll
//if you want this to work in IE8/9 youll need to polyfill these
(function(){
  var d = document,
  accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
  setAria,
  setAccordionAria,
  switchAccordion,
  touchSupported = ('ontouchstart' in window),
  pointerSupported = ('pointerdown' in window);

  skipClickDelay = function(e){
    e.preventDefault();
    e.target.click();
  }

    setAriaAttr = function(el, ariaType, newProperty){
    el.setAttribute(ariaType, newProperty);
  };
  setAccordionAria = function(el1, el2, expanded){
    switch(expanded) {
      case "true":
        setAriaAttr(el1, 'aria-expanded', 'true');
        setAriaAttr(el2, 'aria-hidden', 'false');
        break;
      case "false":
        setAriaAttr(el1, 'aria-expanded', 'false');
        setAriaAttr(el2, 'aria-hidden', 'true');
        break;
      default:
        break;
    }
  };
//function
switchAccordion = function(e) {
  console.log("triggered");
  e.preventDefault();
  var thisAnswer = e.target.parentNode.nextElementSibling;
  var thisQuestion = e.target;
  if(thisAnswer.classList.contains('is-collapsed')) {
    setAccordionAria(thisQuestion, thisAnswer, 'true');
  } else {
    setAccordionAria(thisQuestion, thisAnswer, 'false');
  }
    thisQuestion.classList.toggle('is-collapsed');
    thisQuestion.classList.toggle('is-expanded');
    thisAnswer.classList.toggle('is-collapsed');
    thisAnswer.classList.toggle('is-expanded');

    thisAnswer.classList.toggle('animateIn');
  };
  for (var i=0,len=accordionToggles.length; i<len; i++) {
    if(touchSupported) {
      accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
    }
    if(pointerSupported){
      accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
    }
    accordionToggles[i].addEventListener('click', switchAccordion, false);
  }
})();
</script>
<script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>







</script>
@stop
