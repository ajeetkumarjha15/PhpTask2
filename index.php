<?php 
$products = array(
    "Electronics" => array(
                        "Television" => array(
                                            array(
                                                "id" => "PR001", 
                                                "name" => "MAX-001",
                                                "brand" => "Samsung"
                                            ),
                                            array(
                                                "id" => "PR002", 
                                                "name" => "BIG-301",
                                                "brand" => "Bravia"
                                            ),
                                            array(
                                                "id" => "PR003", 
                                                "name" => "APL-02",
                                                "brand" => "Apple"
                                            )
                                        ),
                        "Mobile" => array(
                                            array(
                                                "id" => "PR004", 
                                                "name" => "GT-1980",
                                                "brand" => "Samsung"
                                            ),
                                            array(
                                                "id" => "PR005", 
                                                "name" => "IG-5467",
                                                "brand" => "Motorola"
                                            ),
                                            array(
                                                "id" => "PR006", 
                                                "name" => "IP-8930",
                                                "brand" => "Apple"
                                            )
                                        )
                    ),
    "Jewelry" => array(
                        "Earrings" => array(
                                            array(
                                                "id" => "PR007", 
                                                "name" => "ER-001",
                                                "brand" => "Chopard"
                                            ),
                                            array(
                                                "id" => "PR008", 
                                                "name" => "ER-002",
                                                "brand" => "Mikimoto"
                                            ),
                                            array(
                                                "id" => "PR009", 
                                                "name" => "ER-003",
                                                "brand" => "Bvlgari"
                                            )
                                        ),
                        "Necklaces" => array(
                                            array(
                                                "id" => "PR010", 
                                                "name" => "NK-001",
                                                "brand" => "Piaget"
                                            ),
                                            array(
                                                "id" => "PR011", 
                                                "name" => "NK-002",
                                                "brand" => "Graff"
                                            ),
                                            array(
                                                "id" => "PR012", 
                                                "name" => "NK-003",
                                                "brand" => "Tiffany"
                                            )
                                        )				
                )
                                            );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: Embed in HTML</title>
    <link href="Task2.css" rel="stylesheet" type="text/css">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.row1{
    float: left;
    width: 33.3%;
    padding: 10px;
    height: 300px; 
    
}


h1{
    text-align: center;
    background-color: greenyellow;
    text-decoration: underline;
}

h2{
    text-align: center;
    background-color: grey;
}

img{
    padding: .25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    width: 200px;
    height: 200px;
}

ul{
    list-style-type: none;
}

.item{
    text-align: center;
}

.btn1{
    color: red;
}
    </style>
</head>
<body>
    <?php
        foreach($products as $key1 => $val1){
            echo '<div id = "heading">';
            echo "<h1>".$key1. "</h1>";
            echo "</div>";   
            
            foreach($val1 as $key2 => $val2){
                echo '<div id = "subhead">';
                echo "<h2>".$key2. "</h2>";
                echo "</div>";  
                echo "<br><br>"; 
                               
                foreach($val2 as $key3 => $val3){
                    if($key2== "Television"){
                    echo '<div class = "row1">';
                    echo '<div class = "column1">';
                    echo "<div>";
                    echo '<img src="https://images.samsung.com/is/image/samsung/levant-fhd-t5300-ua40t5300auxtw-frontblack-229857819?$720_576_PNG$" alt="tv1">';
                    echo "</div>";

                    echo "<div>";
                    echo "<ul>";
                    echo "<li>". $val3['id'] ."</li>";
                    echo "<li>". $val3['name'] ."</li>";
                    echo "<li>". $val3['brand'] ."</li>";
                    echo "<li>". $key1 ."</li>";
                    echo "</ul>";
                    echo "</div>";
                    echo '<div class= "btn">';
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    }
                
                    
                    elseif($key2== "Mobile"){
                        echo '<div class = "row1">';
                        echo '<div class = "column1">';
                        echo "<div>";
                        echo '<img src="https://cdn.vox-cdn.com/thumbor/rDZYUdOvOaVGtGsd2stNGvLVlos=/0x0:2894x1790/1200x800/filters:focal(1216x664:1678x1126)/cdn.vox-cdn.com/uploads/chorus_image/image/66658587/Screen_Shot_2020_04_15_at_10.08.32_AM.0.png" alt="tv1">';
                        echo "</div>";
                    
                        echo "<div>";
                        echo "<ul>";
                        echo "<li>". $val3['id'] ."</li>";
                        echo "<li>". $val3['name'] ."</li>";
                        echo "<li>". $val3['brand'] ."</li>";
                        echo "<li>". $key1 ."</li>";
                        echo "</ul>";
                        echo "</div>";
                        echo "</div>";
                        echo '<div class= "btn">';
                        
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        }

                        elseif($key2== "Earrings"){
                            echo '<div class = "row1">';
                            echo '<div class = "column1">';
                            echo "<div>";
                            echo '<img src="https://www.runwayfashions.in/wp-content/uploads/2018/08/Indian-Bollywood-Fashion-Style-Traditional-Indian-Wedding-Style-Mehndi-Plated-Earings..jpg" alt="tv1">';
                            echo "</div>";

                            echo "<div>";
                            echo "<ul>";
                            echo "<li>". $val3['id'] ."</li>";
                            echo "<li>". $val3['name'] ."</li>";
                            echo "<li>". $val3['brand'] ."</li>";
                            echo "<li>". $key1 ."</li>";
                            echo "</ul>";
                            echo '<div class= "btn">';
                            
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                            }
                        
                            elseif($key2== "Necklaces"){
                                echo '<div class = "row1">';
                                echo '<div class = "column1">';
                                echo "<div>";
                                echo '<img src="https://images-na.ssl-images-amazon.com/images/I/811GGxhSZbL._UL1400_.jpg" alt="tv1">';
                                echo "</div>";
                                echo '<div class = "item">';
                                echo "<ul>";
                                echo "<li>". $val3['id'] ."</li>";
                                echo "<li>". $val3['name'] ."</li>";
                                echo "<li>". $val3['brand'] ."</li>";
                                echo "<li>". $key1 ."</li>";
                                echo "</ul>";
                                echo '<div class= "btn">';
                                
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                }
                                                                                
                    }
                }     

                
    }
              
?>        


</body>
</html>