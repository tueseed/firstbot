<?php
    require('ชื่อไฟล์ที่เชื่อตม่อ database');
    $sql_text = "SELECT * FROM tbl_nutthapong WHERE kerword LIKE 'a'";
    $query = mysqli_query($conn,$sql_text);
    while($objresult = mysqli_fetch_assoc($query))
    {
        echo $objresult['answer']."<br>";
    }
?>