<?php include "database/connect.php"; ?>
<?php include "database/function.php"; ?>
<?php 
  updateRow();
  deleteRow();
  createRow();
?>
<?php include "./includes/header.php"?>
<!-- nội dung cua index -->
    <div class="container">
      <div class="row">
        <div class="col-md-6">
<!-- đây là nội dung hiển thị -->
            <?php
                updateRow();
                ?>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">FullName</th>
                    <th scope="col">Password</th>
                    <th scope="col">edit</th>
                    <th scope="col">delete</th>

                    </tr>
                </thead>
                <tbody>
                    <?php showAllData() ?>
                </tbody>
                </table>

                <!-- kết thúc nội dung hiển thị -->
        </div>         
      </div>
    </div>
<!-- kết thúc nọi dung của index -->
    <?php include "includes/footer.php"?>