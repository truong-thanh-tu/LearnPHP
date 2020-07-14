<?php
while($row = mysqli_fetch_assoc($data['Product'])) {
    $iamge = $row['image'];
    $title = $row['title'];
    $price = $row['price'];
    $status = $row['status'];
    echo ' <div class="col-lg-3 col-sm-6 mix all dresses ">
                <div class="single-product-item">
                    <figure>
                        <img src="'.$iamge.'" alt="">
                        <div class="p-status '.$status.'">'.$status.'</div>
                    </figure>
                    <div class="product-text">
                        <a href="detail_product.html"> <h6>'.$title.'</h6></a>
                        <p>'.$price.'</p>
                    </div>
                </div>
            </div>';

}