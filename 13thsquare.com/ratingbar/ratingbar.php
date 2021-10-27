<?php
include("account.php");
    if(isset($_POST['save'])){
        $conn = new mysqli($servername,$username,$password,'boutitne_13th_Square');

        $uID = $conn->real_escape_string( $_POST['uID']);
        $ratedIndex = $conn->real_escape_string($_POST['ratedIndex']);
        $ratedIndex++;
				
				if(!$uID === 0){
					$conn->query("INSERT INTO ratingStars(ratedIndex) VALUES ('$ratedIndex')");

					$sql = $conn->query("SELECT id FROM ratingStars ORDER BY id DESC LIMIT 1");

					$uData = $sql->fetch_assoc();
					$uID = $uData['id'];
				}else{
						$conn->query("UPDATE ratingStars SET ratedIndex = '$ratedIndex' WHERE id='$uID'");

				}	

				exit(json_encode(array('id' => $uID)));
    }
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Ratings</title>
		<script src="https://kit.fontawesome.com/3a962f3c69.js" crossorigin="anonymous"></script>
		<style>
		div {
			background-color: black;
			padding: 50px;
		}
		</style>
	</head>

	<body>
		<div align="center">
			<i class="fas fa-star" data-index="0"></i>
			<i class="fas fa-star" data-index="1"></i>
			<i class="fas fa-star" data-index="2"></i>
			<i class="fas fa-star" data-index="3"></i>
			<i class="fas fa-star" data-index="4"></i>
		</div>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"
			integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
		</script>
		<script>
		var ratedIndex = -1,
			uID = 0;
		$(document).ready(function() {
			//check:
			resetStarColor();
			if (localStorage.getItem('ratedIndex') != null) setStars(parseInt(localStorage.getItem('ratedIndex')));
			$('.fa-star').on('click', function() {
				ratedIndex = parseInt($(this).data('index'));
				localStorage.setItem('ratedIndex', ratedIndex);
				saveToTheDB();
			})
			$('.fa-star').mouseover(function() {
				resetStarColor();
				var currentIndex = parseInt($(this).data('index'));
				setStars(currentIndex);
			});
			$('.fa-star').mouseleave(function() {
				resetStarColor();
				if (ratedIndex != -1) setStars(ratedIndex);
			});
		});

		function saveToTheDB() {
			$.ajax({
				url: "ratingbar.php",
				method: "POST",
				dataType: 'json',
				data: {
					save: 1,
					uID: uID,
					ratedIndex: ratedIndex,
				},
				success: function(r) {
					uID = r.uid;
				}
			})
		}

		function setStars(max) {
			for (var i = 0; i <= max; i++) {
				//console.log("mouseover");
				$('.fa-star:eq(' + i + ')').css('color', 'green');
			}
		}

		function resetStarColor() {
			$('.fa-star').css('color', 'white')
		}
		</script>
	</body>

</html>