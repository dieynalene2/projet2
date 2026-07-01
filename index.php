<?php

//1
function initialserEmployes(): array{
    $emlpyes = [
        0=>[
            "nom"=> "sarr",
             "prenom"=> "mouna",
             "departement" =>[
                            " nom"  =>"gestion" ,
                            "code"   => "1234"  
                            ],
            "subordonnes"=>[1],
        ],

         0=>[
            "nom"=> "samba",
             "prenom"=> "lena",
             "departement" =>[
                            " nom"  =>"informatique" ,
                            "code"   => "5678"  
                            ],
            "subordonnes"=>[1,2],
        ],

          2=>[
            "nom"=> "sy",
             "prenom"=> "awa",
             "departement" =>[
                            " nom"  =>"ELM" ,
                            "code"   => "987!6"  
                            ],
            "subordonnes"=>[],
        ],
    ];

    return $emlpyes

}

initialserEmployes();










?>