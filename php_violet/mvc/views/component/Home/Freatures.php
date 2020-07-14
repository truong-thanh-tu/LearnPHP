<?php
while($row = mysqli_fetch_assoc($data['Freatures'])) {
    $iamge = $row['image'];
    $title = $row['title'];
    $text = $row['text'];
    echo '<div class="col-lg-4">
            <div class="single-features-ads first">
               <img src="'.$iamge.'" alt="">
               <h4>'.$title.'</h4>
               <p>'.$text.' </p>
            </div>
           </div>';
    }
?>

