<?php
$colors=[
'red'=>'#d51254',
'green'=>'#449d69',
'orange'=>'#f8a10d',
'blue'=>'#2a6796',
];
$menus=[
'/la-creche'=>[

'menu'=>'La crèche',
'color' => 'red',
'subMenus'=>[
"/l-histoire"=>"L’histoire",
"/visite-virtuelle"=>   "Visite virtuelle crèche",
"/demarche-et-valeurs"=>   "La démarche / les valeurs"
]
],
'/le-role-de-parent'=>
[
'menu'=>'Le rôle de parent',
'color' => 'blue',
'subMenus'=>[
"/engagement-des-parents"=>"Engagement des parents",
"/les-permanences"=>"Les permanences",
"/les-postes"=>"Les postes"
]
],
'/le-quotidien'=>
[
'menu'=>'Le quotidien',
'color' => 'green',
'subMenus'=>[
"/au-jour-le-jour"=>"Au jour le jour",
"/l-equipe"=>"L’équipe de professionnels",
"/la-nourriture"=>"La nourriture",
"/les-activites"=>"Les activités"
]
],
'/infos-pratiques'=>[
'menu'=>'Infos pratiques',
'color' => 'orange',
'subMenus'=>[
"/contact-plan"=>"Contact / plan",
"/faq"=>"Questions fréquentes",
"/inscription"=>"Inscrire son enfant"
]
],

];

$uri = $_SERVER['REQUEST_URI'];
$currentUrl= substr($uri,1) ;

$currentUrl = $currentUrl ? $currentUrl : "home";
$isHome = $currentUrl === "home";
$contentClass = $isHome ? "col-sm-12" : "col-sm-8 offset-sm-2";

foreach ($menus as $href => $menu) {
    foreach ($menu['subMenus'] as $href2 => $subMenu) {
        if ($href2 === $uri) {
            $currentMenu = $menu;
            $currentSubMenu = $subMenu;
        }

    }
}

$currentMenuColor=$colors[$currentMenu['color']];
$titlePart= $isHome ? "Crèche parentale à Rennes" :$currentSubMenu;
$title =  sprintf("Crèche Ty Bugale - %s",$titlePart);