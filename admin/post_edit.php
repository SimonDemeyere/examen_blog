<?php
include("includes/header.php");
include("includes/sidebar.php");
include("includes/content-top.php");
if(!$session->is_signed_in()){
    redirect("login.php");
}
/**kijken of er een id in de url aanwezig is*/
if(empty($_GET['id'])){
    redirect('posts.php');
}
/**ophalen van de aangeklikte user*/
$post = Post::find_by_id($_GET['id']);
$categories = Category::find_all();

/*wegschrijven data in DB*/
if(isset($_POST['update_post'])){
    if($post){
        $post->title = trim($_POST['title']);
        $post->description  = trim($_POST['description']);
        $post->short_description  = trim($_POST['short_description']);
        $post->category_id  = trim($_POST['category_id']);
        $post->save();
        redirect('posts.php');
    }
}
?>
<!--Begin Page Content-->
<div class="row">
    <div class="col-12">
        <h1 class="page-header">Edit/Wijzigen Post</h1>
        <hr>
        <form action="post_edit.php?id=<?php echo $post->id;  ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12">

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control"
                               value="<?php echo $post->title; ?>">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10"><?= $post->description ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="short_description">short_description</label>
                        <input type="text" name="short_description" class="form-control"
                               value="<?php echo $post->short_description; ?>">
                    </div>
                    <div class="form-group">
                        <select name="category_id" id="category_id">
                            <?php foreach($categories as $category) : ?>
                            <option value="<?= $category->id ?>"><?= $category->title ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="d-flex">
                    <input type="submit" name="update_post" value="Update Post"
                           class="btn btn-warning btn-lg rounded-0">
                    <a href="post_delete.php?id=<?php echo $post->id; ?>"  class="btn btn-danger btn-lg rounded-0">Delete
                        Post</a>
                </div>

            </div>
        </form>
    </div>
</div>
<!--End Page Content-->

<?php
include("includes/footer.php");
?>
