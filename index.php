<html>
    <head>
        <title>Web Projects</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="top">
            <h1>Web Projects</h1><sub>by Ravish Ranjan</sub>
        </div>
        <div class="mid">
            <?php
                $home = "../web/work/";
                $clrs = [["rgb(0, 180, 204)","rgb(2, 216, 127)"],["rgb(204, 0, 126)","rgb(216, 184, 2)"],["rgb(35, 143, 214)","rgb(216, 2, 170)"]];
                $files = scandir($home);
                $count = sizeof($files)-2;
                for ($i=0; $i < $count; $i++) {
                    $j = $i+2; 
                    $fob = fopen($home.$files[$j]."/data.txt","r");
                    $data = explode("\n",fread($fob,100));
                    $clr = $clrs[rand(0,sizeof($clrs)-1)];
                    $logo = $home.$files[$j]."/logo.png";
                    $redirect = $home.$files[$j]."/index.html";
                    echo "<a href=\"$redirect\">
                    <div class=\"tile\" style=\"background:linear-gradient(to right bottom ,$clr[0],$clr[1])\">
                        <img src=\"$logo\" alt=\"img\" style=\"\">
                        <div class=\"info\">
                            <label style=\"background-image:linear-gradient(to right bottom ,$clr[0],$clr[1])\">".substr($data[0],0,10)."...</label>
                            <p>$data[1]</p>
                        </div>
                    </div>";
                }
            ?>
        </div>
    </body>
</html>