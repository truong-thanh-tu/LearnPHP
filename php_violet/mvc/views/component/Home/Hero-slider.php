<?php
while($row = mysqli_fetch_array($data['Slider'])){
    $image = $row['image'];
    echo '<div class="single-slider-item set-bg" data-setbg="'.$image.'">
                         <div class="container">
                           <div class="row">
                               <div class="col-lg-12">
                                  <h1>2019</h1>
                                  <h2>Lookbook.</h2>
                                  <a href="#" class="primary-btn">See More</a>
                              </div>
                           </div>
                         </div>
                        </div>';
}
?>