<?php
    $usuarios=[
        [
            "id"=>0,
            "username"=>"Michi"
        ],
        [
            "id"=>1,
            "username"=>"Retax"
        ],
        [
            "id"=>2,
            "username"=>"Pancho"
        ]
        ];

        $edadPepe=12;
?>
<html>
    <head><title>Pasar variables PHP a JS</title> </head>
    <body>
        <script>
            //CONVIERTE UN STRING a un objeto json de js
            let user=JSON.parse('<?= json_encode($usuarios) ?>');
            console.log(user);
            let edadPepe=<?= $edadPepe ?>; 
            console.log(edadPepe);
        </script>
    </body>
</html>