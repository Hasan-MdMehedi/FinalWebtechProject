<?php include 'header.php'; ?>
<div id="main-content">
    <div id="form-section">

    <h2>Add New Record</h2>
    
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                <?php
                $conn = mysqli_connect("localhost","root","","crud") or die("conn failed");
                 $sql = "SELECT  * from studentclass" ;
                 $result = mysqli_query($conn,$sql) or die("resultfailed");

                 while($row = mysqli_fetch_assoc($result)){

                 
                ?>

                <option value=" <?php echo $row["cid"] ; ?>"><?php echo $row["cname"] ; ?></option>

                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>

                <div class="form-group">
            <label>Email</label>
            <input type="text" name="semail" />
        </div>

            <div class="form-group">
            <label>Completed Credit</label>
            <input type="text" name="scredit" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</div>
</body>
</html>
