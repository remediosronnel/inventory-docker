<?php

include "../includes/header.php";
include "../includes/sidebar.php";
include "../config/database.php";


$id=$_GET['id'];


$result=mysqli_query($conn,
"SELECT * FROM categories WHERE id=$id");


$row=mysqli_fetch_assoc($result);



if(isset($_POST['update'])){


$name=$_POST['category_name'];


mysqli_query($conn,

"UPDATE categories 
SET category_name='$name'
WHERE id=$id"

);


header("Location: categories.php");


}



?>


<div class="content">


<h2>Edit Category</h2>



<form method="POST">


<div class="mb-3">

<label>
Category Name
</label>


<input 
type="text"
name="category_name"
class="form-control"
value="<?= $row['category_name']; ?>"
required>


</div>


<button 
class="btn btn-primary"
name="update">

Update

</button>


<a href="categories.php"
class="btn btn-secondary">

Back

</a>


</form>



</div>


<?php include "../includes/footer.php"; ?>