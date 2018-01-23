<!-- <php include 'config.php' ?> -->
<!-- All php connection and fetching part in above php file -->
<!-- Commented because now i am not authorised to acess that database -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyApp</title>

    <meta name="description" content="'Myapp' ">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Averia Libre' rel='stylesheet'>

    <style>
    body {
        font-family: 'Averia Libre';font-size: 22px;
    }
    .design{
        background: linear-gradient(to bottom, #003399 -9%, #ff66cc 121%);
        overflow-x:scroll;
        height:1520px;
    }
    </style>
  </head>

  <body class="design">
    <div class="container-fluid">
      <div class="row">  <div class="space"> </div></div>
      <div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
				<img src="images/logo.png" class="imge">
						</div>
				<div class="col-md-4"></div>


</div>
      <div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
          <div class="phonelayout">
						<img src="images/mobile_page_view.png" class="imagw">
						<!-- <div class="topic"> <=$v['topic']?></div> -->
            <div class="topic">Aptitude></div>

            <!-- previously commented part was coming from database -->
						<!-- <div class="question" style="padding:20px;"><= $v['ques']?>  </div> -->
						<!-- <div class="option_A"><= $v['option_1']?>		</div>
						<div class="option_B"><= $v['option_2']?>		</div>
						<div class="option_A"><= $v['option_3']?>		</div>
						<div class="option_B"><= $v['option_4']?>		</div> -->

            <div class="question" style="padding:20px;">A boy multiplied 987 by a certain number and obtained 559981 as his answer. If in the answer both 9 are wrong and the other digits are correct, then the correct answer would be:</div>
            <div class="option_A">553681</div>
						<div class="option_B">555181</div>
						<div class="option_A">555681</div>
						<div class="option_B">556581</div>
            <div class="playlayout">  </div>
              <a href="https://play.google.com/store/apps/details?id=com.dailyprep.app.aptitude"> <img src="images/googlePlay.png" class="logo">  </a>
          </div>
				</div>
				<div class="col-md-4">		</div>
    </div>
		</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
