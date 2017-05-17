<?php

    // data.php

    include('connect.php');

    // if we are here, that's mean that we are already connected to mysql server
    // and we don't need to do another connection

    $name = 'smaple name';
    $mom = 'sample name2';
    $bg= $_POST['mybg'];
    $wish= $_POST['myquote'];

    // $link is the same connection created in your connect.php script
    if (mysqli_query($link, "INSERT INTO user_data (u_name,um,uw,ui) VALUES('$name','$mom','$wish','$bg')")) {

        // if you want use "loader.dataFormat = URLLoaderDataFormat.VARIABLES" in your ActionScript code
        // you have to use the echo like this : echo 'var=value';
		$k=mysqli_insert_id($link);
        echo 'result='.$k.'';

        // otherwise, the URLLoader data format will be the default value which is "text"
$sql2 = "SELECT * FROM user_data WHERE id=".$k."";
                $result = $link->query($sql2);
                while($row = $result->fetch_assoc()) {
                //echo"" . $row["u_mother_name"]. "<br><br>";
                $bg_img=$row["ui"];
                $wish=$row["uw"];
                $me=$row["u_name"];
                $she=$row["um"];

                }    


    $image_1 = imagecreatefrompng(''.$bg_img.'.png');
    $image_2 = imagecreatefrompng(''.$wish.'.png');
    imagecopy($image_1, $image_2, 0, 700, 0, 0, 900, 141);
    imagepng($image_1, 'img_comp'.$k.'.png');


    $image_5 = imagecreatefrompng(''.$bg_img.'s.png');
    $image_6 = imagecreatefrompng(''.$wish.'s.png');
    imagecopy($image_5, $image_6, 0, 220, 0, 0, 280, 44);
    imagepng($image_5, 'img_bg_text'.$k.'.png');


    $image_9 = imagecreatefrompng('Final2.png');
    $image_10 = imagecreatefrompng('img_bg_text'.$k.'.png');
    imagecopy($image_9, $image_10, 90, 30, 0, 0, 280, 280);
    imagepng($image_9, 'img_bg_Final'.$k.'.png');

	}

	
	else {
        echo 'result=error';
    }

    mysqli_close($link);

?>
