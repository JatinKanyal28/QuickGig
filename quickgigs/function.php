 <?php
session_start();  
include 'include/connection.php';
 if(isset($_POST['regibutton']))
{
  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  // $gig = $_POST['gig'];
  // $gname = $_POST['gname'];
  // $statename = $_POST['state'];
  // $city = $_POST['city'];
  // $local = $_POST['local'];
  // $i=$_FILES['myphoto']['name']; //img name with extension
  //   $ii='upload/'.$i;               // where to be stored (upload folder)
  //   $tmp=$_FILES['myphoto']['tmp_name']; //hold img in tmp jab tak form submit nahi hojaye

  //   move_uploaded_file($tmp, $ii); //phir holded part se woh stored location (to upload folder)

  //   //  ISS TARIKE SE BHI LIKH SAKTE.  
  //   //    $_POST['fname'];
  //   //    $_POST['lname'];
  //   //    $sql="insert into register (fname,lname) values ('".$_POST['fname']."','".$_POST['lname']."')";


  $sql = "INSERT INTO signup(fname,lname,mobile,email,password)  VALUES ( '$firstname','$lastname','$mobile','$email','$password')"; 
                                     
  $result = mysqli_query($conn,$sql);
 
if($result)
{
  header("Location:show.php");
}
else
{
echo "not run";
}   
    }

    if(isset($_POST['submitbutton']))
{
  
  // $mobile = $_POST['mobile'];
  // $email = $_POST['email'];
  // $password = md5($_POST['password']);
  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $gig = $_POST['gig'];
  $gname = $_POST['gname'];
  $statename = $_POST['state'];
  $city = $_POST['city'];
  $local = $_POST['local'];
  $i=$_FILES['myphoto']['name']; //img name with extension
    $ii='upload/'.$i;               // where to be stored (upload folder)
    $tmp=$_FILES['myphoto']['tmp_name']; //hold img in tmp jab tak form submit nahi hojaye

    move_uploaded_file($tmp, $ii); //phir holded part se woh stored location (to upload folder)

    //  ISS TARIKE SE BHI LIKH SAKTE.  
    //    $_POST['fname'];
    //    $_POST['lname'];
    //    $sql="insert into register (fname,lname) values ('".$_POST['fname']."','".$_POST['lname']."')";


  echo $sql = "INSERT INTO gigtable(fname,lname,gig,gname,sname,cname,localarea,myphoto,user_id)  VALUES ('$firstname','$lastname','$gig','$gname','$statename','$city','$local','$i','".$_SESSION['username']."')";
                                     
  $result = mysqli_query($conn,$sql);
 
if($result)
{
  header("Location:dashboard.php");
}
else
{
echo "not run";
}   
    }

    if(isset($_GET['did'])) {

      $did=$_GET['did'];

      $sql="delete from gigtable where uid=$did";

      $result = $conn->query($sql);

      if($result>0)
      {
        header("Location:dashboard.php");
      }
      else
      {
        echo "something went wrong";
      }
    }

    if(isset($_POST['loginbutton'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql="select * from signup where email='$email' and password='$password'";
        $result=$conn->query($sql);
        $re=$result->fetch_object();
        if($re>0)
        {
         // echo  $fname = $re->fname.$re->lname;die;
         //  if($re->role=="JatinKanyal")
         //  {
         //      header("location:admin.php");
         //  }else if($fname == "Kaushik")
         //  {
         //      header("location:student.php");f

          setcookie("email",$email,time()+(86400*30));
          setcookie("password",$password,time()+(86400*30));

         $_SESSION['username'] = $re->uid;
          header("location: index.php");
          
        }
        else
  {
    echo "Email id and password is wrong";
  }
        
      }


if(isset($_POST['updatebutton']))
{
  $id=$_POST['userid'];
  $gig = $_POST['gig'];
  $gname = $_POST['gname'];
  $statename = $_POST['state'];
  $city = $_POST['city'];
  $local = $_POST['local'];

  $i=$_FILES['myphoto']['name'];

  if($i=='')
  {
      $sql ="UPDATE `gigtable` SET `gig`='$gig',`gname`='$gname',`sname`='$statename',`cname`='$city',`localarea`='$local' WHERE uid='$id'";                                   
     $result = mysqli_query($conn,$sql);
  }
  else
  {
      
    $ii='upload/'.$i;               
    $tmp=$_FILES['myphoto']['tmp_name']; 
    move_uploaded_file($tmp, $ii);

 $sql ="UPDATE `gigtable` SET `gig`=`fname`='$gig',`gname`='$gname',`sname`='$statename',`cname`='$city',`localarea`='$local',`myphoto`='$i' WHERE uid='$id'";                                   
     $result = mysqli_query($conn,$sql);

    }
 
if($result)
{
  header("Location: dashboard.php");
}
else
{
echo "not run";
}   
    }

//---------------------------------------------------------------

    if(isset($_POST['updatepbutton']))
{
  $id=$_POST['userpid'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  // $local = $_POST['local'];

  // $i=$_FILES['myphoto']['name'];

  // if($i=='')
  // {
  //     $sql ="UPDATE `gigtable` SET `gig`='$gig',`gname`='$gname',`sname`='$statename',`cname`='$city',`localarea`='$local' WHERE uid='$id'";                                   
  //    $result = mysqli_query($conn,$sql);
  // }
  // else
  // {
      
  //   $ii='upload/'.$i;               
  //   $tmp=$_FILES['myphoto']['tmp_name']; 
  //   move_uploaded_file($tmp, $ii);

 $sql ="UPDATE `signup` SET `fname`='$fname',`lname`='$lname',`mobile`='$mobile',`email`='$email' WHERE uid='$id'";                                   
     $result = mysqli_query($conn,$sql);

 
if($result)
{
  header("Location: profile.php");
}
else
{
echo "not run";
}   
    }
//----------------------------------------------------------- SIGN UP ---------------------------------------------------------------------//


 if(isset($_POST['signbutton']))
{
  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
 
  $sql = "INSERT INTO signup(fname,lname,mobile,email,password)  VALUES ( '$firstname','$lastname','$mobile','$email','$password')"; 
                                     
  $result = mysqli_query($conn,$sql);
 
if($result)
{
  header("Location:index.php");
}
else
{
echo "not run";
}   
    }

?>

