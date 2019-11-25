<?php
include '../includes/db.php';
if(!isset($_SESSION['admin_email']) && (!isset($_SESSION['admin_pass']))){
    echo "<script>window.open('index.php', '_self')</script>";
}else {

    ?>
    <?php

    if(isset($_GET['edit_slide'])){

        $edit_id = $_GET['edit_slide'];

        $edit_slide = "select * from slider where slider_id='$edit_id'";

        $run_edit = mysqli_query($con,$edit_slide);

        $row_edit = mysqli_fetch_array($run_edit);

        $slide_id = $row_edit['slider_id'];

        $slide_name = $row_edit['slider_name'];

        $slide_image = $row_edit['slide_image'];



    }


    ?>

    <div class="row" ><!-- 1 row Starts -->

        <div class="col-lg-12" ><!-- col-lg-12 Starts -->

            <ol class="breadcrumb"><!-- breadcrumb Starts -->

                <li class="active">

                    <i class="fa fa-dashboard" ></i> Dashboard / Editar Slider

                </li>

            </ol><!-- breadcrumb Ends -->



        </div><!-- col-lg-12 Ends -->

    </div><!-- 1 row Ends -->

    <div class="row" ><!-- 2 row Starts -->

        <div class="col-lg-12" ><!-- col-lg-12 Starts -->

            <div class="panel panel-default" ><!-- panel panel-default Starts -->

                <div class="panel-heading" ><!-- panel-heading Starts -->

                    <h3 class="panel-title" >

                        <i class="fa fa-money fa-fw"></i> Editar Slider

                    </h3>

                </div><!-- panel-heading Ends -->

                <div class="panel-body" ><!-- panel-body Starts -->

                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Slide Nome:</label>

                            <div class="col-md-6">

                                <input type="text" name="slide_name" class="form-control" value="<?php echo $slide_name; ?>">

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Slide Imagem:</label>

                            <div class="col-md-6">

                                <input type="file" name="slide_image" class="form-control" >
                                <br>
                                <img src="slides_images/<?php echo $slide_image; ?>" width="70" height="70" >

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input type="submit" name="update" value="atualizar" class=" btn btn-primary form-control" >

                            </div>

                        </div><!-- form-group Ends -->


                    </form><!-- form-horizontal Ends -->

                </div><!-- panel-body Ends -->


            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->


    </div><!-- 2 row Ends -->

    <?php

    if(isset($_POST['update'])){

        $slide_name = $_POST['slide_name'];

        $slide_image = $_FILES['slide_image']['name'];

        $temp_name = $_FILES['slide_image']['tmp_name'];

        move_uploaded_file($temp_name,"slides_images/$slide_image");

        $update_slide = "update slider set slider_name='$slide_name',slide_image='$slide_image' where slider_id='$slide_id'";

        $run_slide = mysqli_query($con,$update_slide);

        if($run_slide){

            echo "<script>alert('Slide Atualizado')</script>";

            echo "<script>window.open(hhome.php_self')</script>";

        }

    }


    ?>



<?php } ?>