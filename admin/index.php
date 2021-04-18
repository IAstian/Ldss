<?php
    //start the session
    session_start();
    //check for id
   if(isset($_GET['id'])){

    //Ensure that the id is accurate
    if(($_GET['id'] == $_SESSION['id']) || (!empty($id) || ($id !== NULL))){
      //We passed
    }else{
        //Redirect back to the login page if id doesnt match the one generated by the system
      header("Location: ./login.php");
    }
   }else{
       //Redirect if not logged in
       header("Location: ./login.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/hover.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <title>Admin panel</title>
</head>
<body>
    <header>
        <div class="title">
             DASHMIN
        </div>
        <nav>
            <ul>
              <li><a href="#"><i class="fas fa-users-cog"></i> Admin</a></li>
              <li><a href="./logout.php?request=logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>  
            </ul>
        </nav>
    </header>
    <main>
    <div class="sidebar">
        <ul>
            <li><a href="#" class="header" id="wheel"><i class="fas fa-cog " ></i></a></li> <br>
            <li><a href="./pages/students database/?id=<?php echo $_GET['id'];?>" class="hvr-underline-from-center"><i class="fas fa-school"></i> View students database</a></li>
            <li><a href="./pages/add exam/?id=<?php echo $_GET['id'];?>" class="hvr-underline-from-center"><i class="fas fa-file"></i> New exam</a></li>
            <li><a href="./pages/add assignment/?id=<?php echo $_GET['id'];?>" class="hvr-underline-from-center"><i class="fas fa-file"></i> New Assignment</a></li>
            <li><a href="./pages/suggestions/?id=<?php echo $_GET['id'];?>" class="hvr-underline-from-center"><i class="fas fa-box"></i> Suggestions box</a></li>
            <li><a href="./pages/questions/?id=<?php echo $_GET['id'];?>" class="hvr-underline-from-center"><i class="far fa-question-circle"></i> Asked questions</a></li>
            <li><a href="./pages/register teacher/?id=<?php echo $_GET['id'];?>" class="hvr-underline-from-center"><i class="fas fa-chalkboard-teacher"></i> New teacher</a></li>
            <li><a href="./pages/teachers/?id=<?php echo $_GET['id'];?>" class="hvr-underline-from-center"><i class="fas fa-users"></i> Registered teachers</a></li>
            <li><a href="./pages/requests/?id=<?php echo $_GET['id'];?>" class="hvr-underline-from-center"><i class="fas fa-question-circle"></i> View requests</a></li>
            <li><a href="./pages/blog/?id=<?php echo $_GET['id'];?>" class="hvr-underline-from-center"><i class="fas fa-blog"></i> New Post  </a></li>
            <li><a href="./pages/myposts/?id=<?php echo $_GET['id'];?>" class="hvr-underline-from-center"><i class="fas fa-blog"></i> My posts</a></li>
            <li><a href="./pages/inbox/?id=<?php echo $_GET['id'];?>" class="hvr-underline-from-center"><i class="fas fa-inbox"></i> Received Messages</a></li>
            <li><a href="./pages/Newsletter/?id=<?php echo $_GET['id'];?>" class="hvr-underline-from-center"><i class="far fa-share-square"></i> Message all students</a></li>
            <li><a href="./pages/message teachers/?id=<?php echo $_GET['id'];?>" class="hvr-underline-from-center"><i class="far fa-share-square"></i> Message all Teachers</a></li>
           <li><a href="./pages/gallery/?id=<?php echo $_GET['id'];?>" class="hvr-underline-from-center"><i class="fas fa-photo-video"></i> Add to gallery</a></li> 
        </ul>
    </div>



    <div class="statistics">
        <h1>System overview</h1>
        <div class="grid-container">
            <div class="grid-item hvr-grow">
                    <i class="fas fa-users fa-2x"></i>
                <h5>Registered Students</h5>
                <small><?php require '../server/count_users.php';?></small>
            </div>  
            <div class="grid-item hvr-grow">
                <i class="fas fa-blog fa-2x"></i>
                <h5>Posts</h5>
                <small><?php require '../server/count_posts.php';?></small>
            </div>
            <div class="grid-item hvr-grow">
            <i class="fas fa-chalkboard-teacher fa-2x"></i>
                <h5>Teachers</h5>
                <small><?php require '../server/count_teachers.php';?></small>
            </div>
            <div class="grid-item hvr-grow">
            <i class="fas fa-file fa-2x"></i>
                <h5>Uploaded Assignments</h5>
                <small><?php require '../server/assignment_numbers.php';?></small>
            </div>
            <div class="grid-item hvr-grow">
            <i class="fas fa-file fa-2x"></i>
                <h5>Uploaded Exams</h5>
                <small><?php require '../server/exam_numbers.php';?></small>
            </div>
            <div class="grid-item hvr-grow">
            <i class="fas fa-boxes fa-2x"></i>
                <h5>Suggestions</h5>
                <small><?php require '../server/count_suggestions.php';?></small>
            </div>
            <div class="grid-item hvr-grow">
                <i class="fas fa-inbox fa-2x"></i>
                <h5>Received messages</h5>
                <small><?php require '../server/count_messages.php';?></small>
            </div>
            <div class="grid-item hvr-grow">
                <i class="fas fa-question-circle fa-2x"></i>
                <h5>Requests</h5>
                <small><?php require '../server/count_requests.php';?></small>
            </div>
            <div class="grid-item hvr-grow">
            <i class="fas fa-question fa-2x"></i>

                <h5>Asked questions</h5>
                <small><?php require '../server//count_questions.php';?></small>
            </div>
        </div>
    </div>
</main>
    <script src="../javascript/font_awesome_main.js"></script>
</body>
</html>