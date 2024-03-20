<html>
    <style type="text/css">
        td{
            padding: 5px;
            border: 1px solid #ccc;
        }
    </style>
    <body>
        <center>
            <h2>SENARAI NAMA</h2>
            <?php
            include('config.php');
            $query-mysqli_query($connect,"SELECT id,nama_pelajar,no_kp FROM data");
            num_result=mysqli_num_rows($query1);
            ?>
        </center>
    </body>
</html>