<?php
$notindex = true;
include_once "html/header.php";

session_start();
$loggedin = isset($_SESSION['loggedin']) ? $_SESSION['loggedin'] : false;

if ($loggedin) {
    ?>
    <!-- Section Blog -->
    <section id="blog-main" class="backoffice">
        <?php include_once "html/admin_navbar.php"; ?>
        <div class="container">
            <div class="row">
                <!-- Blog Home -->
                <div class="col-md-12 text-center">
                    <div class="row">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th style='width:50px;'>Name</th>
                                <th style='width:150px;'>Email</th>
                                <th style='width:50px;'>Phone</th>
                                <th style='width:150px;'>Delivery date</th>
                                <th style='width:50px;'>Delivery</th>
                                <th style='width:50px;'>Event</th>
                                <th style='width:50px;'>Amount</th>
                                <th style='width:50px;'>Cake flavor</th>
                                <th style='width:150px;'>Comments</th>
                                <th style='width:50px;'>Image</th>
                                <th style="width:10px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
                                $page_no = $_GET['page_no'];
                            } else {
                                $page_no = 1;
                            }

                            $total_records_per_page = 10;
                            $offset = ($page_no - 1) * $total_records_per_page;
                            $previous_page = $page_no - 1;
                            $next_page = $page_no + 1;
                            $adjacents = "2";

                            $result_count = $conn->query("SELECT COUNT(*) FROM `orders`");
                            $total_records = $result_count->fetchColumn();

                            if ($total_records == 0) {
                                echo "<tr><td colspan='11'>No New Orders</td></tr>";
                            }
                            $total_no_of_pages = ceil($total_records / $total_records_per_page);
                            $second_last = $total_no_of_pages - 1; // total page minus 1

                            $sql = "SELECT 
                                    `name`, email, c.description cakeflavor,eventtype,amount,phone,ordersid,
                                    DATE_FORMAT(deliverydate, '%d %b %Y') ddate,comments,ordersid,
                                    case when delivery = 0 then 'No' when delivery=1 then 'Yes' end delivery 
                                  FROM 
                                    `orders` 
                                  LEFT JOIN
                                      cakes c on c.cakesid=cakeflavor    
                                ORDER BY deliverydate desc
                                LIMIT " . $offset . ", " . $total_records_per_page;

                            foreach ($conn->query($sql) as $row) {

                                $file = "php/uploads/image_". $row["ordersid"];

                                $checkFile = file_exists($file.".jpg") ? $file .".jpg" : null;
                                $checkFile2 = $checkFile ? $checkFile : (file_exists($file.".jpeg") ? $file .".jpeg" : null);
                                $checkFile3 = $checkFile2 ? $checkFile2 : (file_exists($file.".png") ? $file .".png" : null);

                                $image = $checkFile3 ? "<a href='". $checkFile3 ."' target='_blank'>file</a>" : null;

                                echo "<tr>
                                  <td>" . $row['name'] . "</td>
                                  <td>" . $row['email'] . "</td>
                                  <td>" . $row['phone'] . "</td>
                                  <td>" . $row['ddate'] . "</td>
                                  <td>" . $row['delivery'] . "</td>
                                  <td>" . $row['eventtype'] . "</td>
                                  <td>" . $row['amount'] . "</td>
                                  <td>" . $row['cakeflavor'] . "</td>
                                  <td>" . $row['comments'] . "</td>
                                  <td>" . $image . "</td>
                                  <td><a href='?delid=" . $row['ordersid'] . "'>del</a></td>
                                  </tr>";
                            }
                            ?>
                            </tbody>
                        </table>

                        <!--<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
                          <strong>Page <?php echo $page_no . " of " . $total_no_of_pages; ?></strong>
                      </div>-->


                        <ul class="pagination">
                            <?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>

                            <li <?php if ($page_no <= 1) {
                                echo "class='disabled'";
                            } ?>>
                                <a <?php if ($page_no > 1) {
                                    echo "href='?page_no=$previous_page'";
                                } ?>>Previous</a>
                            </li>

                            <?php
                            if ($total_no_of_pages <= 10) {
                                for ($counter = 1; $counter <= $total_no_of_pages; $counter++) {
                                    if ($counter == $page_no) {
                                        echo "<li class='active'><a>$counter</a></li>";
                                    } else {
                                        echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                                    }
                                }
                            } elseif ($total_no_of_pages > 10) {

                                if ($page_no <= 4) {
                                    for ($counter = 1; $counter < 8; $counter++) {
                                        if ($counter == $page_no) {
                                            echo "<li class='active'><a>$counter</a></li>";
                                        } else {
                                            echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                                        }
                                    }
                                    echo "<li><a>...</a></li>";
                                    echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
                                    echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                                } elseif ($page_no > 4 && $page_no < $total_no_of_pages - 4) {
                                    echo "<li><a href='?page_no=1'>1</a></li>";
                                    echo "<li><a href='?page_no=2'>2</a></li>";
                                    echo "<li><a>...</a></li>";
                                    for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
                                        if ($counter == $page_no) {
                                            echo "<li class='active'><a>$counter</a></li>";
                                        } else {
                                            echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                                        }
                                    }
                                    echo "<li><a>...</a></li>";
                                    echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
                                    echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                                } else {
                                    echo "<li><a href='?page_no=1'>1</a></li>";
                                    echo "<li><a href='?page_no=2'>2</a></li>";
                                    echo "<li><a>...</a></li>";

                                    for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                                        if ($counter == $page_no) {
                                            echo "<li class='active'><a>$counter</a></li>";
                                        } else {
                                            echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                                        }
                                    }
                                }
                            }
                            ?>

                            <li <?php if ($page_no >= $total_no_of_pages) {
                                echo "class='disabled'";
                            } ?>>
                                <a <?php if ($page_no < $total_no_of_pages) {
                                    echo "href='?page_no=$next_page'";
                                } ?>>Next</a>
                            </li>
                            <?php if ($page_no < $total_no_of_pages) {
                                // echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
                            } ?>
                        </ul>
                    </div>
                    <!-- /row-->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container-->
    </section>
    <!-- /Section ends -->

<?php } else {
 include_once "notauthorized.php";
}
include_once "html/footer.php";
?>
