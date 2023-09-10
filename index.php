
<?php

include("includes/header.php");

?>
<div class="main">
		
		<!--left-->
		<div class="left">

			<div class="container">

				<div class="menu">

					<div class="user">
						<img src="assets/images/profile_pics/defaults/head_alizarin.png">
						<span>Jether Mutale</span>
					</div>


					<div class="item">
						<img src="assets/images/icons/1.png">
						<span>Friends</span>
					</div>

					<div class="item">
						<img src="assets/images/icons/2.png">
						<span>Groups</span>
					</div>

					<div class="item">
						<img src="assets/images/icons/3.png">
						<span>Market Place</span>
					</div>

					<div class="item">
						<img src="assets/images/icons/4.png">
						<span>Watch</span>
					</div>

					<div class="item">
						<img src="assets/images/icons/5.png">
						<span>Memories</span>
					</div>

				</div>
				<hr/>

				<div class="menu">
					<span>Your shortcuts</span>

					<div class="item">
						<img src="assets/images/icons/6.png">
						<span>Events</span>
					</div>

					<div class="item">
						<img src="assets/images/icons/7.png">
						<span>Gaming</span>
					</div>

					<div class="item">
						<img src="assets/images/icons/8.png">
						<span>Gallery</span>
					</div>

					<div class="item">
						<img src="assets/images/icons/9.png">
						<span>Videos</span>
					</div>

						<div class="item">
						<img src="assets/images/icons/10.png">
						<span>Messages</span>
					</div>


				</div>

				<hr/>

				<div class="menu">
					<span>Others</span>

					<div class="item">
						<img src="assets/images/icons/11.png">
						<span>Fundraiser</span>
					</div>

					<div class="item">
						<img src="assets/images/icons/12.png">
						<span>Tutorial</span>
					</div>

					<div class="item">
						<img src="assets/images/icons/13.png">
						<span>Courses</span>
					</div>


					

				</div>


				
			</div>
		
		</div>
		<!--left ends-->


		<!--center-->
		<div class="center">



			<div class="container">

				<div class="post">
					<img src="assets/images/profile_pics/defaults/head_alizarin.png">
					<div class="tek">
						<span onclick="openModel" >start a post</span>
					</div>
				</div>

				<div id="modalBox" >
				
						<span>Post</span>
						<form action="">
							<input type="file" name="fileToUpload" id="fileToUpload">
							<textarea name="post_text" id="post_text" placeholder="Got something to say?"></textarea>
							<button type="submit" name="post" id="post_button" value="Post">Post</button>
							
						</form>
					<img src="assets/images/icons/close.png" class="close" onclick="closeModel">
				</div>

				<div class="media">
					
					<div class="one">
						<img src="">
						<span></span>
					</div>

					<div class="two">
						<img src="">
						<span></span>
					</div>

					<div class="three">
						<img src="">
						<span></span>
					</div>

				</div>
				
			</div>


			<div class="posts">
				<div class="container">
					<div class="user">
						<div class="userInfo">
							<img src="assets/images/profile_pics/defaults/head_alizarin.png">
							<div class="details">
								<a><span class="name">Mutale Jether</span></a>
								<span class="date">1 min ago</span>
							</div>
							
						</div>
						
						<i class="fa fa-ellipsis fa-lg"></i>
					</div>

					<div class="content">
						
						<p>tjhh uiet uit yitrjeijiwejri jiowej iojte rnnioeyijtryiore ioitrjwei</p>
						<img src="assets/images/profile_pics/defaults/head_alizarin.png">
					</div>

					<div class="info">
						<div class="item">
							<i class="fa fa-heart fa-lg"></i>
							2 Likes
						</div>

						<div class="item">
							<i class="fa fa-comment fa-lg"></i>
							4 Comments
						</div>

						<div class="item">
							<i class="fa fa-share fa-lg"></i>
							12 Share
						</div>
					</div>
				</div>
			</div>






		</div>
		<!--center ends-->


		<!--right-->
		<div class="right">
			
			<div class="container">
				
				<div class="item">
					<span>Suggestions for you</span>

					<div class="user">
						<div class="userInfo">
							<img src="assets/images/profile_pics/defaults/head_alizarin.png">
							<span>Jether Mutale</span>
						</div>

						<div class="buttons">
							<button>follow</button>
							<button>dismiss</button>
						</div>

					</div>

					<div class="user">
						<div class="userInfo">
							<img src="assets/images/profile_pics/defaults/head_carrot.png">
							<span>Sarah Lutaaya</span>
						</div>

						<div class="buttons">
							<button>follow</button>
							<button>dismiss</button>
						</div>

					</div>

				</div>



				<div class="item">
					<span>Latest Activities</span>

					<div class="user">
						<div class="userInfo">
							<img src="assets/images/profile_pics/defaults/head_carrot.png">

							<p>
								<span>Sarah</span> changed their cover picture
							</p>
						</div>

						<span>1 min ago.</span>

					</div>

					<div class="user">
						<div class="userInfo">
							<img src="assets/images/profile_pics/defaults/head_carrot.png">

							<p>
								<span>Sarah</span> changed their cover picture
							</p>
						</div>

						<span>1 min ago.</span>

					</div>

					<div class="user">
						<div class="userInfo">
							<img src="assets/images/profile_pics/defaults/head_carrot.png">

							<p>
								<span>Sarah</span> changed their cover picture
							</p>
						</div>

						<span>1 min ago.</span>

					</div>

				</div>

				<div class="item">
					<span>Online Friends</span>

					<div class="user">
						<div class="userInfo">
							<img src="assets/images/profile_pics/defaults/head_carrot.png">
							<div class="online"></div>
							<span>Sarah</span>
						</div>


					</div>

					<div class="user">
						<div class="userInfo">
							<img src="assets/images/profile_pics/defaults/head_carrot.png">
							<div class="online"></div>
							<span>Sarah</span>
						</div>


					</div>

					<div class="user">
						<div class="userInfo">
							<img src="assets/images/profile_pics/defaults/head_carrot.png">
							<div class="online"></div>
							<span>Sarah</span>
						</div>


					</div>


				</div>

			</div>

		</div>
		<!--right ends-->
	</div>


<script >
	
	let modalBox=document.getElementById("modalBox");

	// document.onmouseleave =function (){
	// 	modalBox.style.display="block";
	// }

	// // function openModel(){
	// // 	modalBox.style.display ="block";
	// // }

	// function closeModel(){
	// 	modalBox.style.display ="none";
	// }


	function openModel() { 
  modalBox.show(); 
} 

function closeModel() { 
  modalBox.close(); 
} 
</script>

</body>
</html>