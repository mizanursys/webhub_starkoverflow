<!DOCTYPE html>
<!--code by webdevtrick (webdevtrick.com) -->
<html>

<head>



	<title>PHP Quiz</title>

	<link rel="stylesheet" type="text/css" href="style.css" />

	<meta name="csrf-token" content="{!! csrf_token() !!}">
	<script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
	<style>
	        .center {
	            margin: center;
	            width: 50%;
	            height: 40px;
	            padding: 50px;
	            margin-top: 50px;
							margin-left: 50%;
	            color: #fafafa;
	            background-color: #ff001b;
	        }
					.center-green {
							margin: center;
							width: 50%;
							height: 40px;
							padding: 50px;
							margin-top: 50px;
							margin-right: 50%;
							color: #fafafa;
							background-color: #008000;
					}
	        .center-bottom {
	            margin: auto;
	            top: 50%;
	            padding: 20px;
	            margin-top: 50px;
	            color: #000000;
	        }
	    </style>
</head>

<body >

	<div class="row" value="{{ csrf_token() }}" >

		<h1 style="margin-top:20px; margin:auto;">Webdev.com</h1>

        <?php

            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];

            $totalCorrect = 0;

            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }

//  echo "<div id='results'>$totalCorrect / 5 correct</div>";
            if ($totalCorrect >= 4 ) {
							?>


							        <div class="center-green">
												  <p>Congretulation! You are Eligible For Register </p>
							            <button type="submit" class="btn btn-primary">
							             <a href="{{ url('register') }}">Go To Register Page</a>
							            </button>
													<button type="submit" class="btn btn-primary">
							             <a href="{{ url('login') }}">Go To Login Page</a>
							            </button>
													<button type="submit" class="btn btn-primary">
							             <a href="{{ url('/home') }}">Go Back</a>
							            </button>
							        </div>

					<?php
				}else { ?>

					<div class="center" >
						 <p>Opps! Sorry You are Not Eligible For Register </p>
						 <button type="submit" class="btn btn-primary">
							<a href="{{ url('login') }}">Go To Login Page</a>
						 </button>
						 <button type="submit" class="btn btn-primary">
							<a href="{{ url('/home') }}">Go Back</a>
						 </button>
					</div>

				<?php
			}


        ?>

	</div>

</body>

</html>
