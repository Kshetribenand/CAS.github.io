<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/animation_main_dody.css">
	<title></title>
</head>

	

			<ul class="menu">
				<div class="toggle"><ion-icon name="add-outline"></ion-icon></div>
				<li style="--i:0;" class="active"> <a href="#">  <ion-icon name="school-sharp"></ion-icon>  </a> </li>

				<li style="--i:1;"> <a href="#">  <ion-icon name="logo-angular"></ion-icon> </a> </li>

				<li style="--i:2;"> <a href="#">  <ion-icon name="people-circle-outline"></ion-icon> </a> </li>

				<li style="--i:3;"> <a href="#">  <ion-icon name="sunny-outline"></ion-icon> </a> </li>

				<li style="--i:4;"> <a href="#">  <ion-icon name="time-outline"></ion-icon>  </a> </li>

				<li style="--i:5;"> <a href="#">  <ion-icon name="text-outline"></ion-icon>  </a> </li>

				<li style="--i:6;"> <a href="#">  <ion-icon name="tv-outline"></ion-icon>  </a> </li>

				<li style="--i:7;"> <a href="#">  <ion-icon name="warning-outline"></ion-icon> </a> </li>

				<div class="sign">
					
				</div>

			</ul>


			<script> 

				let menuToggle = document.querySelector('.toggle')
				let menu = document.querySelector('.menu')

				menuToggle.onclick = function(){
					menu.classList.toggle('active')
					menuToggle.classList.toggle('active')
				}
				const list = document.querySelectorAll('li');
				function activeLink(){
					list.forEach((item) => 
					item.classList.remove('active'))
					this.classList.add('active')
				}
				list.forEach((item) => 
				item.addEventListener('click',activeLink))

			</script>
			<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
			<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>




</html>