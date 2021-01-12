<html>

<head>
	<title>
	</title>
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
	</head>
	<body onLoad="fetch()">
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light p-3 nav_style">
  <a class="navbar-brand pl-5 " href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptoms">symptoms</a>
      </li>
		<li class="nav-item">
        <a class="nav-link" href="#Prevention">prevention</a>
      </li>
		<li class="nav-item">
        <a class="nav-link" href="../GULLY SPORTS/logout.php">logout</a>
      </li>
		<li class="nav-item">
        <a class="nav-link" href="#contact">contact us</a>
      </li>
	  </ul>
    
  </div>
</nav>
		<div class="main_header">
			<div class= "row w-100 h-100">
			  <div class="col-lg-5 col md-5 col-12 order-1g-1 order-2">
				
				<div  class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
					<img src="images/people.png" width="300" height="300">
				 
				 </div>
				</div>
			
				 
				
				 <div class="col-lg-7 col md-7 col-12 order-1g1 order-2">
				
				<div class"rightside   w-100 h-100 d-flex justify-content-center align-items-center"><br><br><br><br><br><br>


					 <h1>Let's Stay Home and Fight Together Againts <span class="corona">Cor <img src="images/corona.png"
						 </span>na Virus</h1>
			    </div>
				</div> 
			</div>    
		</div>
			<!-- *******corona latest update********--> 
			
			<section class="corona_update container-fluid">
			<div class="mb-3">
				<h3 class="text-uppercase text-center">covid-19 updates </h3>
				</div>
				<div class="table-responsive">
					<table class="table table-bordered table-striped text-center" id="tbval" >
					<tr>
						<th>Country</th>
						<th>TotalConfirmed</th>
						<th>TotalRecoverd</th>
						<th>TotalDeaths</th>
						<th>NewConfirmed</th>
						<th>NewRecovered</th>
						<th>NewDeaths</th>
						
						</tr>
					
					</table>
				</div>
				</div>
			</section>
			
		<!--	****************about section****** -->
			
           <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
			<div class="section_header text-center mb-5 mt-4">
			   
			   <h1>About Covid-19</h1></div>
			   
			   <div class="row pt-5">
			   <div class="col-lg-5 col -md-6 col-12 ml-5">
				   <img src="images/aboutcorona.png" class="img-fluid">
				    </div>
				   <div class="col-lg-6 col-md col-12 ml-2">
					   <h2>What is COVID-19(Corona-virus)</h2>
					   <p>Coronavirus disease 2019 (COVID-19) is an infectious disease caused by severe acute respiratory syndrome coronavirus  It was first identified in December 2019 in Wuhan, China, and has since spread globally, resulting in an ongoing pandemic. </p>
					   <p>Common symptoms include fever, cough, fatigue, shortness of breath, and loss of smell and taste. While the majority of cases result in mild symptoms, some progress to acute respiratory distress syndrome (ARDS) likely precipitated by a cytokine storm, multi-organ failure, septic shock, and blood clots.The time from exposure to onset of symptoms is typically around five days but may range from two to fourteen days.</p>
					  
				   </div>
				   
			   </div>
			</div>
			
			
			
			<!--	****************Symptoms section****** -->
			<div class="container-fluid  pt-5 pb-5" id="symptoms">
			<div class="section_header text-center mb-5 mt-4">
			   
			   <h1>Coronavirus Symptoms</h1>
				</div>
				
				<div class="container">
				 <div class="row">
					<div class="col- lg-4 col-md-4 col-12 mt-5">
						 <figure class="text-center">
					 <img src="images/sympotoms/cough.png" class="img-fluid" width="120" height="120">
					 

							<figcaption>Cough
							 </figcaption> 
							 </figure>
					 </div>
					
					 
					 <div class="col- lg-4 col-md-4 col-12 mt-5">
						 <figure class="text-center">
					 <img src="images/sympotoms/cold.png" class="img-fluid" width="150" height="120">
					 

							<figcaption>Cold
							 </figcaption> 
							 </figure>
					 </div>
					
					 
					 <div class="col- lg-4 col-md-4 col-12 mt-5">
						 <figure class="text-center">
					 <img src="images/sympotoms/breathing.png" class="img-fluid" width="150" height="120">
					 

							<figcaption>difficulty in breathing
							 </figcaption> 
							 </figure>
					 </div>
					
					 <div class="col- lg-4 col-md-4 col-12 mt-5">
						 <figure class="text-center">
					 <img src="images/sympotoms/runnynose.png" class="img-fluid" width="120" height="120">
					 

							<figcaption>runny nose
							 </figcaption> 
							 </figure>
					 </div>
					
					 <div class="col- lg-4 col-md-4 col-12 mt-5">
						 <figure class="text-center">
					 <img src="images/sympotoms/tridness.png" class="img-fluid" width="120" height="120">
					 

							<figcaption>triedness
							 </figcaption> 
							 </figure>
					 </div>
					 
					<div class="col- lg-4 col-md-4 col-12 mt-5">
						 <figure class="text-center">
					 <img src="images/sympotoms/fever.png" class="img-fluid" width="120" height="120">
					 

							<figcaption>fever
							 </figcaption> 
							 </figure>
					 </div>
					
					</div>
				</div>
			</div>
			
			
			
			<!--	****************prevention section****** -->
			
			
			
			
			<div class="container-fluid  pt-5 pb-5" id="Prevention">
			<div class="section_header text-center mb-5 mt-4">
			   
			   <h1>Prevention Against Coronavirus</h1>
				</div>
				
				<div class="container">
				 <div class="row">
					<div class="col- lg-4 col-md-4 col-12 mt-5">
						 <figure class="text-center">
					 <img src="images/preventation/handwash.png" class="img-fluid" width="140" height="120">
					 

							<figcaption>wash hands continuously
							 </figcaption> 
							 </figure>
					 </div>
					
					 
					 <div class="col- lg-4 col-md-4 col-12 mt-5">
						 <figure class="text-center">
					 <img src="images/preventation/covernose.png" class="img-fluid" width="150" height="120">
					 

							<figcaption>Cover nose 
							 </figcaption> 
							 </figure>
					 </div>
					
					 
					 <div class="col- lg-4 col-md-4 col-12 mt-5">
						 <figure class="text-center">
					 <img src="images/preventation/socialdistancing.png" class="img-fluid" width="150" height="120">
					 

							<figcaption>social distancing
							 </figcaption> 
							 </figure>
					 </div>
					
					 <div class="col- lg-4 col-md-4 col-12 mt-5">
						 <figure class="text-center">
					 <img src="images/preventation/fever.png" class="img-fluid" width="120" height="120">
					 

							<figcaption>seek medical early
							 </figcaption> 
							 </figure>
					 </div>
					
					 <div class="col- lg-4 col-md-4 col-12 mt-5">
						 <figure class="text-center">
					 <img src="images/preventation/stayinformed.png" class="img-fluid" width="150" height="120">
					 

							<figcaption>stay informed
							 </figcaption> 
							 </figure>
					 </div>
					 
					<div class="col- lg-4 col-md-4 col-12 mt-5">
						 <figure class="text-center">
					 <img src="images/preventation/stayhome.png" class="img-fluid" width="160" height="120">
					 

							<figcaption>stay home
							 </figcaption> 
							 </figure>
					 </div>
					
					</div>
				</div>
			</div>
			
			
			
			<!--	****************contact section****** -->
			
			
			
			
			<div class="container-fluid  pt-5 pb-5" id="contact">
			<div class="section_header text-center mb-5 mt-4">
			   
			   <h1>Contact Us</h1>
				</div>
				
				
				<div class="container">
				 <div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
					 
					 <form action="" method="post" >
           <div class="form-group">
             <label >Name</label>
              <input type="text" class="form-control" name="username"  id="exampleFormControlInput1" placeholder="name"  autocomplete="off"  required>
          </div>
  
            <div class="form-group">
    <label >Email address</label>
    <input type="email" class="form-control" name="email"  id="exampleFormControlInput1" placeholder="name@example.com"  required autocomplete="off">
  </div>
       
						  
					 
           <div class="form-group">
             <label >Mobile no.</label>
              <input type="tel" class="form-control" name="mobile"id="exampleFormControlInput1" placeholder="mobile"  autocomplete="off" required>
          </div>
						 
						 
					<div class="form-group">
    <label >Select Symptoms</label>	 <br>

						<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
						<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]"  value="cold">
							<label class="custom-control-label" for="customcheckbox1">Cold</label>
						
						</div>
						
						
						<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
						<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]"  value="fever">
							<label class="custom-control-label" for="customcheckbox2">fever</label>
						</div>
						
						
						
						<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
						<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]"  value="breath">
							<label class="custom-control-label" for="customcheckbox3">difficulity in breathing</label>
						
						</div>
						
						<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
						<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]"  value="tired">
							<label class="custom-control-label" for="customcheckbox4">feeling weak</label>
						
						</div>
						 <br><br>



						 
						 
						 
						 
						 
						 
						 
						 <div class="form-group">
             <label >Description</label>
							 <br>

               <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
                      </div>
						
						<button type="submit" class="btn btn-primary" name="submit">Submit</button>
                      </form>
					 </div>
					
					</div>
				</div>
			</div>
				
				
				
				
				
		<!--		/////footter        -->
				
				<footer class="mt-5">
				<div class="footer_style text white text-center container-fluid">
					<p>copyright by Ashay</p>
					</div>
				
				</footer>
			
				<script>
				function fetch(){
					$.get("https://api.covid19api.com/summary",
						 function(data)
						  {
						//console.log(data['Countries'].length)
						
						var tbval = document.getElementById('tbval');
						
						for(var i=1; i<(data['Countries'].length);i++)
							{
								var x= tbval.insertRow();
								x.insertCell(0);
								
								tbval.rows[i].cells[0].innerHTML= data['Countries'][i-1]['Country'];
								tbval.rows[i].cells[0].style.background ='#7a4a91';
								tbval.rows[i].cells[0].style.color ='#fff';
							
							
								
								
								x.insertCell(1);
							tbval.rows[i].cells[1].innerHTML= data['Countries'][i-1]['TotalConfirmed'];
								tbval.rows[i].cells[1].style.background ='#4bb7d8';
								
								
								
								x.insertCell(2);
							tbval.rows[i].cells[2].innerHTML= data['Countries'][i-1]['TotalRecovered'];
								tbval.rows[i].cells[2].style.background ='#9cc850';
								
								x.insertCell(3);
							tbval.rows[i].cells[3].innerHTML= data['Countries'][i-1]['TotalDeaths'];
								tbval.rows[i].cells[3].style.background ='red';
								
									x.insertCell(4);
							tbval.rows[i].cells[4].innerHTML= data['Countries'][i-1]['NewConfirmed'];
								tbval.rows[i].cells[4].style.background ='#4bb7d8';
								
								
									x.insertCell(5);
							tbval.rows[i].cells[5].innerHTML= data['Countries'][i-1]['NewRecovered'];
								tbval.rows[i].cells[5].style.background ='#9cc850';
								
								
								
							
									x.insertCell(6);
							tbval.rows[i].cells[6].innerHTML= data['Countries'][i-1]['NewDeaths'];
								tbval.rows[i].cells[6].style.background ='red';
								
								
							
							
							
							
							}
						
						
						
						
					}
						 
						 )
				}
				</script>
	</body>
</html>
		
		
		<?php
		
		include 'dbcorona.php';
		if(isset($_POST['submit'])){
			
			$username=$_POST['username'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$coronasym=$_POST['coronasym'];
			$msg=$_POST['msg'];
			$chk="";
			foreach($coronasym as $chk1){
				$chk .=$chk1.",";
			}
			
			$insertquery ="insert into coronacase(username, email,mobile,symp,message) values('$username ','$email','$mobile','$chk','$msg')";
			
			
			$query =mysqli_query($con,$insertquery);
			if($query){
				?>
		<script>alert("Submitted succesfully");</script>
		<?php
				
			}
		}
		?>