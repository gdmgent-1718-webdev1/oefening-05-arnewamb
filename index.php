<?php 

function leeftijd($age)
{
	if ($age < 16) {
		echo "${age} is te jong voor deze film";
	} elseif ($age >= 16 && $age <18){
		echo "${age} met ouderlijk toezicht";
	} else {
		echo "${age} Geniet van je film";
	}
}


leeftijd(15);


?>