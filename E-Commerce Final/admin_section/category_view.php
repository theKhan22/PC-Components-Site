
<h3 class="text-center">Category Details</h3>

<table class="table table-bordered mt-5">
    <thead class='bg-primary'>
        
        <tr>
            <th>SL No</th>
            <th>Category ID</th>
            <th>Title</th>
            <th>Total</th>
            
        </tr>

    </thead>
    <tbody class='bg-secondary text-light'>
    <?php 

$get_users ="select p.category_id,c.category_title, COUNT(*) as 'Total' FROM products as p JOIN
categories as c ON(p.category_id=c.category_id) GROUP BY category_id;";
$result = mysqli_query($con,$get_users);
$row_count = mysqli_num_rows($result);
if($row_count>0){

    $serial=1;


    while($row_each = mysqli_fetch_assoc($result)){
        $category_id=$row_each['category_id'];
        $category_title=$row_each['category_title'];
        $Total=$row_each['Total'];
        

        echo "

    
    <tr>
    <th>$serial</th>
    <th>$category_id</th>
    <th>$category_title</th>
    <th>$Total</th>
    
   </tr>
    
    
    ";

    $serial++;

    }

    

}else{
    echo "<h3 class='text-center text-danger'></h3>";
}



?>

    </tbody>
</table>

