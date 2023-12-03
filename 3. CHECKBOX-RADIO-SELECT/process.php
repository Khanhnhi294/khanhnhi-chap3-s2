<?php 
include "templates/header.php"
?>
<?php
$province = isset($_POST["province"]) ? $_POST["province"] : "" ;
$gender = isset($_POST['gender'])? $_POST["gender"] : "";
$subject = isset($_POST['subject'])? $_POST["subject"] : [];
?>
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3"><?php echo $province ?></h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">
        <?php 
            if($gender=="Male"){
                echo "<img src='images/male.png' style='width: 100px; height : 100px;' alt='Male'>";
            }else {
                echo "<img src='images/female.png' style='width: 100px; height : 100px;' alt='female'>";
            }

        ?>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body">
            <?php
                foreach( $subject as $value ){
                    echo "<button class='btn btn-primary' style='margin-right:4px;'> $value </button>";
                }
            ?>
        </div>
    </div>

<?php 
include "templates/footer.php"
?>