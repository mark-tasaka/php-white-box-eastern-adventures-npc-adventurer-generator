<!DOCTYPE html>
<html>
<head>
<title>NPC Adventurers: White Box Eastern Adventures</title>
 
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="NPC Adventurers: White Box Eastern Adventures Generator. Tasaka Games.">
	<meta name="keywords" content="NPC Adventurers: White Box Eastern Adventures, Tasaka Games,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2019">
		

	<link rel="stylesheet" type="text/css" href="css/npc.css">

    
    
</head>

    <body>
    
    <!--- php --->
        
        <?php
        
        include 'php/characterSheet.php';
        include 'php/sex.php';
        include 'php/names.php';
        include 'php/class.php';
        include 'php/level.php';
        include 'php/species.php';
        include 'php/abilityScores.php';
        include 'php/personality.php';
        include 'php/alignment.php';
        include 'php/honour.php';
        include 'php/savingThrow.php';
        include 'php/hirelings.php';
        include 'php/toHit.php';
        include 'php/languages.php';
        
        
            
        if(isset($_POST["theNpcType"]))
        {
            $npcType = $_POST["theNpcType"];
    
        }
                
        if(isset($_POST["theNPCSex"]))
        {
            $sexOption = $_POST["theNPCSex"];
    
        }
                
        if(isset($_POST["theNpcName"]))
        {
            $nameOption = $_POST["theNpcName"];
    
        }
                
        if(isset($_POST["theLevel"]))
        {
            $levelOption = $_POST["theLevel"];
    
        }
                
        if(isset($_POST["theNpcRace"]))
        {
            $raceOption = $_POST["theNpcRace"];
    
        }
        
                
        if(isset($_POST["thePersonality"]))
        {
            $personalityOption = $_POST["thePersonality"];
    
        }
                
        if(isset($_POST["theAlignment"]))
        {
            $alignmentOption = $_POST["theAlignment"];
    
        }

        
        $class0 = getClass ($npcType);
        $class1 = getClass ($npcType);
        $class2 = getClass ($npcType);
        $class3 = getClass ($npcType);
        
        
        $charSheet0 = getCharacterSheet ($class0);
        $charSheet1 = getCharacterSheet ($class1);
        $charSheet2 = getCharacterSheet ($class2);
        $charSheet3 = getCharacterSheet ($class3);
        
        $sex0 = getSex($sexOption);
        $sex1 = getSex($sexOption);
        $sex2 = getSex($sexOption);
        $sex3 = getSex($sexOption);
        
        $displaySex0 = showSex($sex0, $sexOption);
        $displaySex1 = showSex($sex1, $sexOption);
        $displaySex2 = showSex($sex2, $sexOption);
        $displaySex3 = showSex($sex3, $sexOption);
        
        $npcName0 = getName ($nameOption, $sex0);
        $npcName1 = getName ($nameOption, $sex1);
        $npcName2 = getName ($nameOption, $sex2);
        $npcName3 = getName ($nameOption, $sex3);

        $npcLevel0 = getLevel ($levelOption);
        $npcLevel1 = getLevel ($levelOption);
        $npcLevel2 = getLevel ($levelOption);
        $npcLevel3 = getLevel ($levelOption);

        $spacing = str_repeat('&nbsp;', 4);

        $race0 = getSpecies ($raceOption);
        $race1 = getSpecies ($raceOption);
        $race2 = getSpecies ($raceOption);
        $race3 = getSpecies ($raceOption);

        $strength0 = strength ($class0);
        $strength1 = strength ($class1);
        $strength2 = strength ($class2);
        $strength3 = strength ($class3);

        $strengthMod0 = strengthMod ($strength0);
        $strengthMod1 = strengthMod ($strength1);
        $strengthMod2 = strengthMod ($strength2);
        $strengthMod3 = strengthMod ($strength3);
        
        $dexterity0 = dexterity ($class0);
        $dexterity1 = dexterity ($class1);
        $dexterity2 = dexterity ($class2);
        $dexterity3 = dexterity ($class3);

        $dexterityMod0 = dexterityMod ($dexterity0);
        $dexterityMod1 = dexterityMod ($dexterity1);
        $dexterityMod2 = dexterityMod ($dexterity2);
        $dexterityMod3 = dexterityMod ($dexterity3);

        $constitution0 = constitution ();
        $constitution1 = constitution ();
        $constitution2 = constitution ();
        $constitution3 = constitution ();
        
        $constitutionMod0 = constitutionMod ($constitution0);
        $constitutionMod1 = constitutionMod ($constitution1);
        $constitutionMod2 = constitutionMod ($constitution2);
        $constitutionMod3 = constitutionMod ($constitution3);
     
        $intelligence0 = intelligence ($class0);
        $intelligence1 = intelligence ($class1);
        $intelligence2 = intelligence ($class2);
        $intelligence3 = intelligence ($class3);

        $intelligenceMod0 = intelligenceMod ($intelligence0);
        $intelligenceMod1 = intelligenceMod ($intelligence1);
        $intelligenceMod2 = intelligenceMod ($intelligence2);
        $intelligenceMod3 = intelligenceMod ($intelligence3);
        
        $wisdom0 = wisdom ($class0);
        $wisdom1 = wisdom ($class1);
        $wisdom2 = wisdom ($class2);
        $wisdom3 = wisdom ($class3);

        $wisdomMod0 = wisdomMod ($wisdom0);
        $wisdomMod1 = wisdomMod ($wisdom1);
        $wisdomMod2 = wisdomMod ($wisdom2);
        $wisdomMod3 = wisdomMod ($wisdom3);
        
        $charisma0 = charisma ();
        $charisma1 = charisma ();
        $charisma2 = charisma ();
        $charisma3 = charisma ();
        
        $charismaMod0 = charismaMod ($charisma0);
        $charismaMod1 = charismaMod ($charisma1);
        $charismaMod2 = charismaMod ($charisma2);
        $charismaMod3 = charismaMod ($charisma3);

    
        $npcPersonality0 = getPersonality ($personalityOption);
        $npcPersonality1 = getPersonality ($personalityOption);
        $npcPersonality2 = getPersonality ($personalityOption);
        $npcPersonality3 = getPersonality ($personalityOption);

        $npcAlignment0 = getAlignment ($alignmentOption);
        $npcAlignment1 = getAlignment ($alignmentOption);
        $npcAlignment2 = getAlignment ($alignmentOption);
        $npcAlignment3 = getAlignment ($alignmentOption);

        $npcFamilyStatus0 = getFamilyStatus ();
        $npcFamilyStatus1 = getFamilyStatus ();
        $npcFamilyStatus2 = getFamilyStatus ();
        $npcFamilyStatus3 = getFamilyStatus ();

        $npcMerit0 = getMerit($npcLevel0);
        $npcMerit1 = getMerit($npcLevel1);
        $npcMerit2 = getMerit($npcLevel2);
        $npcMerit3 = getMerit($npcLevel3);

        $npcHonour0 = $npcFamilyStatus0 + $npcMerit0;
        $npcHonour1 = $npcFamilyStatus1 + $npcMerit1;
        $npcHonour2 = $npcFamilyStatus2 + $npcMerit2;
        $npcHonour3 = $npcFamilyStatus3 + $npcMerit3;

        $npcSave0 = getSavingThrow ($npcLevel0, $class0);
        $npcSave1 = getSavingThrow ($npcLevel1, $class1);
        $npcSave2 = getSavingThrow ($npcLevel2, $class2);
        $npcSave3 = getSavingThrow ($npcLevel3, $class3);

        $npcSaveBonus0 = getSaveBonus ($class0);
        $npcSaveBonus1 = getSaveBonus ($class1);
        $npcSaveBonus2 = getSaveBonus ($class2);
        $npcSaveBonus3 = getSaveBonus ($class3);

        $npcSaveBonusSpecies0 = SaveBonusRace ($race0);
        $npcSaveBonusSpecies1 = SaveBonusRace ($race1);
        $npcSaveBonusSpecies2 = SaveBonusRace ($race2);
        $npcSaveBonusSpecies3 = SaveBonusRace ($race3);

        $npcStrengthMessage0 = strengthMesssage ($strengthMod0);
        $npcStrengthMessage1 = strengthMesssage ($strengthMod1);
        $npcStrengthMessage2 = strengthMesssage ($strengthMod2);
        $npcStrengthMessage3 = strengthMesssage ($strengthMod3);

        $npcDexerityMessage0 = dexterityMesssage ($dexterityMod0);
        $npcDexerityMessage1 = dexterityMesssage ($dexterityMod1);
        $npcDexerityMessage2 = dexterityMesssage ($dexterityMod2);
        $npcDexerityMessage3 = dexterityMesssage ($dexterityMod3);

        $npcRaceBonusMessage0 = raceAbilities ($race0);
        $npcRaceBonusMessage1 = raceAbilities ($race1);
        $npcRaceBonusMessage2 = raceAbilities ($race2);
        $npcRaceBonusMessage3 = raceAbilities ($race3);

        $npcMaxHireling0 = getMaxHirelings ($charisma0, $npcHonour0);
        $npcMaxHireling1 = getMaxHirelings ($charisma1, $npcHonour1);
        $npcMaxHireling2 = getMaxHirelings ($charisma2, $npcHonour2);
        $npcMaxHireling3 = getMaxHirelings ($charisma3, $npcHonour3);

        $npcHirelingMorale0 = getHirelingMorale ($charisma0, $npcHonour0);
        $npcHirelingMorale1 = getHirelingMorale ($charisma1, $npcHonour1);
        $npcHirelingMorale2 = getHirelingMorale ($charisma2, $npcHonour2);
        $npcHirelingMorale3 = getHirelingMorale ($charisma3, $npcHonour3);

        $npcHirelingLoyality0 = getHirelingLoyalty ($charisma0, $npcHonour0);
        $npcHirelingLoyality1 = getHirelingLoyalty ($charisma1, $npcHonour1);
        $npcHirelingLoyality2 = getHirelingLoyalty ($charisma2, $npcHonour2);
        $npcHirelingLoyality3 = getHirelingLoyalty ($charisma3, $npcHonour3);

        $npcToHit0 = getToHit ($class0, $npcLevel0);
        $npcToHit1 = getToHit ($class1, $npcLevel1);
        $npcToHit2 = getToHit ($class2, $npcLevel2);
        $npcToHit3 = getToHit ($class3, $npcLevel3);

        $npcBonusLanguage0 = bonusLanguages ($intelligence0);

        $bonusLan = 3;

        $npcLanguages0 = BonusLanguagesHuman ($bonusLan);
        


        

        

    
        
        ?>
        
        <!-- html id tags -->
        
        
        <aside id="left_top">
            
            <img id="character_sheet0"/>
            

            
            <span id="name0">
                <?php
                
                echo $npcName0 . ' ' . $displaySex0;
                
                ?>
            </span>

            
            <span id="class0">
                <?php
                
                echo $npcLevel0 .  $spacing . $class0;
                
                ?>
            </span>
        
            
            <span id="race0">
                <?php
                
                echo $race0;
                
                ?>
            </span>
            
            
            <span id="strength0">
                <?php
                
                echo $strength0;
                
                ?>
            </span>
            
            
            <span id="strengthMod0">
                <?php
                
                echo $strengthMod0;
                
                ?>
            </span>
                        
            
            <span id="dexterity0">
                <?php
                
                echo $dexterity0;
                
                ?>
            </span>
            
            
            <span id="dexterityMod0">
                <?php
                
                echo $dexterityMod0;
                
                ?>
            </span>
                                    
            
            <span id="constitution0">
                <?php
                
                echo $constitution0;
                
                ?>
            </span>
            
            
            <span id="constitutionMod0">
                <?php
                
                echo $constitutionMod0;
                
                ?>
            </span>
                                              
            
            <span id="intelligence0">
                <?php
                
                echo $intelligence0;
                
                ?>
            </span>
            
            
            <span id="intelligenceMod0">
                <?php
                
                echo $intelligenceMod0;
                
                ?>
            </span>
                                                          
            
            <span id="wisdom0">
                <?php
                
                echo $wisdom0;
                
                ?>
            </span>
            
            
            <span id="wisdomMod0">
                <?php
                
                echo $wisdomMod0;
                
                ?>
            </span>
           
        <span id="charisma0">
                <?php
                
                echo $charisma0;
                
                ?>
            </span>
            
            
            <span id="charismaMod0">
                <?php
                
                echo $charismaMod0;
                
                ?>
            </span>
            
            
            
            <span id="personality0">
                <?php
                
                echo $npcPersonality0;
                
                ?>
            </span>
            
            
            <span id="alignment0">
                <?php
                
                echo $npcAlignment0;
                
                ?>
            </span>
            
            <span id="status0">
                <?php
                
                echo $npcFamilyStatus0;
                
                ?>
            </span>
            
            
            <span id="merit0">
                <?php
                
                echo $npcMerit0;
                
                ?>
            </span>
            
            <span id="honour0">
                <?php
                
                echo $npcHonour0;
                
                ?>
            </span>

            
            
            <span id="save0">
                <?php
                
                echo $npcSave0;
                
                ?>
            </span>
            
            
            
            <span id="saveBonus0">
                <?php
                
                echo  $npcSaveBonus0 . $npcSaveBonusSpecies0;
                
                ?>
            </span>
            
            <span id="specialAbility0">
                <?php
                
                echo  $npcRaceBonusMessage0 . '<br/><br/>' . $npcStrengthMessage0 . $npcDexerityMessage0;
                
                ?>
            </span>
            
            <span id="maxHirelings0">
                <?php
                
                echo $npcMaxHireling0;
                
                ?>
            </span>
            
            <span id="hirelingMorale0">
                <?php
                
                echo $npcHirelingMorale0;
                
                ?>
            </span>
           
            
            <span id="hirelingLoyality0">
                <?php
                
                echo  $npcHirelingLoyality0;
                
                ?>
            </span>
            
            <span id="toHit0">
                <?php
                echo  $npcToHit0;
                ?>
            </span>
            <span id="toHit10">
                <?php
                echo  ($npcToHit0 + 1);
                ?>
            </span>
            <span id="toHit20">
                <?php
                echo  ($npcToHit0 + 2);
                ?>
            </span>
            <span id="toHit30">
                <?php
                echo  ($npcToHit0 + 3);
                ?>
            </span>
            <span id="toHit40">
                <?php
                echo  ($npcToHit0 + 4);
                ?>
            </span>
            <span id="toHit50">
                <?php
                echo  ($npcToHit0 + 5);
                ?>
            </span>
            <span id="toHit60">
                <?php
                echo  ($npcToHit0 + 6);
                ?>
            </span>
            <span id="toHit70">
                <?php
                echo  ($npcToHit0 + 7);
                ?>
            </span>
            <span id="toHit80">
                <?php
                echo  ($npcToHit0 + 8);
                ?>
            </span>
            <span id="toHit90">
                <?php
                echo  ($npcToHit0 + 9);
                ?>
            </span>

            
            <span id="demo">
                <?php
                foreach($npcLanguages0 as $lan)
                {
                    echo $lan . ', ';
                }
                ?>
            </span>

            

            

            


            

            


             


            




        
        </aside>
        
        
        <aside id="right_top">
            
            <img id="character_sheet1"/>
            

            
            <span id="name1">
                <?php
                
                echo $npcName1 . ' ' . $displaySex1;
                
                ?>
            </span>
            
            
            <span id="class1">
                <?php
                
                echo $npcLevel1.  $spacing . $class1;
                
                ?>
            </span>
        
            
        <span id="race1">
            <?php
            
            echo $race1;
            
            ?>
        </span>
        
        <span id="strength1">
                <?php
                
                echo $strength1;
                
                ?>
            </span>
            
            
            <span id="strengthMod1">
                <?php
                
                echo $strengthMod1;
                
                ?>
            </span>
                        
            
            <span id="dexterity1">
                <?php
                
                echo $dexterity1;
                
                ?>
            </span>
            
            
            <span id="dexterityMod1">
                <?php
                
                echo $dexterityMod1;
                
                ?>
            </span>
                                                
            
            <span id="constitution1">
                <?php
                
                echo $constitution1;
                
                ?>
            </span>
            
            
            <span id="constitutionMod1">
                <?php
                
                echo $constitutionMod1;
                
                ?>
            </span>
                                                        
            
            <span id="intelligence1">
                <?php
                
                echo $intelligence1;
                
                ?>
            </span>
            
            
            <span id="intelligenceMod1">
                <?php
                
                echo $intelligenceMod1;
                
                ?>
            </span>
                      
            <span id="wisdom1">
                <?php
                
                echo $wisdom1;
                
                ?>
            </span>
            
            
            <span id="wisdomMod1">
                <?php
                
                echo $wisdomMod1;
                
                ?>
            </span>
                       
        <span id="charisma1">
                <?php
                
                echo $charisma1;
                
                ?>
            </span>
            
            
            <span id="charismaMod1">
                <?php
                
                echo $charismaMod1;
                
                ?>
            </span>
            
            
            
            <span id="personality1">
                <?php
                
                echo $npcPersonality1;
                
                ?>
            </span>
            
            
            <span id="alignment1">
                <?php
                
                echo $npcAlignment1;
                
                ?>
            </span>
            
            <span id="status1">
                <?php
                
                echo $npcFamilyStatus1;
                
                ?>
            </span>

            
            <span id="merit1">
                <?php
                
                echo $npcMerit1;
                
                ?>
            </span>
            
            <span id="honour1">
                <?php
                
                echo $npcHonour1;
                
                ?>
            </span>

            <span id="save1">
                <?php
                
                echo $npcSave1;
                
                ?>
            </span>
            
            
            
            <span id="saveBonus1">
                <?php
                
                echo  $npcSaveBonus1 . $npcSaveBonusSpecies1;
                
                ?>
            </span>
            
            <span id="specialAbility1">
                <?php
                
                echo   $npcRaceBonusMessage1 . '<br/><br/>' . $npcStrengthMessage1 . $npcDexerityMessage1;
                
                ?>
            </span>
            
            <span id="maxHirelings1">
                <?php
                
                echo $npcMaxHireling1;
                
                ?>
            </span>
            
            <span id="hirelingMorale1">
                <?php
                
                echo $npcHirelingMorale1;
                
                ?>
            </span>
           
            
           <span id="hirelingLoyality1">
               <?php
               
               echo  $npcHirelingLoyality1;
               
               ?>
           </span>
            
            <span id="toHit1">
                <?php
                echo  $npcToHit1;
                ?>
            </span>
            <span id="toHit11">
                <?php
                echo  ($npcToHit1 + 1);
                ?>
            </span>
            <span id="toHit21">
                <?php
                echo  ($npcToHit1 + 2);
                ?>
            </span>
            <span id="toHit31">
                <?php
                echo  ($npcToHit1 + 3);
                ?>
            </span>
            <span id="toHit41">
                <?php
                echo  ($npcToHit1 + 4);
                ?>
            </span>
            <span id="toHit51">
                <?php
                echo  ($npcToHit1 + 5);
                ?>
            </span>
            <span id="toHit61">
                <?php
                echo  ($npcToHit1 + 6);
                ?>
            </span>
            <span id="toHit71">
                <?php
                echo  ($npcToHit1 + 7);
                ?>
            </span>
            <span id="toHit81">
                <?php
                echo  ($npcToHit1 + 8);
                ?>
            </span>
            <span id="toHit91">
                <?php
                echo  ($npcToHit1 + 9);
                ?>
            </span>





        
        </aside>

        
           
        <aside id="left_bottom">
            
            <img id="character_sheet2"/>
     
            <span id="name2">
                <?php
                
                echo $npcName2 . ' ' . $displaySex2;
                
                ?>
            </span>
            
            
            <span id="class2">
                <?php
                
                echo $npcLevel2 .  $spacing . $class2;
                
                ?>
            </span>
        
            
        <span id="race2">
            <?php
            
            echo $race2;
            
            ?>
        </span>
        
        <span id="strength2">
                <?php
                
                echo $strength2;
                
                ?>
            </span>
            
            
            <span id="strengthMod2">
                <?php
                
                echo $strengthMod2;
                
                ?>
            </span>
                                  
            
            <span id="dexterity2">
                <?php
                
                echo $dexterity2;
                
                ?>
            </span>
            
            
            <span id="dexterityMod2">
                <?php
                
                echo $dexterityMod2;
                
                ?>
            </span>
                                              
            
            <span id="constitution2">
                <?php
                
                echo $constitution2;
                
                ?>
            </span>
            
            
            <span id="constitutionMod2">
                <?php
                
                echo $constitutionMod2;
                
                ?>
            </span>
                                                          
            
            <span id="intelligence2">
                <?php
                
                echo $intelligence2;
                
                ?>
            </span>
            
            
            <span id="intelligenceMod2">
                <?php
                
                echo $intelligenceMod2;
                
                ?>
            </span>
                      
            <span id="wisdom2">
                <?php
                
                echo $wisdom2;
                
                ?>
            </span>
            
            
            <span id="wisdomMod2">
                <?php
                
                echo $wisdomMod2;
                
                ?>
            </span>
            <span id="charisma2">
                <?php
                
                echo $charisma2;
                
                ?>
            </span>
            
            
            <span id="charismaMod2">
                <?php
                
                echo $charismaMod2;
                
                ?>
            </span>
            
            
            
            <span id="personality2">
                <?php
                
                echo $npcPersonality2;
                
                ?>
            </span>
            
            
            <span id="alignment2">
                <?php
                
                echo $npcAlignment2;
                
                ?>
            </span>
            
            <span id="status2">
                <?php
                
                echo $npcFamilyStatus2;
                
                ?>
            </span>

            
            <span id="merit2">
                <?php
                
                echo $npcMerit2;
                
                ?>
            </span>
            
            <span id="honour2">
                <?php
                
                echo $npcHonour2;
                
                ?>
            </span>
            

            <span id="save2">
                <?php
                
                echo $npcSave2;
                
                ?>
            </span>
            
            
            
            <span id="saveBonus2">
                <?php
                
                echo  $npcSaveBonus2 . $npcSaveBonusSpecies2;
                
                ?>
            </span>
            
            <span id="specialAbility2">
                <?php
                
                echo   $npcRaceBonusMessage2 . '<br/><br/>' . $npcStrengthMessage2 . $npcDexerityMessage2;
                
                ?>
            </span>
            
            <span id="maxHirelings2">
                <?php
                
                echo $npcMaxHireling2;
                
                ?>
            </span>
            
            <span id="hirelingMorale2">
                <?php
                
                echo $npcHirelingMorale2;
                
                ?>
            </span>
           
            
           <span id="hirelingLoyality2">
               <?php
               
               echo  $npcHirelingLoyality2;
               
               ?>
           </span>
            
            <span id="toHit2">
                <?php
                echo  $npcToHit2;
                ?>
            </span>
            <span id="toHit12">
                <?php
                echo  ($npcToHit2 + 1);
                ?>
            </span>
            <span id="toHit22">
                <?php
                echo  ($npcToHit2 + 2);
                ?>
            </span>
            <span id="toHit32">
                <?php
                echo  ($npcToHit2 + 3);
                ?>
            </span>
            <span id="toHit42">
                <?php
                echo  ($npcToHit2 + 4);
                ?>
            </span>
            <span id="toHit52">
                <?php
                echo  ($npcToHit2 + 5);
                ?>
            </span>
            <span id="toHit62">
                <?php
                echo  ($npcToHit2 + 6);
                ?>
            </span>
            <span id="toHit72">
                <?php
                echo  ($npcToHit2 + 7);
                ?>
            </span>
            <span id="toHit82">
                <?php
                echo  ($npcToHit2 + 8);
                ?>
            </span>
            <span id="toHit92">
                <?php
                echo  ($npcToHit2 + 9);
                ?>
            </span>


      
        </aside>
        
        
        
        <aside id="right_bottom">

            <img id="character_sheet3"/>
            
            <span id="name3">
                <?php
                
                echo $npcName3 . ' ' . $displaySex3;
                
                ?>
            </span>
            
            
            <span id="class3">
                <?php
                
                echo $npcLevel3 . $spacing . $class3;
                
                ?>
            </span>
        
            
        <span id="race3">
            <?php
            
            echo $race3;
            
            ?>
        </span>
        
        <span id="strength3">
                <?php
                
                echo $strength3;
                
                ?>
            </span>
            
            
            <span id="strengthMod3">
                <?php
                
                echo $strengthMod3;
                
                ?>
            </span>
                                    
            
            <span id="dexterity3">
                <?php
                
                echo $dexterity3;
                
                ?>
            </span>
            
            
            <span id="dexterityMod3">
                <?php
                
                echo $dexterityMod3;
                
                ?>
            </span>
                                                
            
            <span id="constitution3">
                <?php
                
                echo $constitution3;
                
                ?>
            </span>
            
            
            <span id="constitutionMod3">
                <?php
                
                echo $constitutionMod3;
                
                ?>
            </span>                                              
            
            <span id="intelligence3">
                <?php
                
                echo $intelligence3;
                
                ?>
            </span>
            
            
            <span id="intelligenceMod3">
                <?php
                
                echo $intelligenceMod3;
                
                ?>
            </span>
                      
            <span id="wisdom3">
                <?php
                
                echo $wisdom3;
                
                ?>
            </span>
            
            
            <span id="wisdomMod3">
                <?php
                
                echo $wisdomMod3;
                
                ?>
            </span>
            <span id="charisma3">
                <?php
                
                echo $charisma3;
                
                ?>
            </span>
            
            
            <span id="charismaMod3">
                <?php
                
                echo $charismaMod3;
                
                ?>
            </span>
            
            
            
            <span id="personality3">
                <?php
                
                echo $npcPersonality3;
                
                ?>
            </span>
            
            
            <span id="alignment3">
                <?php
                
                echo $npcAlignment3;
                
                ?>
            </span>
            
            <span id="status3">
                <?php
                
                echo $npcFamilyStatus3;
                
                ?>
            </span>


            
            <span id="merit3">
                <?php
                
                echo $npcMerit3;
                
                ?>
            </span>
            
            <span id="honour3">
                <?php
                
                echo $npcHonour3;
                
                ?>
            </span>
            

            <span id="save3">
                <?php
                
                echo $npcSave3;
                
                ?>
            </span>
            
            
            
            <span id="saveBonus3">
                <?php
                
                echo  $npcSaveBonus3 . $npcSaveBonusSpecies3;
                
                ?>
            </span>
            
            <span id="specialAbility3">
                <?php
                
                echo  $npcRaceBonusMessage3 . '<br/><br/>' . $npcStrengthMessage3 . $npcDexerityMessage3;
                
                ?>
            </span>
            
            <span id="maxHirelings3">
                <?php
                
                echo $npcMaxHireling3;
                
                ?>
            </span>
            
            <span id="hirelingMorale3">
                <?php
                
                echo $npcHirelingMorale3;
                
                ?>
            </span>
           
            
           <span id="hirelingLoyality3">
               <?php
               
               echo  $npcHirelingLoyality3;
               
               ?>
           </span>
            
            <span id="toHit3">
                <?php
                echo  $npcToHit3;
                ?>
            </span>
            <span id="toHit13">
                <?php
                echo  ($npcToHit3 + 1);
                ?>
            </span>
            <span id="toHit23">
                <?php
                echo  ($npcToHit3 + 2);
                ?>
            </span>
            <span id="toHit33">
                <?php
                echo  ($npcToHit3 + 3);
                ?>
            </span>
            <span id="toHit43">
                <?php
                echo  ($npcToHit3 + 4);
                ?>
            </span>
            <span id="toHit53">
                <?php
                echo  ($npcToHit3 + 5);
                ?>
            </span>
            <span id="toHit63">
                <?php
                echo  ($npcToHit3 + 6);
                ?>
            </span>
            <span id="toHit73">
                <?php
                echo  ($npcToHit3 + 7);
                ?>
            </span>
            <span id="toHit83">
                <?php
                echo  ($npcToHit3 + 8);
                ?>
            </span>
            <span id="toHit92">
                <?php
                echo  ($npcToHit3 + 9);
                ?>
            </span>

       


      
          
            
          
        
        </aside>
        
        
             
        
        
        
        
        <!-- JavaScript -->
        <script>
            
            
       let imgData0 = "images/<?php echo $charSheet0; ?>";
      
        $("#character_sheet0").attr("src", imgData0);
            
       let imgData1 = "images/<?php echo $charSheet1; ?>";
      
        $("#character_sheet1").attr("src", imgData1);
             
       let imgData2 = "images/<?php echo $charSheet2; ?>";
      
        $("#character_sheet2").attr("src", imgData2);
            
       let imgData3 = "images/<?php echo $charSheet3; ?>";
      
        $("#character_sheet3").attr("src", imgData3);
        
        </script>
    
    </body>
    
</html>