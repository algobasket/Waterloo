
   function login(){
   	 var data = {
   	 	email : $('#email').val(),
   	 	password : $('#password').val(),
   	 	login : true
   	 };
     $.ajax({
     	type:'POST',
     	url : '../api.php',
     	data:data,
     	success:function(out){
         if(out == '200'){
          $('#result').html('<div class="alert alert-success">Login Successful</div>');
          window.location.href="project.php";
         }else{
          $('#result').html('<div class="alert alert-danger">User Not Found</div>');
         }
     	}
     });	
   }

   function signUp(){
      var data = {
      fullname : $('#Fullname').val(),
      dob : $('#rDOB').val(),
      country : $('#rCountry').val(),
      email : $('#rEmail').val(),
      password : $('#rPassword').val(),
      register : true
     };
     $.ajax({
      type:'POST',
      url : '../api.php',
      data:data,
      success:function(out){
         if(out == '200'){
          $('#result2').html('<div class="alert alert-success">Signup Successful</div>');
          $('.play-icon').click();
         }else{
          $('#result2').html('<div class="alert alert-danger">Error Signup</div>');
         }
      }
     });  
   }

   function isSession(){
     var data = {
      isSession : true
     };
     $.ajax({
      type:'POST',
      url : '../api.php',
      data:data,
      success:function(out){   
        
         if(out == null || out == ""){
           console.log("Its NULL");
         }else{
           var json = JSON.parse(out);
           uid = json.uid;
           fname = json.fname;
           $('.isLogin').hide();
           $('.loginData').html('<div class="agileinfo_menu_right isLogin">'+fname+'</div>');
         }
      }
     });  
   }

   function logout(){
       var data = {
       logout : true
     };
     $.ajax({
      type:'POST',
      url : '../api.php',
      data:data,
      success:function(out){
         if(out == '200'){
          window.location.href="main.php";
         }
      }
     }); 
   }

   function createProjectPopup(){
    $('#myModal').modal('show');
   }

   function createProject(){
      var data = {
      project_name : $('#projectName').val(),
      project_reference : $('#projectReference').val(),
      user_id : $('#realName').val(),
      createProject : true
     };
     $.ajax({
      type:'POST',
      url : '../api.php',
      data:data,
      success:function(out){
         if(out == '200'){
          window.location.href="product.php";
         }else{
          $('#result').html('<div class="alert alert-danger">Error Creating Project</div>');
         }
      }
     });  
   }





   	



