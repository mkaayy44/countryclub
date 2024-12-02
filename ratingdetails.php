<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    
  <link rel="stylesheet" href="headerstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<style>
    a{
        color:black;
    }
        *{ margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: url('img/8528aca0efb6400fefdf427490160ee9.jpg') no-repeat center center/cover;
         
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 0;
            display: flex;
        
            font-family: "Libre Baskerville", serif;
  font-weight: 400;
  font-style: normal;
  height: 100vh;
        }
        .login{
            background: #ffffff;
            width: 100%;
            max-width: 600px;
padding:36px;
border-radius: 10px;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
text-align: center;

        }
        .login .inputs{
            margin-bottom: 16px;
            text-align: left;
        }
      input{   width: 100%;
            padding: 12px;
            border: 1.5px solid #000000;
            border-radius: 4px;
            font-size: 16px;}

            
       .textarea {border: 1.5px solid #000000;}
 label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
  .title{
    margin-bottom: 16px;
    color:  rgb(20, 127, 166);
  }
.button a{
    text-decoration: none;
  color: white;
}
  .button{
    color: white;
   padding: 10px;
    background-color:  rgb(20, 127, 166);
    border: none;
    border-radius: 6px;
font-size: 17px;
text-align: center;
width: 100%;
cursor:cell;
margin-top: 10px;
}

.button:hover{
background-color:rgb(20, 127, 166);
color:  #ffffff;
}

body {
            font-family: 'Roboto', sans-serif;
        }
        .star-rating .fa-star {
            cursor: pointer;
        }
@media (max-width: 768px) {
    body {
        padding: 20px;
    }

    .login {
        width: 100%;
        max-width: 100%;
        padding: 24px;
        border-radius: 8px;
        box-shadow: none;
    }

    .title h1 {
        font-size: 1.5rem;
    }

    .button {
        font-size: 16px;
    }

    
    .signup {
        font-size: 0.8rem;
    }
}
 textarea{
border: none ; padding: 12px; width: 100%;
font-size: 20px; min-height: 200px;max-height: 400px;

border-radius: 5px;
}


@media (max-width: 480px) {
    .title h1 {
        font-size: 1.25rem;
    }

    input, .button {
        font-size: 14px;
        padding: 10px;
    }

}
.stars {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-end;
        }
        .stars input {
            display: none;
        }
        .stars label {
            font-size: 2rem;
            color: #ccc;
            cursor: pointer;
        }
        .stars input:checked ~ label {
            color: #f5c518;
        }
        .stars label:hover,
        .stars label:hover ~ label {
            color: #f5c518;
        }
        #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top:20px;

}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:  rgb(20, 127, 166);
  color: white;

}

</style>
<body>
    <div class="login" >
        <div class="title"> <h1>Add your Review</h1> </div>
         <form action="addreview.php" method="post" >
     <div class="inputs">      <label for="Name">Name</label>
     <input type="text" name="name" > </div>    
     <div class="inputs">    
         <label for="review">Review</label>
         <textarea name="review" class="textarea" rows="5" placeholder="Your review" required="required"></textarea>
        <div class="stars">
            <input type="radio" name="rating" id="star5" value="5">
            <label for="star5">★</label>
            <input type="radio" name="rating" id="star4" value="4">
            <label for="star4">★</label>
            <input type="radio" name="rating" id="star3" value="3">
            <label for="star3">★</label>
            <input type="radio" name="rating" id="star2" value="2">
            <label for="star2">★</label>
            <input type="radio" name="rating" id="star1" value="1">
            <label for="star1">★</label>
          </div>
         
          <script src="strsrating.js"></script>
           <button  type="submit" class="button"><h3>Submit review </h3></button>
           <button class ="button"><a href="viewreviews.php" >View reviews</a> </button>
           <div class="show"><table id="customers" >
<tr>
    <th>Name</th>  <th>Review</th> 
    <th>Rating</th>
 <th>Delete</th>
    
  </tr>
<?php
include ("inc\connect.php");
$ra=$_GET['Rating'];
$sql="SELECT * FROM addreview WHERE Rating='$ra'";;
$result=mysqli_query($con,$sql);

 
  while($row=mysqli_fetch_assoc($result)){
    echo " <tr>
     <td>".$row['dbName']."</td>   <td>".$row['Review']."</td>
     <td> <a color=blue href=ratingdetails.php?Rating=".$row['Rating'].">   ".$row['Rating']."</a></td>  
      <td><a href=delete.php?ID=".$row['id']."><img src='img\delete.png' width=35px></a></td>  
   </tr>";}?>

</table>
</div> 
</form>

    
   
 
     </div>

</body>
</html>



