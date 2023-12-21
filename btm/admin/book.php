<!--

<?php  include('header.php'); ?>
   <div class="addpage">
    
    <div class="al">
    <div class="line linediv1"></div>
    <div class="one">1</div>
    <div class="line linediv2"></div>
    <div class="two">2</div>
    <div class="line linediv3"></div>
   </div>
    <div class="_2p">
      <div class="p1">Select Category</div>
         <div class="p2" style="color:black">Add Product Details</div>
    </div>
   
   <div class="select">
   <div class="s1">
      <p style="color:black">Select Category</p>
            <input style="height:15px" type="text" placeholder="">
   </div>
   <div class="s2">
   <p style="color:black";><label for="payment">Payment Allowed</label></p>
    <select class="op" id="payment">
    <option value="Both">Both</option>
     <option value="Cash">cash</option>
     <option value="Paytm">Paytm</option>
     <option value="None">None</option>
     <option value="Card">Card</option>
   </select>
   </div>
</div>
<br>
<div class="section">

<label  class="l1" for="return"> Product Return</label>
<input type="checkbox" id="return" >

<label  class="l2" for="SDF"> Shipped By SDF</label>
<input type="checkbox" id="SDF" >

<label  class="l3" for="self"> Self Ship</label>
<input type="checkbox" id="self" >
</div>

<button class="b1">Next</button>
   </div>
   <?php  include('footer.php');?>
-->

<?php include('header.php'); ?>
<h2>Book</h2>
<a href="book_manage.php">Add New Role</a>
<table border="1" style="width:100%">
    <thead>
        <tr>
            <th>S.no</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
          
</tr>
</thead>
<tbody>
<tr>
            <td>1</td>
            <td>Admin</td>
            <td>This is boss</td>
            <td><button>Edit</button>/<button>Delete</button></td>
    
</tr>
</tbody>
</table>
<?php include('footer.php');?> 