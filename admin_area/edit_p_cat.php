<?php
include '../includes/db.php';
if(!isset($_SESSION['admin_email']) && (!isset($_SESSION['admin_pass']))){
    echo "<script>window.open('index.php', '_self')</script>";
}else {

    ?>
    <?php

    if(isset($_GET['edit_p_cat'])){

        $edit_p_cat_id = $_GET['edit_p_cat'];

        $edit_p_cat_query = "select * from categoria where id='$edit_p_cat_id'";

        $run_edit = mysqli_query($con,$edit_p_cat_query);

        $row_edit = mysqli_fetch_array($run_edit);

        $p_cat_id = $row_edit['id'];

        $p_cat_title = $row_edit['categoria'];


    }


    ?>

    <div class="row"><!-- 1 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <ol class="breadcrumb"><!-- breadcrumb Starts -->

                <li>

                    <i class="fa fa-dashboard"></i> Dashboard / Editar Gênero

                </li>

            </ol><!-- breadcrumb Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 1 row Ends -->

    <div class="row"><!-- 2 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <div class="panel panel-default"><!-- panel panel-default Starts -->

                <div class="panel-heading" ><!-- panel-heading Starts -->

                    <h3 class="panel-title" ><!-- panel-title Starts -->

                        <i class="fa fa-money fa-fw" ></i> Editar Gênero

                    </h3><!-- panel-title Ends -->


                </div><!-- panel-heading Ends -->


                <div class="panel-body" ><!-- panel-body Starts -->

                    <form class="form-horizontal" action="" method="post" ><!-- form-horizontal Starts -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" >Titulo</label>

                            <div class="col-md-6" >

                                <input type="text" name="p_cat_title" class="form-control" value="<?php echo $p_cat_title; ?>" >

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" ></label>

                            <div class="col-md-6" >

                                <input type="submit" name="update" value="atualizar" class="btn btn-primary form-control" >

                            </div>

                        </div><!-- form-group Ends -->

                    </form><!-- form-horizontal Ends -->

                </div><!-- panel-body Ends -->


            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->

    <?php

    if(isset($_POST['update'])){

        $p_cat_title = $_POST['p_cat_title'];

        $update_p_cat = "update categoria set categoria='$p_cat_title' where id='$p_cat_id'";

        $run_p_cat = mysqli_query($con,$update_p_cat);

        if($run_p_cat){

            echo "<script>alert('Gênero Alterado')</script>";

            echo "<script>window.open('home.php?ver_categorias','_self')</script>";

        }



    }



    ?>


<?php } ?>