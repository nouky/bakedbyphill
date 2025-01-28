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
                                <th>Mail List</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <?php
                                    $sql = "SELECT 
                                    email
                                  FROM 
                                    `subscribe`   
                                    where active=1";

                                    $emails = null;
                                    foreach ($conn->query($sql) as $row) {
                                        $emails .= $row['email'] . ",";
                                    }
                                    if ($emails) {
                                        $emails = substr($emails, 0, -1);
                                        echo $emails;
                                    } else {
                                        echo "No emails yet";
                                    }
                                    ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <input type="hidden" id="maillist" value="<?php echo $emails; ?>"/>
                        <?php if ($emails) {?><input type="submit" class="btn" id="btnCopyList" value="Copy list"> <?php } ?>
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
