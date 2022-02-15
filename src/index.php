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
            function display1(){
              global $products;
          
              echo"<table><tr><th>Category</th><th>Subcategory</th><th>ID</th><th>Name</th><th>Brand</th><tr>";
              foreach($products as $key=>$value){
          
                  foreach($value as $subc=>$val){
                      
          
                      foreach($val as $i ){
          
                          echo"<tr><td>".$key."</td>".
                         " <td>".$subc."</td>".
                          "<td>".$i["id"]."</td>".
                          "<td>".$i["name"]."</td>".
                          "<td>".$i["brand"]."</td></tr>";
                         }
                        }
          
              }
             
            }  
              echo"</table>";
            
            
            
    function display2(){
                global $products;
              
                echo"<table><tr><th>Category</th><th>Subcategory</th><th>ID</th><th>Name</th><th>Brand</th><tr>";
                foreach($products as $key=>$value){
            
                    foreach($value as $subCat=>$val){
                        if($subCat=="Mobile")
            
                        foreach($val as $i ){
            
                            echo"<tr><td>".$key."</td>".
                           " <td>".$subCat."</td>".
                            "<td>".$i["id"]."</td>".
                            "<td>".$i["name"]."</td>".
                            "<td>".$i["brand"]."</td></tr>";
                           }
                          }
            
                }
                echo"</table>";
            
            }
      

            function dis3(){
              global $products;
          
              echo"<table><tr><th>Category</th><th>Subcategory</th><th>ID</th><th>Name</th><th>Brand</th><tr>";
              foreach($products as $key=>$value){
          
                  foreach($value as $subCat=>$val){
                     
          
                      foreach($val as $i ){
                          if($i["brand"]=="Samsung"){
                          echo"<tr><td>".$key."</td>".
                         " <td>".$subCat."</td>".
                          "<td>".$i["id"]."</td>".
                          "<td>".$i["name"]."</td>".
                          "<td>".$i["brand"]."</td></tr>";
                      }
                         }
                        }
          
              }
              echo"</table>";
          
          }
          function del(){
            global $products;
            foreach($products as $key => $categories)
        {
            foreach($categories as $key2 => $sub)
            {
                foreach($sub as $key3 => $item){
                    if($item["id"]=="PR003"){
                       unset($products[$key][$key2][$key3]);
                    }
                }
            }
        }
        
        echo "<table>";
            echo "<tr><th>Category</th><th>Sub Category</th><th>ID</th><th>Name</th><th>Brand</th></tr>";
            foreach($products as $key => $categories)
            {
                foreach($categories as $key2 => $sub)
                {
                    foreach($sub as $key3 => $item){
                            echo "<tr><td>$key</td><<td>$key2</td><td>$item[id]</td><td>$item[name]</td><td>$item[brand]</td>";
                        }
                }
            }
            echo "</table>";
        }
        function updatePro($a){
            global $products;
            
            
            foreach($products as $key=>$value){
        
                foreach($value as $subCat=>$val){
                    
        
                    foreach($val as $v1=>$ab){
                        if($ab["id"]==$a){
                          $products[$key][$subCat][$v1]["name"]="BIG-555";
                        
                        
                    }
                       
                      }
                  
            }
          }
          display1();
        }
        
        

        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phparray</title>
</head>

<body>
    <?php
    display1();
    display2();
    dis3();
    del();
    updatePro("PR002");
    
    ?>
</body>
</html>
          