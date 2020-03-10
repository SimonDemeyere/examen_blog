<?php
include("includes/header.php");
include("includes/sidebar.php");
include("includes/content-top.php");
if(!$session->is_signed_in()){
    redirect("login.php");
}
$message = "";
$categories = Category::find_all();

?>
<!--Begin Page Content-->
<div class="row">
    <div class="col-12">
        <h1 class="page-header">Ophalen van alle Categories</h1>
        <hr>
        <a href="category_add.php" class="btn btn-success rounded-0 mb-3">
            <i class="fas fa-user-plus"></i>
            Add Category
        </a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($categories as $category):?>
                <tr>
                    <th scope="row"><?php echo $category->id;?></th>
                    <td><?php echo $category->title;?></td>
                    <td><a class="btn btn-danger rounded-0" href="category_delete.php?id=<?php echo $category->id;
                        ?>"><i class="far fa-trash-alt"></i></a></td>
                    <td><a class="btn btn-danger rounded-0" href="category_edit.php?id=<?php echo $category->id;
                        ?>"><i class="far fa-edit"></i></a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!--End Page Content-->

<?php
include("includes/footer.php");
?>
