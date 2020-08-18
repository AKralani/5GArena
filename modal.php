<!--Modal 1 -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Samsung Galaxy Note20 & Ultra</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '1'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<div style="text-align:center"> 
			  <button onclick="playPause()">Play/Pause</button> 
			  <button onclick="makeBig()">Big</button>
			  <button onclick="makeSmall()">Small</button>
			  <button onclick="makeNormal()">Normal</button>
			  <br><br>
			  <video id="video1" width="420">
				<source src="./assets/video/n20.mp4" type="video/mp4">
				<source src="./assets/video/n20.ogg" type="video/ogg">
				Your browser does not support HTML video.
			  </video>
			</div> 

			<script> 
			var myVideo = document.getElementById("video1"); 

			function playPause() { 
			  if (myVideo.paused) 
				myVideo.play(); 
			  else 
				myVideo.pause(); 
			} 

			function makeBig() { 
				myVideo.width = 560; 
			} 

			function makeSmall() { 
				myVideo.width = 320; 
			} 

			function makeNormal() { 
				myVideo.width = 420; 
			} 
			</script> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!--Modal 2 -->
  <div class="modal" id="myModal2">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Samsung Galaxy S20, Plus & Ultra</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '2'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<div style="text-align:center"> 
			  <button onclick="playPause2()">Play/Pause</button> 
			  <button onclick="makeBig2()">Big</button>
			  <button onclick="makeSmall2()">Small</button>
			  <button onclick="makeNormal2()">Normal</button>
			  <br><br>
			  <video id="video2" width="420">
				<source src="./assets/video/s20.mp4" type="video/mp4">
				<source src="./assets/video/s20.ogg" type="video/ogg">
				Your browser does not support HTML video.
			  </video>
			</div> 

			<script> 
			var myVideo2 = document.getElementById("video2"); 

			function playPause2() { 
			  if (myVideo2.paused) 
				myVideo2.play(); 
			  else 
				myVideo2.pause(); 
			} 

			function makeBig2() { 
				myVideo2.width = 560; 
			} 

			function makeSmall2() { 
				myVideo2.width = 320; 
			} 

			function makeNormal2() { 
				myVideo2.width = 420; 
			} 
			</script> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
    <!--Modal 3 -->
  <div class="modal" id="myModal3">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Samsung Galaxy Z Fold2 5G</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '3'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<div style="text-align:center"> 
			  <button onclick="playPause3()">Play/Pause</button> 
			  <button onclick="makeBig3()">Big</button>
			  <button onclick="makeSmall3()">Small</button>
			  <button onclick="makeNormal3()">Normal</button>
			  <br><br>
			  <video id="video3" width="420">
				<source src="./assets/video/fold2.mp4" type="video/mp4">
				<source src="./assets/video/fold2.ogg" type="video/ogg">
				Your browser does not support HTML video.
			  </video>
			</div> 

			<script> 
			var myVideo3 = document.getElementById("video3"); 

			function playPause3() { 
			  if (myVideo3.paused) 
				myVideo3.play(); 
			  else 
				myVideo3.pause(); 
			} 

			function makeBig3() { 
				myVideo3.width = 560; 
			} 

			function makeSmall3() { 
				myVideo3.width = 320; 
			} 

			function makeNormal3() { 
				myVideo3.width = 420; 
			} 
			</script> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!--Modal 4 -->
  <div class="modal" id="myModal4">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Samsung Galaxy Z Flip</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '4'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<div style="text-align:center"> 
			  <button onclick="playPause4()">Play/Pause</button> 
			  <button onclick="makeBig4()">Big</button>
			  <button onclick="makeSmall4()">Small</button>
			  <button onclick="makeNormal4()">Normal</button>
			  <br><br>
			  <video id="video4" width="420">
				<source src="./assets/video/flip.mp4" type="video/mp4">
				<source src="./assets/video/flip.ogg" type="video/ogg">
				Your browser does not support HTML video.
			  </video>
			</div> 

			<script> 
			var myVideo4 = document.getElementById("video4"); 

			function playPause4() { 
			  if (myVideo4.paused) 
				myVideo4.play(); 
			  else 
				myVideo4.pause(); 
			} 

			function makeBig4() { 
				myVideo4.width = 560; 
			} 

			function makeSmall4() { 
				myVideo4.width = 320; 
			} 

			function makeNormal4() { 
				myVideo4.width = 420; 
			} 
			</script> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  

  <!--Modal 2-1 -->
  <div class="modal" id="myModal21">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">iPhone 11 Pro and iPhone 11 Pro Max</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '5'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<div style="text-align:center"> 
			  <button onclick="playPause21()">Play/Pause</button> 
			  <button onclick="makeBig21()">Big</button>
			  <button onclick="makeSmall21()">Small</button>
			  <button onclick="makeNormal21()">Normal</button>
			  <br><br>
			  <video id="video21" width="420">
				<source src="./assets/video/i11p.mp4" type="video/mp4">
				<source src="./assets/video/i11p.ogg" type="video/ogg">
				Your browser does not support HTML video.
			  </video>
			</div> 

			<script> 
			var myVideo21 = document.getElementById("video21"); 

			function playPause21() { 
			  if (myVideo21.paused) 
				myVideo21.play(); 
			  else 
				myVideo21.pause(); 
			} 

			function makeBig21() { 
				myVideo21.width = 560; 
			} 

			function makeSmall21() { 
				myVideo21.width = 320; 
			} 

			function makeNormal21() { 
				myVideo21.width = 420; 
			} 
			</script> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!--Modal 2-2 -->
  <div class="modal" id="myModal22">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">iPhone 11</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '6'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<div style="text-align:center"> 
			  <button onclick="playPause22()">Play/Pause</button> 
			  <button onclick="makeBig22()">Big</button>
			  <button onclick="makeSmall22()">Small</button>
			  <button onclick="makeNormal22()">Normal</button>
			  <br><br>
			  <video id="video22" width="420">
				<source src="./assets/video/i11.mp4" type="video/mp4">
				<source src="./assets/video/i11.ogg" type="video/ogg">
				Your browser does not support HTML video.
			  </video>
			</div> 

			<script> 
			var myVideo22 = document.getElementById("video22"); 

			function playPause22() { 
			  if (myVideo22.paused) 
				myVideo22.play(); 
			  else 
				myVideo22.pause(); 
			} 

			function makeBig22() { 
				myVideo22.width = 560; 
			} 

			function makeSmall22() { 
				myVideo22.width = 320; 
			} 

			function makeNormal22() { 
				myVideo22.width = 420; 
			} 
			</script> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
    <!--Modal 2-3 -->
  <div class="modal" id="myModal23">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">iPhone SE (2020)</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '7'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<div style="text-align:center"> 
			  <button onclick="playPause23()">Play/Pause</button> 
			  <button onclick="makeBig23()">Big</button>
			  <button onclick="makeSmall23()">Small</button>
			  <button onclick="makeNormal23()">Normal</button>
			  <br><br>
			  <video id="video23" width="420">
				<source src="./assets/video/ise.mp4" type="video/mp4">
				<source src="./assets/video/ise.ogg" type="video/ogg">
				Your browser does not support HTML video.
			  </video>
			</div> 

			<script> 
			var myVideo23 = document.getElementById("video23"); 

			function playPause23() { 
			  if (myVideo23.paused) 
				myVideo23.play(); 
			  else 
				myVideo23.pause(); 
			} 

			function makeBig23() { 
				myVideo23.width = 560; 
			} 

			function makeSmall23() { 
				myVideo23.width = 320; 
			} 

			function makeNormal23() { 
				myVideo23.width = 420; 
			} 
			</script> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!--Modal 2-4 -->
  <div class="modal" id="myModal24">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">iPhone XR</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '8'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<div style="text-align:center"> 
			  <button onclick="playPause24()">Play/Pause</button> 
			  <button onclick="makeBig24()">Big</button>
			  <button onclick="makeSmall24()">Small</button>
			  <button onclick="makeNormal24()">Normal</button>
			  <br><br>
			  <video id="video24" width="420">
				<source src="./assets/video/ixr.mp4" type="video/mp4">
				<source src="./assets/video/ixr.ogg" type="video/ogg">
				Your browser does not support HTML video.
			  </video>
			</div> 

			<script> 
			var myVideo24 = document.getElementById("video24"); 

			function playPause24() { 
			  if (myVideo24.paused) 
				myVideo24.play(); 
			  else 
				myVideo24.pause(); 
			} 

			function makeBig24() { 
				myVideo24.width = 560; 
			} 

			function makeSmall24() { 
				myVideo24.width = 320; 
			} 

			function makeNormal24() { 
				myVideo24.width = 420; 
			} 
			</script> 
        </div>
		
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
		
		<!--Modal 3-1 -->
  <div class="modal" id="myModal31">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Xiaomi Mi 10</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '9'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/KS6IvHRhSFQ" 
			frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!--Modal 3-2 -->
  <div class="modal" id="myModal32">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Xiaomi POCO F2 Pro</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '10'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/5GlypUvALJA"
			frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
    <!--Modal 3-3 -->
  <div class="modal" id="myModal33">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Xiaomi Redmi Note 9</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '11'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/89AyLjElVH0" 
			frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!--Modal 3-4 -->
  <div class="modal" id="myModal34">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Xiaomi Mi A3</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '12'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/uaewrFz7Qp8"
			frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
		
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  
  	<!--Modal 4-1 -->
  <div class="modal" id="myModal41">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Google Pixel 4a</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '13'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/v_f3Km_eQnw"
			frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!--Modal 4-2 -->
  <div class="modal" id="myModal42">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Google Pixel 4 XL</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '14'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/RgnN2mjLbz0" 
			frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
    <!--Modal 4-3 -->
  <div class="modal" id="myModal43">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Google Pixel 4</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '15'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/0gizLT97cKo"
			frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!--Modal 4-4 -->
  <div class="modal" id="myModal44">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Google Pixel 3a</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<?php 
			$conn =  mysqli_connect('localhost', 'root', '','5garena');

			$res = mysqli_query($conn,"SELECT * FROM phones where id = '12'");

			$txt = " - ";

			if (mysqli_num_rows($res) > 0) 
			{
				 echo "<table border=2>";
						echo "<tr>";
							echo "<th>Brand</th>";
							echo "<th>Display</th>";
							echo "<th>Camera</th>";
							echo "<th>RAM</th>";
							echo "<th>CPU</th>";
						echo "</tr>";
			} 

			{
				while ($row = mysqli_fetch_assoc($res))
				{
					echo "<tr>";
							echo "<td>" . $row['brand'] . "</td>";
							echo "<td>" . $row['display'] . "</td>";
							echo "<td>" . $row['camera'] . "</td>";
							echo "<td>" . $row['RAM'] . "</td>";
							echo "<td>" . $row['cpu'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				
			}
			?>
			<br>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/vc7LlUtQgNw"
			frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
		
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>