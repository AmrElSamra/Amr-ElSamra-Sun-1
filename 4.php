<html>
    <head>
        <link rel="stylesheet" href="CSS/all.min.css">
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/style.css">
    </head>

    <body>
        <?php 
            $r = 12;
            $c = 12;
        ?>
        <table class="table text-center">
            <tbody>
                <?php for ($c=1; $c<=12 ; $c++){ ?>
                <tr>
                    <?php for ($r=1; $r<=12; $r++){ $result = $r * $c ;?>
                    <td style= "border: 1px solid black;">
                        <?php echo "$r*$c = $result";} echo "<br>"; } ?>
                    </td>
                </tr>
            </tbody>
        </table>

    </body>
</html>