<a href="#" style="background-color: #03DA73;color: white;text-decoration: none;padding: 8px 13px;border-radius: 5px;align-self: center;align-content: center;">
<img src="/assets/plus-icon.svg" style="margin-right: 9px;margin-top: -4;">
Add Operator
</a>

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
        <a href="#" style="background-color: #03DA73;color: white;text-decoration: none;padding: 4px 13px;margin: 2px;border-radius: 5px;align-self: center;align-content: center;">
        <img src="/assets/plus-icon.svg" style="margin-right: 9px;margin-top: -4;">
        Edit
        </a>
        <a href="#" style="background-color: #da0348;color: white;text-decoration: none;padding: 4px 13px;margin: 2px;border-radius: 5px;align-self: center;align-content: center;">
        <img src="/assets/plus-icon.svg" style="margin-right: 9px;margin-top: -4;">
        Delete
        </a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>