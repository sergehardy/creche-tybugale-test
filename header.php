
    <div  class="col-sm-2">
        <a href="/">
            <img height="220px" src="/assets/images/TyBugaleLogo.png"></img>
        </a>
    </div>

    <div class="col-sm-10 d-flex w-100">
        <nav class="navbar navbar-expand-lg ">

            <?php $menus=[
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
                        "/inscription"=>"S’inscrire / Candidater / Liste d’attente"
                    ]
                ],

            ];

            foreach ($menus as $href=>$menu) {
                echo block("menu",["href"=>$href,"menu"=>$menu]);
            }
            ?>
            <form><input type="text" value="Rechercher"> </form>

        </nav>


<!--        <div class="d-flex">-->
<!---->
<!--            <form><input type="text" value="Rechercher"> </form>-->
<!--        </div>-->


    </div>
    