<?php
    require_once 'dbconfig.php';
 
try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Australia"';
 
    $q = $conn->query($sql);
    
    $q->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql1 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Austria"';
 
    $q1 = $conn->query($sql1);
    
    $q1->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql2 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Belgium"';
 
    $q2 = $conn->query($sql2);
    
    $q2->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql3 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Canada"';
 
    $q3 = $conn->query($sql3);
    
    $q3->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql4 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Denmark"';
 
    $q4 = $conn->query($sql4);
    
    $q4->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql5 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Finland"';
 
    $q5 = $conn->query($sql5);
    
    $q5->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql6 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="France"';
 
    $q6 = $conn->query($sql6);
    
    $q6->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql7 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Germany"';
 
    $q7 = $conn->query($sql7);
    
    $q7->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql8 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Hong Kong"';
 
    $q8 = $conn->query($sql8);
    
    $q8->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql9 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Ireland"';
 
    $q9 = $conn->query($sql9);
    
    $q9->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql10 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Israel"';
 
    $q10 = $conn->query($sql10);
    
    $q10->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql11 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Italy"';
 
    $q11 = $conn->query($sql11);
    
    $q11->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql12 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Japan"';
 
    $q12 = $conn->query($sql12);
    
    $q12->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql13 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Netherlands"';
 
    $q13 = $conn->query($sql13);
    
    $q13->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql14 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="New Zealand"';
 
    $q14 = $conn->query($sql14);
    
    $q14->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql15 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Norway"';
 
    $q15 = $conn->query($sql15);
    
    $q15->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql16 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Philippines"';
 
    $q16 = $conn->query($sql16);
    
    $q16->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql17 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Poland"';
 
    $q17 = $conn->query($sql17);
    
    $q17->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql18 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Portugal"';
 
    $q18 = $conn->query($sql18);
    
    $q18->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql19 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Russia"';
 
    $q19 = $conn->query($sql19);
    
    $q19->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }



try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql20 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Singapore"';
 
    $q20 = $conn->query($sql20);
    
    $q20->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql21 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="South Africa"';
 
    $q21 = $conn->query($sql21);
    
    $q21->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql22 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Spain"';
 
    $q22 = $conn->query($sql22);
    
    $q22->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql23 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Sweden"';
 
    $q23 = $conn->query($sql23);
    
    $q23->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql24 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="Switzerland"';
 
    $q24 = $conn->query($sql24);
    
    $q24->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql25 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="UK"';
 
    $q25 = $conn->query($sql25);
    
    $q25->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
    $sql26 = 'SELECT customerName, 
            country, 
            city,
            phone
            FROM customers
            WHERE country="USA"';
 
    $q26 = $conn->query($sql26);
    
    $q26->setFetchMode(PDO::FETCH_ASSOC);
    } 

    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Classic Models</title>
        <link rel="stylesheet" type="text/css" href="css/classicstyle.css"/>
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
                        <th style="color: black;" align="left">Customer Name</th>
                        <th style="color: black;" align="left">Country</th>
                        <th style="color: black;" align="left">City</th>
                        <th style="color: black;" align="left">Telephone</th></tr> 
                </thead>
                <tbody>
                    
                    <tr><th colspan=4;>Customers from Australia</th></tr> 
                    <?php while ($r = $q->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>
                    
                    <tr><th colspan=4;>Customers from Austria</th></tr> 
                    <?php while ($r = $q1->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>
                    
                    <tr><th colspan=4;>Customers from Belgium</th></tr> 
                    <?php while ($r = $q2->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from Canada</th></tr> 
                    <?php while ($r = $q3->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from Denmark</th></tr> 
                    <?php while ($r = $q4->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?> 

                    <tr><th colspan=4;>Customers from Finland</th></tr> 
                    <?php while ($r = $q5->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from France</th></tr> 
                    <?php while ($r = $q6->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from Germany</th></tr> 
                    <?php while ($r = $q7->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from Hong Kong</th></tr> 
                    <?php while ($r = $q8->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from Ireland</th></tr> 
                    <?php while ($r = $q9->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from Israel</th></tr> 
                    <?php while ($r = $q10->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from Italy</th></tr> 
                    <?php while ($r = $q11->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from Japan</th></tr> 
                    <?php while ($r = $q12->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from Netherlands</th></tr> 
                    <?php while ($r = $q13->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from New Zealand</th></tr> 
                    <?php while ($r = $q14->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from Norway</th></tr> 
                    <?php while ($r = $q15->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from Philippines</th></tr> 
                    <?php while ($r = $q16->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from Poland</th></tr> 
                    <?php while ($r = $q17->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from Portugal</th></tr> 
                    <?php while ($r = $q18->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from Russia</th></tr> 
                    <?php while ($r = $q19->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from Singapore</th></tr> 
                    <?php while ($r = $q20->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from South Africa</th></tr> 
                    <?php while ($r = $q21->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from Spain</th></tr> 
                    <?php while ($r = $q22->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from Sweden</th></tr> 
                    <?php while ($r = $q23->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from Switzerland</th></tr> 
                    <?php while ($r = $q24->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from UK</th></tr> 
                    <?php while ($r = $q25->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <tr><th colspan=4;>Customers from USA</th></tr> 
                    <?php while ($r = $q26->fetch()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['customerName']) ?></td>
                        <td><?php echo htmlspecialchars($r['country']); ?></td>
                        <td><?php echo htmlspecialchars($r['city']); ?></td>
                        <td><?php echo htmlspecialchars($r['phone']); ?></td>
                    </tr>
                    <?php endwhile; ?>

                </tbody>
            </table>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>
    