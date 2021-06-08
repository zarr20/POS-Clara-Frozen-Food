<a data-toggle="modal" data-target="#exampleModal"  href="#" style="background-color: #5e5e5e;color: white;text-decoration: none;padding: 8px 13px;border-radius: 5px;align-self: center;align-content: center;">
<img src="/assets/plus-icon.svg" style="margin-right: 9px;margin-top: -4;">
Add Operator
</a>

<!-- Modal Add Inventory -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        Add Operator
        <a class="close" data-dismiss="modal" aria-label="Close" href="#" style="align-self: center;align-content: center;">
        <img src="/assets/delete-icon-black.svg" style="/* margin-top: -4; */height: 23px;">
        </a>
      </div>
      <div class="modal-body">
        
      <form action="/admin/user/add" method="post">
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Name</label>
        <input type="text" class="form-control" name="nama">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Access</label>
        <select class="form-control" id="exampleFormControlSelect1" name="akses">
          <option>admin</option>
          <option>cashier</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Username</label>
        <input type="text" class="form-control" name="username">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Password</label>
        <input type="text" class="form-control" name="password">
      </div>
      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>

    </div>
  </div>
</div>

<!-- Modal Edit Inventory -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        Edit Operator
        <a class="close" data-dismiss="modal" aria-label="Close" href="#" style="align-self: center;align-content: center;">
        <img src="/assets/delete-icon-black.svg" style="/* margin-top: -4; */height: 23px;">
        </a>
      </div>
      <div class="modal-body">
        
      <form action="/admin/user/save" method="post">
      <input type="hidden" class="form-control" name="id" id="id">
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Name</label>
        <input type="text" class="form-control" name="nama" id="nama">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Access</label>
        <select class="form-control" id="exampleFormControlSelect1" name="akses" id="akses">
          <option value="admin">admin</option>
          <option value="cashier">cashier</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" id="username">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Password</label>
        <input type="text" class="form-control" name="password" id="password">
      </div>
      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>

    </div>
  </div>
</div>

<div class="card" style="padding: 20px;margin-top: 20px;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Access</th>
      <th scope="col" style=" width: 40%; ">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php $no=1; foreach($getUser as $User){?>  
    <tr>
      <td><?php print_r($User->id_pengguna) ?></td>
      <td><?php print_r($User->akses_pengguna) ?></td>
      <td><?php print_r($User->nama_pengguna) ?></td>
      <td><?php print_r($User->username) ?></td>
      <td><?php print_r($User->password) ?></td>
      <td style="text-align:right">
        <a data-toggle="modal" data-target="#exampleModal2" 
                onclick="
                editUser(
                  '<?php print_r($User->id_pengguna) ?>',
                  '<?php print_r($User->nama_pengguna) ?>',
                  '<?php print_r($User->akses_pengguna) ?>',
                  '<?php print_r($User->username) ?>',
                  '<?php print_r($User->password) ?>',
                  )
                "
        
        href="#" style="background-color: #03DA73;color: white;text-decoration: none;padding: 4px 13px;margin: 2px;border-radius: 5px;align-self: center;align-content: center;">
        <img src="/assets/plus-icon.svg" style="margin-right: 9px;margin-top: -4;">
        Edit
        </a>
        <a href="/admin/user/delete/<?php print_r($User->id_pengguna) ?>" style="background-color: #da0348;color: white;text-decoration: none;padding: 4px 13px;margin: 2px;border-radius: 5px;align-self: center;align-content: center;">
        <img src="/assets/plus-icon.svg" style="margin-right: 9px;margin-top: -4;">
        Delete
        </a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>


<script>
function editUser(a,b,c,d,e){
  console.log(a+b+c+d+e);
  document.getElementById("id").value = a;
  document.getElementById("nama").value = b;
  $('select[name="akses"]').val(c);
  document.getElementById("username").value = d;
  document.getElementById("password").value = e;
}
</script>

