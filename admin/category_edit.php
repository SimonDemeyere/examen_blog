<?php
include("includes/header.php");
include("includes/sidebar.php");
include("includes/content-top.php");
if(!$session->is_signed_in()){
    redirect("login.php");
}
/**kijken of er een id in de url aanwezig is*/
if(empty($_GET['id'])){
    redirect('categories.php');
}
$category = Category::find_by_id($_GET['id']);
var_dump($category);

/*wegschrijven data in DB*/
if(isset($_POST['update_category'])){
    if($category){
        $category->title = trim($_POST['title']);
        $category->save();
        redirect('categories.php');
    }
}
?>
<!--Begin Page Content-->
<div class="row">
    <div class="col-12">
        <h1 class="page-header">Edit/Wijzigen Category</h1>
        <hr>
        <form action="category_edit.php?id=<?php echo $category->id;  ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12">

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control"
                               value="<?php echo $category->title; ?>">
                    </div>
                </div>
                <div class="d-flex">
                    <input type="submit" name="update_category" value="Update Category"
                           class="btn btn-warning btn-lg rounded-0">
                    <a href="category_delete.php?id=<?php echo $category->id; ?>"  class="btn btn-danger btn-lg rounded-0">Delete
                        Category</a>
                </div>

            </div>
        </form>
    </div>
</div>
<!--End Page Content-->

<?php
include("includes/footer.php");
?>
