<?php

class Biodata {

	var $name = "Moch Raffi Ramdhani";
	var $address = "Jl.Katapang-Andir RT.02/07 Kec.Katapang Kab.Bandung";
	var $hobbies = array("Gaming", "Coding", "Reading");
	var $is_married = false;

}

class School {

	var $hignSchool = "SMKN 1 KATAPANG";
	var $university = "none";

}

class Skill {

	var $skill;
	var $level;

}


$bio = new Biodata();
$sch = new School();

$sk_1 = new Skill();
$sk_1->skill = "PHP";
$sk_1->level = "intermediate";

$sk_2 = new skill();
$sk_2->skill = "JAVA";
$sk_2->level = "intermediate";

$skills = array($sk_1, $sk_2);

$info = json_encode([$bio, $sch, $skills]);
echo $info;