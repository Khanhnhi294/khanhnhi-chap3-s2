<?php require_once 'templates/header.php' ?>
<?php

$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
$subject = isset($_POST["subject"]) ? $_POST["subject"] : "";
?>
    <div class="card">
        
        <div class="card-body">
            <?php
            $colorIndex = 0; 
            foreach ($subject as $value) {
                $color = $colors[$colorIndex]; 
                echo "<button class='btn btn-$color' style='margin-right: 4px;'> $value </button>";
                $colorIndex++; 
                if ($colorIndex >= count($colors)) {
                    $colorIndex = 0; 
                }
            }
            ?>
        </div>
    </div>


<?php require_once 'templates/footer.php' ?>

