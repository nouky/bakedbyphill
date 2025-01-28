<div id="ourspecials" class="tabcontent">
                        <form method="post">
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <?php
                                $result = $conn->query("SELECT sitedataid,description, data FROM `sitedata`");
                                $records = $result->fetchAll(PDO::FETCH_ASSOC);
                                ?>
                                
                                <tr>
                                    <td>Basic Event:</td>
                                    <td><input name="dataid-1" type="text" value="<?php echo $records[0]['data']; ?>"></td>
                                </tr>
                                    <tr>
                                    <td>Medium Event:</td>
                                    <td><input name="dataid-2" type="text" value="<?php echo $records[1]['data']; ?>"></td>
                                </tr>
                                    <tr>
                                    <td>Big Event:</td>
                                    <td><input name="dataid-3" type="text" value="<?php echo $records[2]['data']; ?>"></td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <input type="submit" class="btn" name="btnSpecials" value="Update"> 
                        </form>
</div>