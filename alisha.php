<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact Us</title>
  </head>

  <style>
    *{
      margin: 0;
      padding-left: 0;
      box-sizing: border-box;
      font-family: 'Times New Roman', Times, serif;
    }
    .container{
      width: 100%;
      height: 100vh;
      background-color: darkblue;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 2px 5px 10px #555;  
     }
     form{
      background: lightblue;
      display: flex;
      flex-direction: column;
      padding: 2vw 4vw;
      width: 60%;
      max-width: 700px;
      border-radius: 10px;    
     }

     form h3{
      color: black;
      font-weight: 800;
      margin-bottom: 20px;;
         }

         form input, form textarea{
          border: 0;
          margin: 10px 0;
          padding: 20px;
          outline: none;
          background: white;
          font-size: 16px;
          box-shadow: 2px 5px 10px #555;
         }
         form button{
          padding: 15px;
          background-color: #555;
          color: aliceblue;
          font-size: 18px;
          border: 0;
          outline: none;
          cursor: pointer;
         }


  </style>
  <body>
    

    <div class="container">

   

      <form method="POST" action="form.php">

      <?php
      $Message ="";
      if(isset($_GET['error']))
      {
        $Message = "Please Fill in the blanks";
        echo '<div class="alert alert-danger">'.$Message.'</div>';
      }

      if(isset($_GET['success']))
      {
        $Message = "Your message has been sent";
        echo '<div class="alert alert-success">'.$Message.'</div>';

      }
    
    ?>

        <h3>Get In Touch</h3>
        <input type="text" id="username" name="username" placeholder="Your Name">
        <input type="email" id="email" name="email" placeholder="Email">
        <input type="text" id="subject" name="subject" placeholder="subject">
        <textarea id="message" name="message" rows="4" placeholder="How can we help you?" ></textarea>
        <button type="submit" id="btn-send" name="btn-send"> Send</button>


      </form>
    </div>
  </body>

</html>

