<header class="container my-2 d-flex">

    <div  class="d-flex">
        <img height="220px" src="/assets/images/TyBugaleLogo.png"></img>
    </div>

    <div class="flex-column w-100">
        <div class="d-flex flex-row-reverse">

            <form><input type="text" value="Rechercher"> </form>
        </div>
        <nav class="d-flex w-100 h-100 align-bottom navbar navbar-expand-lg ">

            <?php $menus=[
                [
                        'menu'=>'La crèche',
                        'color' => 'red',
                        'subMenus'=>[
                                "L’histoire",
                                "Visite virtuelle crèche",
                                "La démarche / les valeurs"
                        ]
                ],
                [
                    'menu'=>'Le rôle de parent',
                    'color' => 'blue',
                    'subMenus'=>[
                        "Engagement des parents",
                        "Les permanences",
                        "Les postes"
                    ]
                ],
                [
                    'menu'=>'Le quotidien',
                    'color' => 'green',
                    'subMenus'=>[
                        "Au jour le jour",
                        "L’équipe de professionnels",
                        "La nourriture",
                        "Les activités"
                    ]
                ],
                [
                    'menu'=>'Infos pratiques',
                    'color' => 'orange',
                    'subMenus'=>[
                        "Contact / plan",
                        "Questions fréquentes",
                        "S’inscrire / Candidater / Liste d’attente"
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
    