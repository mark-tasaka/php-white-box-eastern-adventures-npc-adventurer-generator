<!DOCTYPE html>
<html>
<head>
<title>Launch Page: White Box Eastern Adventures NPC Adventurers Generator</title>
    
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Mark Tasaka 2019">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    
	<link rel="stylesheet" href="css/githubMCC.css"/> 
	<link rel="stylesheet" href="css/bf_additions.css"/> 
	<link rel="stylesheet" href="css/bf_additions2.css"/> 
	<link rel="stylesheet" href="css/general.css"/> 
	<link rel="stylesheet" href="css/basic_style.css"/> 

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="utf-8" />
	

	</head>
	
	
<body>
    

	
	<section>
		
		<h1><img src="images/title.png" alt="White Box Eastern Adventures NPC Adventurers Generator" class="image" /></h1>
		
				
			
		
                                
                
            <br/>
            <br/>
        
        <p>The ‘White Box: Eastern Adventures’ Non-Player Character (NPC) Adventurer Generator is designed with PHP to randomly generate four NPC Adventurers.  The NPC Adventurers reflect the four character classes and the four species (humans, koropokuru, kitsune and tengu) available in the game.  Unique character sheets have been created for the four character classes, with unique attributes and abilities generated for the classes.  Seven drop down menus appear on the Launch Page, providing the user with options for customizing the NPC Adventurers generated.  POST methods are used to collect the data from the drop down menus, where the data is sent to npc_adventurers.php.  Wherever possible, external PHP files have been created to store related functions; thus, aiming to create a program with high cohesion and low coupling, an important principle of object-orientated design.  </p>    

        <br/>
        <br/>
            

            

            
				<form action="" id ="hirelingForm"  target="_blank" method="post">
            

						<div class="content1b">
				


				
						
				<span class="formIputDescription1b">Classes:</span>	
<select id="npcType" name="theNpcType" class="">	
<option value="1" selected>Random</option>
<option value="2">Bushi Only</option>
<option value="3">Ninja Only</option>
<option value="4">Sohei Only</option>
<option value="5">Shugenja Only</option>
</select>

										
<span class="formIputDescription1b">Level(s):</span>	
<select id="level" name="theLevel" class="">	
<option value="1" selected>1 - 3</option>
<option value="2">4 - 6</option>
<option value="3">7 - 8</option>
<option value="4">9 - 10</option>
<option value="5">1</option>
<option value="6">2</option>
<option value="7">3</option>
<option value="8">4</option>
<option value="9">5</option>
<option value="10">6</option>
<option value="11">7</option>
<option value="12">8</option>
<option value="13">9</option>
<option value="14">10</option>
</select>
														
<span class="formIputDescription1b">Name:</span>	
<select id="npcName" name="theNpcName" class="">	
<option value="1" selected>Full Name</option>
<option value="2">Given Name</option>
</select>

				
								
<br/>
<br/>
								
<span class="formIputDescription1b">Race:</span>	
<select id="npcRace" name="theNpcRace" class="">	
<option value="1" selected>Random</option>
<option value="2">Human</option>
</select>                               
											 
<span class="formIputDescription1b">Sex:</span>	
<select id="npcSex" name="theNPCSex" class="">	
<option value="1" selected>Random</option>
<option value="2">Male</option>
<option value="3">Female</option>
<option value="4">Blank</option>
</select>
								
<span class="formIputDescription1b">Alignment:</span>	
<select id="alignment" name="theAlignment" class="">	
<option value="1" selected>Random</option>
<option value="2">Lawful</option>
<option value="3">Neutral</option>
<option value="4">Chaotic</option>
<option value="5">Blank</option>
</select>

<br/>
<br/>
								

								
<span class="formIputDescription1b">Personality Traits:</span>	
<select id="personality" name="thePersonality" class="">	
<option value="1" selected>Random</option>
<option value="2">Blank</option>
</select>

								
<span class="formIputDescription1b">Wealth:</span>	
<select id="wealth" name="theWealth" class="">	
<option value="1" selected>Modest</option>
<option value="2">Poor</option>
<option value="3">Comfortable</option>
<option value="4">Affluent</option>
</select>



        
            			  
			<div class="generatorButtonA2">
			
			     <span class="generatorbuttonsC1">

				
                    <input type="submit" value="" id="generate_characters3"/>
			     
                </span>
				
			     <span class="generatorbuttonsC1">
				
                     <input type="reset"  value="" id="reset_generator2"/>
		
				</span>
                
		
            </div>
            </div>
            
            
            </form>
            
            
            
                
                
                	
                <script>
        
                    $("#generate_characters3").click(function(){
         
    
                        $("#hirelingForm").attr('action', "npc/npc_adventurers.php");
    
                    });
                    
                </script>
        
                
                
      
        
                
    </section>


</body>
</html>