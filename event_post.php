<!DOCTYPE html>
<html>
  <head>
    <title>Create Post</title>
    <style type="text/css">
		body{

			background-image: linear-gradient(to right top, #598fdf, #5788e3, #5980e7, #6077e9, #6a6de9);
			/* background-image: linear-gradient(to right, #90b9f0, #7bc4f8, #64cefb, #4fd8f9, #44e1f2, #43e0f3, #42dff5, #41def6, #56d3fd, #74c6fc, #90b9f4, #a7ace6); */
			/* background-image: linear-gradient(to right top, #6293d4, #6997d7, #709bdb, #769fde, #7da3e2, #77acea, #70b6f2, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1); */
		}
      		.container {
      			max-width: 600px;
      			margin: 0 auto;
      			padding: 20px;
      			border: 1px solid #ccc;
				  background-color:white;
				  border-radius:10px;
      		}
      		.form-group {
				margin-right:2%;
      			margin-bottom: 20px;
      		}
      		label {
      			display: block;
      			font-weight: bold;
      			margin-bottom: 5px;
      		}
      		input[type="text"],input[type="file"],input[type="date"] {
      			width: 100%;
      			padding: 10px;
      			border: 1px solid #ccc;
      			border-radius: 5px;
      			font-size: 16px;
      			margin-top: 5px;
      		}
      		input[type="submit"] {
      			background-color: #4CAF50;
      			color: #fff;
      			border: none;
      			padding: 10px 20px;
      			border-radius: 5px;
      			cursor: pointer;
      			font-size: 16px;
      		}
      		input[type="submit"]:hover {
      			background-color: #3e8e41;
      		}

          .container {
      	max-width: 600px;
      	margin: 0 auto;
      	padding: 20px;
      	border: 1px solid #ccc;
      }

      .form-group {
      	margin-bottom: 20px;
      }

      label {
      	display: block;
      	font-weight: bold;
      	margin-bottom: 5px;
      }

      input[type="text"], textarea {
      	width: 100%;
      	padding: 10px;
      	border: 1px solid #ccc;
      	border-radius: 5px;
      	font-size: 16px;
      	margin-top: 5px;
      }

      input[type="file"] {
      	display: block;
      	margin-top: 5px;
      }

      input[type="submit"] {
      	background-color: #4CAF50;
      	color: #fff;
      	border: none;
      	padding: 10px 20px;
      	border-radius: 5px;
      	cursor: pointer;
      	font-size: 16px;
      }

      /* input[type="submit"]:hover {
      	background-color: #3e8e41;
      } */

	  button{
        margin-left: 37%;
		width: 25%;
        color:white;
        height: 30px;
        text-align: center;
        border: none;
        border-radius: 10px;
        background-color: rgb(93, 100, 237);
        
	}
    button:hover{
        background-color: rgb(43, 37, 231);
    }

	h1{
		text-align: center;
        color: rgb(242, 120, 220);
    }
    h1:hover{
        color: rgb(93, 49, 169);
    }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Create Post</h1>
      <form method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="">Content:</label>
          <input type="text"  name="content" required />
        </div>
        <div class="form-group">
          <label for="body">Date:</label>
        <input type="date" name="date">
        </div>
        <div class="form-group">
          <label for="video">Video:</label>
          <input type="file"  name="video" />
        </div>
        <div class="form-group">
          <label for="image">Image:</label>
          <input type="file" name="image" />
        </div>
		<button type="submit" name="submit">submit</button>
        <!-- <input type="submit" value="Submit" /> -->
      </form>
    </div>
  </body>
</html>

<?php
include 'dbconnect.php';

if(isset($_POST['submit'])){
	// $content = $_POST['content'];
	$video = $_FILES['video'];
	$videoName = $video['name'];
	$tempnameVideo = $video['tmp_name'];
	$file_Error_video =$video['error'];
	
	// print_r($video);
		$image = $_FILES['image'];
		// print_r($image);
		$imageName = $image['name'];
		$tempName = $image['tmp_name'];
		$file_Error = $image['error'];
		$content = $_POST['content'];
		$date = $_POST['date'];
	
		$fileExt = explode('.',$imageName);
		$fileCheck = strtolower(end($fileExt));
		$fileStore = array('png','jpg','jpeg','svg');
		$okfileMatch = in_array($fileCheck,$fileStore);
	
	
		$video_fileExt = explode('.',$videoName );
		$video_fileCheck = strtolower(end($video_fileExt));
		$video_fileStore = array('mp4','mpeg','mov','avi','avchd');
		$video_okfileMatch = in_array($video_fileCheck,$video_fileStore);
	
	
		if($okfileMatch&&$video_okfileMatch){
			if($file_Error>=0 && $file_Error_video>=0){
				$filedest = 'image1/'.$imageName;
				move_uploaded_file($tempName,$filedest);
				$filedest_video = 'video/'.$videoName;
				move_uploaded_file($tempnameVideo,$filedest_video);
		
				$dataInsert ="INSERT INTO `create_post`(`content`, `date`, `video`, `image`) VALUES ('$content','$date','$filedest_video','$filedest')";
			   $result = mysqli_query($conn,$dataInsert);
			   if($result==true){
			   
		?>
	<script>
	alert("Data has been post")
	</script>
	<?php
		
			   }else{
				?>
	<script>
	alert("Data has been not post")
	</script>
	<?php
				
			   }
			 
		
			}
		}else{
			?>
			<script>
			alert("File Does Not Match")
			</script>
			<?php
		}
	}

?>
