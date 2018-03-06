<?php

include ('PdfToText.phpclass');



function toIndex($file){

include 'connect.php';

    echo $file;

	$targetfile = "fileupload/" . $file;

    //$targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

	//$string = (string) new PdfToText ("uploads/" . basename( $_FILES['file']['name'])) ;

	$string = (string) new PdfToText ($targetfile) ;

    //$nama_file = basename( $_FILES['file']['name']);

    //echo basename( $_FILES['file']['name']);

    echo '<br>';

    $teks = preg_replace('/[^a-zA-Z -]/', '', $string);

    $teks2 = preg_replace('/\b\w\b\s?/', '', $teks);

    $teks3 = preg_replace('/\s\s+/', ' ', $teks2);

    $teks4 = preg_replace('/[-\n\r]/', ' ', $teks3);


    $teks5 = strtolower($teks4);

    //echo $teks5;

    $teks6 = explode(" ",$teks5);

    //var_dump($teks5);

    $remove_stopword = "SELECT * FROM stopwords";

    $hasil = $conn->query($remove_stopword);

    if($hasil->num_rows > 0){

        while($row = $hasil->fetch_array()) {

            $stopword[] = $row['stopword'];
        }
    }
    else{

        echo "Gagal";
    }


    $filteredarray = array_diff($teks6,$stopword);

    $teks7 = implode(" ",$filteredarray);

    echo $teks7;

    foreach($filteredarray as $filteredarray){
 
        /*if (strlen($filteredarray) >=2)
        {*/

            $insert = "INSERT INTO dokumen (nama_file, tokenstem) VALUES('$file', '$filteredarray')";

            $conn->query($insert); 
               
              //}
    }

}



?>