<?php
    require_once 'dbconfig.php';
 
try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql1 = 'SELECT productLine, 
            productCode, 
            productName,
            productScale,
            productVendor,
            productDescription,
            quantityinStock,
            buyPrice,
            MSRP
            FROM products
            WHERE productLine = "Classic Cars"';
 
    $q1 = $conn->query($sql1);
    
    $q1->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

    $classic = array(); 
    while ($r = $q1->fetch()):
    array_push($classic, htmlspecialchars($r['productLine']));
    array_push($classic, htmlspecialchars($r['productCode']));
    array_push($classic, htmlspecialchars($r['productName']));
    array_push($classic, htmlspecialchars($r['productScale']));
    array_push($classic, htmlspecialchars($r['productVendor']));
    array_push($classic, htmlspecialchars($r['productDescription']));
    array_push($classic, htmlspecialchars($r['quantityinStock']));
    array_push($classic, htmlspecialchars($r['buyPrice']));
    array_push($classic, htmlspecialchars($r['MSRP']));

    endwhile;

try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql2 = 'SELECT productLine, 
            productCode, 
            productName,
            productScale,
            productVendor,
            productDescription,
            quantityinStock,
            buyPrice,
            MSRP
            FROM products
            WHERE productLine = "Motorcycles"';
 
    $q2 = $conn->query($sql2);
    
    $q2->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

    $motor = array(); 
    while ($r = $q2->fetch()):
    array_push($motor, htmlspecialchars($r['productLine']));
    array_push($motor, htmlspecialchars($r['productCode']));
    array_push($motor, htmlspecialchars($r['productName']));
    array_push($motor, htmlspecialchars($r['productScale']));
    array_push($motor, htmlspecialchars($r['productVendor']));
    array_push($motor, htmlspecialchars($r['productDescription']));
    array_push($motor, htmlspecialchars($r['quantityinStock']));
    array_push($motor, htmlspecialchars($r['buyPrice']));
    array_push($motor, htmlspecialchars($r['MSRP']));

    endwhile;

try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql3 = 'SELECT productLine, 
            productCode, 
            productName,
            productScale,
            productVendor,
            productDescription,
            quantityinStock,
            buyPrice,
            MSRP
            FROM products
            WHERE productLine = "Planes"';
 
    $q3 = $conn->query($sql3);
    
    $q3->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

    $planes = array(); 
    while ($r = $q3->fetch()):
    array_push($planes, htmlspecialchars($r['productLine']));
    array_push($planes, htmlspecialchars($r['productCode']));
    array_push($planes, htmlspecialchars($r['productName']));
    array_push($planes, htmlspecialchars($r['productScale']));
    array_push($planes, htmlspecialchars($r['productVendor']));
    array_push($planes, htmlspecialchars($r['productDescription']));
    array_push($planes, htmlspecialchars($r['quantityinStock']));
    array_push($planes, htmlspecialchars($r['buyPrice']));
    array_push($planes, htmlspecialchars($r['MSRP']));

    endwhile;

try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql4 = 'SELECT productLine, 
            productCode, 
            productName,
            productScale,
            productVendor,
            productDescription,
            quantityinStock,
            buyPrice,
            MSRP
            FROM products
            WHERE productLine = "Ships"';
 
    $q4 = $conn->query($sql4);
    
    $q4->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

    $ships = array(); 
    while ($r = $q4->fetch()):
    array_push($ships, htmlspecialchars($r['productLine']));
    array_push($ships, htmlspecialchars($r['productCode']));
    array_push($ships, htmlspecialchars($r['productName']));
    array_push($ships, htmlspecialchars($r['productScale']));
    array_push($ships, htmlspecialchars($r['productVendor']));
    array_push($ships, htmlspecialchars($r['productDescription']));
    array_push($ships, htmlspecialchars($r['quantityinStock']));
    array_push($ships, htmlspecialchars($r['buyPrice']));
    array_push($ships, htmlspecialchars($r['MSRP']));

    endwhile;

try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql5 = 'SELECT productLine, 
            productCode, 
            productName,
            productScale,
            productVendor,
            productDescription,
            quantityinStock,
            buyPrice,
            MSRP
            FROM products
            WHERE productLine = "Trains"';
 
    $q5 = $conn->query($sql5);
    
    $q5->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

    $trains = array(); 
    while ($r = $q5->fetch()):
    array_push($trains, htmlspecialchars($r['productLine']));
    array_push($trains, htmlspecialchars($r['productCode']));
    array_push($trains, htmlspecialchars($r['productName']));
    array_push($trains, htmlspecialchars($r['productScale']));
    array_push($trains, htmlspecialchars($r['productVendor']));
    array_push($trains, htmlspecialchars($r['productDescription']));
    array_push($trains, htmlspecialchars($r['quantityinStock']));
    array_push($trains, htmlspecialchars($r['buyPrice']));
    array_push($trains, htmlspecialchars($r['MSRP']));

    endwhile;

