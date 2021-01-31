<?php
    require_once 'dbconfig.php';
 
try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql = 'SELECT orderNumber, 
            orderDate,
            status
            FROM orders
            WHERE status="In Process"';
 
    $q = $conn->query($sql);
    
    $q->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql1 = 'SELECT orderNumber, 
            orderDate,
            status
            FROM orders
            WHERE status="Cancelled"';
 
    $q1 = $conn->query($sql1);
    
    $q1->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql2 = 'SELECT orderNumber, 
            orderDate,
            status
            FROM orders
            ORDER BY orderDate DESC
            LIMIT 20';
 
    $q2 = $conn->query($sql2);
    
    $q2->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $sql3 = 'SELECT orders.orderNumber, orderdetails.productCode, productLine, productName, comments
            FROM `orders`, `orderdetails`, `products` 
            WHERE orders.orderNumber=orderdetails.orderNumber AND orderdetails.productCode=products.productCode';
                                   

    $q3 = $conn->query($sql3);

    $q3->setFetchMode(PDO::FETCH_ASSOC);
        } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

$orders=array();
while ($r = $q3->fetch()):
array_push($orders, htmlspecialchars($r['orderNumber']));
array_push($orders, htmlspecialchars($r['productCode']));
array_push($orders, htmlspecialchars($r['productLine']));
array_push($orders, htmlspecialchars($r['productName']));
array_push($orders, htmlspecialchars($r['comments']));
endwhile;


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Classic Models</title>
        <link rel="stylesheet" type="text/css" href="css/classicstyle.css"/>
        <script>
            
            var orders = <?php echo json_encode($orders); ?>;
            console.log(orders)
            function numfn(x){
                console.log(x)
                var results = "<button class=\"button close\" onclick=\"closebox()\"\">Close</button><table class=\"table table02\" border = 1><tr><th><tr><th colspan=4 style=\"font-size: 30pt\">Order Number " + x + "</th></tr><tr><th>Product Code</th><th>Product Line</th><th>Product Name</th><th>Comments</th></tr>"
                for (i=0; i < orders.length; i+=5){
                    if (orders[i]==x){                    
                        results += "<tr><td>" + orders[i+1] + "</td><td>" + orders[i+2] + "</td><td>" + orders[i+3] + "</td><td>" + orders[i+4] + "</td></tr>"
                    }
                }
            
            document.getElementById("part03").innerHTML = results;
            document.getElementById("part03").style.display = "block";
            }

            function closebox() {
                document.getElementById("part03").style.display = "none";
                }
                
                
        </script>
    </head>
    <body>
        <div class="navigation"></div>
            <?php include 'menu.php';?>
        
        <div id="container">
            <h1 class="top" >Classic Models</h1>
            
            <table class="table table01">
                 <thead>
                     <tr><th colspan=3 style="color: black;">Orders Being Processed</th></tr>
                     <tr>
                        <th>Order Number</th>
                        <th>Order Date</th>
                        <th>Order Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($r = $q->fetch()): 
                    $num = htmlspecialchars($r['orderNumber'])
                    ?>
                    <tr>
                        <td style=cursor:pointer;
                            <?php echo "onclick='numfn(\"$num\")'"?> >
                        <?php echo htmlspecialchars($r['orderNumber']) ?></td>
                        <td><?php echo htmlspecialchars($r['orderDate']); ?></td>
                        <td><?php echo htmlspecialchars($r['status']); ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            
            <table class="table table01">
                 <thead>
                     <tr><th colspan=3 style="color: black;">Cancelled Orders</th></tr>
                     <tr>
                        <th>Order Number</th>
                        <th>Order Date</th>
                        <th>Order Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($r = $q1->fetch()): 
                    $num = htmlspecialchars($r['orderNumber'])
                    ?>
                    <tr>
                        <td style=cursor:pointer;
                            <?php echo "onclick='numfn(\"$num\")'"?> >
                        <?php echo htmlspecialchars($r['orderNumber']) ?></td>
                        <td><?php echo htmlspecialchars($r['orderDate']); ?></td>
                        <td><?php echo htmlspecialchars($r['status']); ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <table class="table table01">
                 <thead>
                     <tr><th colspan=3 style="color: black;">20 Most Recent Orders</th></tr>
                     <tr>
                        <th>Order Number</th>
                        <th>Order Date</th>
                        <th>Order Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($r = $q2->fetch()): 
                    $num = htmlspecialchars($r['orderNumber'])
                    ?>
                    <tr>
                        <td style=cursor:pointer;
                            <?php echo "onclick='numfn(\"$num\")'"?> >
                        <?php echo htmlspecialchars($r['orderNumber']) ?></td>
                        <td><?php echo htmlspecialchars($r['orderDate']); ?></td>
                        <td><?php echo htmlspecialchars($r['status']); ?></td>
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