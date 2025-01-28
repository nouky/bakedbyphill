<?php
$notindex = true;
include_once "html/header.php";
include_once "admin/site-update/all.php";

session_start();
$loggedin = isset($_SESSION['loggedin']) ? $_SESSION['loggedin'] : false;

if (isset($_POST['btnSpecials'])) {

    // Basic event
    if ($_POST['dataid-1'] > 0) {
        $query = $conn->query("update sitedata set data=". $_POST['dataid-1'] ."  where sitedataid=1");
    }
    
    // medium event
    if ($_POST['dataid-2'] > 0) {
        $query = $conn->query("update sitedata set data=". $_POST['dataid-2'] ."  where sitedataid=2");
    }
    
    // big event
    if ($_POST['dataid-3'] > 0) {
        $query = $conn->query("update sitedata set data=". $_POST['dataid-3'] ."  where sitedataid=3");
    }
}

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
                        
                        <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'ourspecials')">Our Specials</button>
  <button class="tablinks" onclick="openCity(event, 'cakes')">Cakes</button>
  <button class="tablinks" onclick="openCity(event, 'snacks')">Snacks</button>
  <button class="tablinks" onclick="openCity(event, 'frozen-snacks')">Frozen Snacks</button>
  <button class="tablinks" onclick="openCity(event, 'other')">Other</button>
</div>


<?php 

include_once "admin/site-update/specials.php";
include_once "admin/site-update/cakes.php";
include_once "admin/site-update/snacks.php";
include_once "admin/site-update/frozen-snacks.php";
include_once "admin/site-update/other.php";

?>






                        
                        

                    </div>
                    <!-- /row-->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container-->
    </section>
    <!-- /Section ends -->
    
    
    <style>

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  border: 1px solid #ccc;
  border-top: none;
}

.show {
  display: block;
}
</style>

<script>

const fetchpost = async (url, params) => {
    let response = await fetch(url, {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(params),
    }).then(res => {
        if (!res.ok) {
            throw Error(res.statusText);
        }
        return res.json()
    }).then(response => {
        return response;
    }).catch(response => {
        console.error(response);
        return response;
    });

    return await response;
}




    
function openCity(evt, cityName) {
    
    const showelement = document.querySelector('.show');
    
    if (showelement) document.querySelector('.show').classList.remove("show");
    
    
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

<?php } else {
 include_once "notauthorized.php";
}
include_once "html/footer.php";
?>