try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql6 = 'SELECT productLine, 
            productCode, 
            productName,
            productScale,
            productVendor,
            productDescription,
            quantityinStock,
            buyPrice,
            MSRP
            FROM products
            WHERE productLine = "Trucks and Buses"';
 
    $q6 = $conn->query($sql6);
    
    $q6->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

    $truck = array(); 
    while ($r = $q6->fetch()):
    array_push($truck, htmlspecialchars($r['productLine']));
    array_push($truck, htmlspecialchars($r['productCode']));
    array_push($truck, htmlspecialchars($r['productName']));
    array_push($truck, htmlspecialchars($r['productScale']));
    array_push($truck, htmlspecialchars($r['productVendor']));
    array_push($truck, htmlspecialchars($r['productDescription']));
    array_push($truck, htmlspecialchars($r['quantityinStock']));
    array_push($truck, htmlspecialchars($r['buyPrice']));
    array_push($truck, htmlspecialchars($r['MSRP']));

    endwhile;

try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql7 = 'SELECT productLine, 
            productCode, 
            productName,
            productScale,
            productVendor,
            productDescription,
            quantityinStock,
            buyPrice,
            MSRP
            FROM products
            WHERE productLine = "Vintage Cars"';
 
    $q7 = $conn->query($sql7);
    
    $q7->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

    $vintage = array(); 
    while ($r = $q7->fetch()):
    array_push($vintage, htmlspecialchars($r['productLine']));
    array_push($vintage, htmlspecialchars($r['productCode']));
    array_push($vintage, htmlspecialchars($r['productName']));
    array_push($vintage, htmlspecialchars($r['productScale']));
    array_push($vintage, htmlspecialchars($r['productVendor']));
    array_push($vintage, htmlspecialchars($r['productDescription']));
    array_push($vintage, htmlspecialchars($r['quantityinStock']));
    array_push($vintage, htmlspecialchars($r['buyPrice']));
    array_push($vintage, htmlspecialchars($r['MSRP']));

    endwhile;

try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql = 'SELECT productLine, 
            textDescription
            FROM productlines
            ORDER BY productLine';
 
    $q = $conn->query($sql);
    
    $q->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Was not able to connect to the database $dbname :" . $pe->getMessage());
    }
 ?>

<!DOCTYPE html>

<html>
    <head>
        <title>Classic Models</title>
        <link rel="stylesheet" type="text/css" href="css/classicstyle.css"/>


        <script> 
            var i = 0;
            var classic = <?php echo json_encode($classic); ?>;
            var motor = <?php echo json_encode($motor); ?>;
            var planes = <?php echo json_encode($planes); ?>;
            var ships = <?php echo json_encode($ships); ?>;
            var trains = <?php echo json_encode($trains); ?>;
            var truck = <?php echo json_encode($truck); ?>;
            var vintage = <?php echo json_encode($vintage); ?>;
            
            function linesfn(x){

                if (x=="Classic Cars"){
                    var y = classic
                    }
                else if (x=="Motorcycles"){
                    var y = motor
                    }
                else if (x=="Planes"){
                    var y = planes
                    }
                else if (x=="Ships"){
                    var y = ships
                    }
                else if (x=="Trains"){
                    var y = trains
                    }
                else if (x=="Trucks and Buses"){
                    var y = truck
                    }
                else if (x=="Vintage Cars"){
                    var y = vintage
                    }

                var results = "<button class=\"button close\" onclick=\"closebox()\"\">Close</button><table class=\"table table02\" border = 1><tr><th><tr><th colspan=8 style=\"font-size: 30pt\">" + x + "</th></tr><tr><th>Product Code</th><th>Product Name</th><th>Product Scale</th><th>Product Vendor</th><th>Product description</th><th>Quantity in Stock</th><th>Cost Price</th><th>MSRP</th></tr>"

                for (i=0; i < y.length; i+=9)

                results += "<tr><td>" + y[i+1] + "</td><td>" + y[i+2] + "</td><td>" + y[i+3] + "</td><td>" + y[i+4] + "</td><td>" + y[i+5] + "</td><td>" + y[i+6] + "</td><td>" + y[i+7] + "</td><td>" + y[i+8] + "</td></tr>"

                document.getElementById("part03").innerHTML = results;
                document.getElementById("part03").style.display = "block";
            }
            function closebox() {
                document.getElementById("part03").style.display = "none";
                }


        </script>
    </head>

    <body>


        <div class="navigation">
            <?php include 'menu.php';?>
        </div>
        <div id="container">
            <h1 class="top" >Classic Models</h1>

            <table class="table table01">
                 <thead>
                     <tr>
                         <th>Line</th>
                        <th align="left">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($r = $q->fetch()): 
                    $lines = htmlspecialchars($r['productLine'])
                    ?>
                    <tr>
                        <td style=cursor:pointer;
                            <?php echo "onclick='linesfn(\"$lines\")'"?> >
                        <?php echo htmlspecialchars($r['productLine']) ?></td>
                        <td><?php echo htmlspecialchars($r['textDescription']); ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <div id="part03">     
        </div>
        <?php include 'footer.php';?>
    </body>
</html>