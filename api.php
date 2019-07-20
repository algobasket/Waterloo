<?php
session_start();

list($domain,$port) = explode(':',$_SERVER['HTTP_HOST']);
if($domain == 'localhost'){
	$db = mysqli_connect('localhost','root','root','waterloo'); 
}else{
	$db = mysqli_connect('localhost','algobku8_free','algobku8_free','algobku8_waterloo'); 
}


define("USER",'user');
define("CATEGORIES",'categories');
define("PRODUCTS",'products');
define("PROJECTS",'projects');


if(isset($_POST['login']))
{ 	
  if($_POST['email'] && $_POST['password'])
  {
  	$sql = "SELECT * FROM ".USER.
  	       " WHERE email='".$_POST['email'].
  	       "' AND password='".$_POST['password']."'";
    $query = mysqli_query($db,$sql);
    if(mysqli_num_rows($query) == 1)
    { 
      $row = mysqli_fetch_array($query,MYSQLI_ASSOC);
      $_SESSION['sess'] = [
        'uid'   => $row['id'],
        'fname' => $row['fullname'],
        'email' => $row['email'],
        'role'  => $row['role']
      ];
      echo "200";
      exit;
    }
  }
}   


if(isset($_POST['register']))
{ 
  if($_POST['email'] && $_POST['password'])
  {
    $query = mysqli_query($db,"INSERT INTO user SET email='".$_POST['email']."', password='".$_POST['password']."',role='user',country='".$_POST['country']."',dob='".$_POST['dob']."',fullname='".$_POST['fullname']."',created='".date('d/M/Y')."',updated='".date('d/M/Y')."',status=1");
    if($query)
    {
      echo "200";
      exit;
    }
  }
}

if($_POST['isSession']){
	if(is_array($_SESSION['sess'])){
      echo json_encode($_SESSION['sess'],true);
	}
}

if(isset($_POST['logout'])){
  session_destroy();
  echo "200"; 
}


if(isset($_POST['create_category']))
{ 
  if($_POST['category'])
  {
    $query = mysqli_query($db,"INSERT INTO CATEGORIES SET category_name='".$_POST['category']."',created='".date('d/M/Y')."',updated='".date('d/M/Y')."',status=1");
    if($query)
    {
      echo "200";
      exit;
    }
  }
}

if(isset($_POST['categories']))
{ 
  
    $query = mysqli_query($db,"SELECT FROM CATEGORIES WHERE status=1");
    if($query)
    {
      echo $query;
    }
  
}

if(isset($_POST['create_products']))
{ 
  if($_POST['category'] && $_POST['product'])
  {
    $query = mysqli_query($db,"INSERT INTO PRODUCTS SET product_name='".$_POST['product']."',category_id='".$_POST['category_id']."',created='".date('d/M/Y')."',updated='".date('d/M/Y')."',status=1");
    if($query)
    {
      echo $query;
    }
  }
}

if(isset($_POST['products']))
{ 
    $query = mysqli_query($db,"SELECT FROM PRODUCTS WHERE status = 1");
    if($query)
    {
      echo $query;
    }
}

if(isset($_POST['createProject']))
{
   $query = mysqli_query($db,"INSERT INTO PROJECTS SET project_name='".$_POST['project_name']."',project_reference='".$_POST['project_reference']."',user_id='".$_SESSION['sess']['uid']."',created='".date('d/M/Y')."',updated='".date('d/M/Y')."',status=1");
    if($query)
    {
      echo "200";
      exit;
    }
}



if(isset($_POST['calculation']))
{ 
  if($_POST['email'] && $_POST['password'])
  {
    $query = mysqli_query($db,"SELECT FROM user WHERE email=".$_POST['email']." AND password=".$_POST['password']);
    if($query)
    {
      echo $query;
    }
  }
}



if(isset($_POST['export']))
{ 
  if($_POST['email'] && $_POST['password'])
  {
    $query = mysqli_query($db,"SELECT FROM user WHERE email=".$_POST['email']." AND password=".$_POST['password']);
    if($query)
    {
      echo $query;
    }
  }
}