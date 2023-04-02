<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crud Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">

<!-- 
modal start -->
  <h2>Simple crud example </h2>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Add data
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Add Data</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

        <form action="<?= base_url('/add')?>" method="POST">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" id="name" required>
  </div>
  <div class="form-group">
    <label for="roll">Roll</label>
    <input type="number" class="form-control" placeholder="Enter your roll" name="roll" id="roll" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  






 <!-- modal end --> 

 <table class="table table-hover mt-2">
    <thead>
      <tr>
        <th>Roll</th>
        <th>Name</th>
        <th>Action</th>
     
      </tr>
    </thead>
    <tbody>
        <?php
        foreach($details as $detail):
       ?>
      <tr>
        <td><?php echo $detail['roll'];?></td>
        <td><?php echo $detail['name'];?></td>        
        <td>
            <a href="<?= base_url('/edit/'.$detail['id'])?>" class="btn btn-primary">Edit</a>
            <a href="<?= base_url('/remove/'.$detail['id'])?>"  onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Remove</a>
        
        </td>        
      </tr>
     <?php endforeach;?>
    </tbody>
  </table>



</div>

</body>
</html>
