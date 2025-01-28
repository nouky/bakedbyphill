<div id="cakes" class="tabcontent show">
                        <form method="post">
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <th>Cake</th>
                                    <th>1/2lb</th>
                                    <th>1lb</th>
                                    <th>1.5lb</th>
                                    <th>Active</th>
                                    <th></th>
                                </tr>
                                <?php
                                $result = $conn->query("SELECT * FROM `cakes`");
                                $records = $result->fetchAll(PDO::FETCH_ASSOC);
                                
                                foreach ($records as $cake) {
                                    
                                    $checked = $cake['active'] ? "checked='checked'" : '' ;
                                    echo "<tr>
                                    <td><input type='text' value='". $cake['description'] ."' class='description'></td>
                                    <td><input type='text' value='". $cake['type1'] ."' class='short type1'></td>
                                    <td><input type='text' value='". $cake['type2'] ."' class='short type2'></td>
                                    <td><input type='text' value='". $cake['type3'] ."' class='short type3'></td>
                                    <td><input type='checkbox' value='1' ". $checked ." /></td>
                                    <td><a class='btn btn-table' onclick='updCakes(this, ". $cake['cakesid'] .")'>Update</a></td> 
                                    </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        </form>
</div>
<script>
    const updCakes = (el, cakesid) => {
        const tr = el.closest('tr');

        const postdata = {
             description : tr.querySelector('.description').value,
             type1 : tr.querySelector('.type1').value,
             type2 : tr.querySelector('.type2').value,
             type3 : tr.querySelector('.type3').value,
             func : 'updCakes'
        };
    
        fetchpost('/admin/php/siteupdate.php', postdata).then(result => {
            console.log (result);
        });
    }
</script>