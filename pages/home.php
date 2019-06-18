<div class="container text-center">
    <section>
        <div class="row"><p>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/></p>
        </div>
        <div class="row">
            <?php

            $blocks=[
                [
                    'color' => 'red',
                    'h3' => 'Bienvenue<br>à Ty Bugale',
                    'description' => 'Une structure<br>épanouissante<br>pour votre enfant.',
                    'link' => 'Visiter la crèche',

                ],
                [
                    'color' => 'blue',
                    'h3' => 'Un rôle actif<br>de parent',
                    'description' => "Les parents accompagnent<br> au jour le jour<br>l'équipe éducative.",
                    'link' => 'Voir le projet',

                ],
                [
                'color' => 'orange',
                'h3' => 'Inscrire son enfant<br>à la crêche',
                'description' => "Vous souhaitez<br>connaître les conditions<br>d'accès.",
                'link' => 'En savoir plus',

                ]

            ];

            foreach ($blocks as $block) {
                echo block("home_block",$block);
            }

            ?>
        </div>
    </section>

</div>
