<?php
if($_SERVER['REQUEST_METHOD']=="Post"){
  $myname=$_POST['fullname'];
  $myphone=$_POST['phone'];
  $myemail=$_POST['email'];
  $mymessage=$_POST['message'];
  $errors=array();
  if(empty($myname)){
    $errors['fullname']='الرجاء تأكد من الاسم بشكل صحيح';
  }
  if(empty($myphone)){
    $errors['phone']='الرجاء تأكد من رقم الهاتف صحيح';
  }
  if(empty($myemail)){
    $errors['email']='الرجاء تأكد من البريد الالكتروني بشكل صحيح';
  }
  if(empty($mymessage)){
    $errors['message']='الرجاء تأكد من الرسالة';
  }
}
?>


<!DOCTYPE html>
<html  dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/all.min.css">
    <link rel="stylesheet" href="Css/backend.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic:wght@600&family=Noto+Sans+Arabic:wght@100;300;400&family=Open+Sans:wght@300&family=Raleway:wght@200&display=swap" rel="stylesheet">
    <style>
     
      
    </style>
    
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">كــــــــاردينا</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">التفاصيل</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">اتصل بنا</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">من نحن</a>
              </li>
             
             
              
            </ul>
            
          </div>
        </div>
      </nav>
      <div class="land">
        <div class="container">
          <div class="land-content">
            <div class="imag-left">
            
             
              <img src="images/22.jpg">
              <img src="images/bon-cadeau-de-250-euros-removebg-preview.png">
              <img src="images/1377257-coffret-cadeau-avec-noeud-rouge-sur-fond-bleu-gratuit-photo-removebg-preview.png">
           
    
            </div>
            <div class="land-info">
              <h2>كاردينا  من القلب فرحنا فرحتكم اينما كنتم نصل اليكم </h2>
            </div>
            <div class="imag-right">
              <img src="images/fille.jpg">
              <img src="images/33.jpg">
            </div>
        </div>
        
      
      </div>
        
        </div>
        <div class="service">
          <div class="container">
            <div class="servic-land">
              <div class="servic-info">
                <p> شارك فرحتك مع الناس معنا اينما تكون نكون وحيثما تكون فرحتك ستجدها معنا سنوات عديدة نشارك الناس فرحتهم اياك ان تتردد خدماتنا متوفرة </p>
              </div>
              <div class="servic-image">
               <img src="images/omra.jpg">
               <h4>عمرة وحج</h4>
               <p>مستعدون لتجهيز مناسبات العمرة والحج افراحكم معنا</p>

              </div>

              <div class="servic-image">
                <img src="images/student.jpg">
                <h4>حفلات تخرج</h4>
                <p>مستعدون لتجهيز توزيعات التخرج حسب طلبات الزبون</p>
 
               </div>

               <div class="servic-image">
                <img src="images/child.jpg">
                <h4>ولادة بيبي</h4>
                <p>جهيز توزيعات ولادة البيبي  معنا تكتمل فرحتكم</p>
 
               </div>
            </div>

          </div>
        </div>
        <div class="gallary">
          <div class="container">
            <div class="silde-info"><p>متجر خاص بكافة انواع التوزيعات مع وجود خدمة توصيل لكافة محافطات العراق</p></div>
            <div class="content-silde">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="images/133911436_103061701727533_4050511293394386723_n.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="images/134680155_106083784758658_7061286924003951809_n.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/140831109_113070660726637_8243215721462957377_n.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
            
            </div>
          </div>
          </div>
        </div>
        <div class="contact">
          <div class="container">
            <div class="contact-info">
              <h3>العراق/موصل/الجانب الايسر </h3>
              <h3> <i class="fa-solid fa-phone"></i><a href="tel:009647701966526">009647701966526</a></h3>
              <h3> <i class="fa-solid fa-phone"></i><a href="tel:009647502162622">009647502162622</a></h3>
              <h3> <i class="fa-solid fa-envelope"></i><a href="mail:gardinagiftforall@gmail.com">gardinagiftforall@gmail.com</a></h3>
              
            </div>
            <div class="contact-form">
              <form mathod="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                <input type="text"name="fullname" placeholder="الاسم الكامل">
                <?php if(isset($errors)) : ?>

               
                <div class="alert alert-danger"><?php $errors['fullname'];?> </div>
<?php endif; ?>
                <input type="text"name="phone" placeholder="الهاتف">
                <input type="email" name="email" placeholder="الربريد الالكتروني">
                <textarea name="message" placeholder="الرسالة"></textarea>
                <input type="submit" value="ارسال" name="send">
              </form>
            </div>
          </div>
        </div>
     
        <footer class="text-center" >
          designed by almurad agha ruaa 2023
        </footer>
<script src="Js/all.min.js"></script>
 <script src="Js/bootstrap.bundle.min.js" ></script> 
 
</body> 
</html>
  