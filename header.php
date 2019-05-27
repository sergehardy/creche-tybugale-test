<header class="container my-2 d-flex">

    <div  class="d-flex">
        <a href="/"><img height="220px" src="/assets/images/TyBugaleLogo.png"></img></a>
    </div>

    <div class="flex-column w-100">
        <div class="d-flex flex-row-reverse">

            <form><input type="text" value="Rechercher"> </form>
        </div>
        <nav class="d-flex w-100 h-100 align-bottom navbar navbar-expand-lg ">

            <?php $menus=[
                [
                        'href' => '/la-creche',
                        'menu'=>'La crèche',
                        'color' => 'red',
                        'subMenus'=>[
                            "/l-histoire"=>"L’histoire",
                            "/visite-virtuelle"=>   "Visite virtuelle crèche",
                            "/demarche-et-valeurs"=>   "La démarche / les valeurs"
                        ]
                ],
                [
                    'href' => '/le-role-de-parent',
                    'menu'=>'Le rôle de parent',
                    'color' => 'blue',
                    'subMenus'=>[
                        "/engagement-des-parents"=>"Engagement des parents",
                        "/les-permanences"=>"Les permanences",
                        "/les-postes"=>"Les postes"
                    ]
                ],
                [
                    'href' => '/le-quotidien',
                    'menu'=>'Le quotidien',
                    'color' => 'green',
                    'subMenus'=>[
                        "/au-jour-le-jour"=>"Au jour le jour",
                        "/l-equipe"=>"L’équipe de professionnels",
                        "/la-nourriture"=>"La nourriture",
                        "/les-activites"=>"Les activités"
                    ]
                ],
                [
                    'href' => '/infos-pratiques',
                    'menu'=>'Infos pratiques',
                    'color' => 'orange',
                    'subMenus'=>[
                        "/contact-plan"=>"Contact / plan",
                        "/faq"=>"Questions fréquentes",
                        "/inscription"=>"S’inscrire / Candidater / Liste d’attente"
                    ]
                ],

            ];

            foreach ($menus as $menu) {
                echo block("menu",$menu);
            }
            ?>

        </nav>

    </div>
</header>
    