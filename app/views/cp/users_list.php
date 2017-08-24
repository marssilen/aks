 <table class="table table-striped " style="
 text-align: left;
 direction: rtl;
 //text-decoration: underline;
 ">
    <thead >
      <tr>
        <th>شماره</th>
        <th>نام کاربری</th>
        <th>ایمیل</th>
        <th>نوع</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($data['data'] as $user){?>
      <tr>
        <td><?= $user['id'] ?></td>
        <td><a href="../edit_user/<?= $user['id'] ?>"><?= $user['username'] ?></a></td>
        <td><?= $user['email'] ?></td>
        <td><?= $user['role'] ?></td>
      </tr>

      <?php } ?>
    </tbody>
  </table>
<div class="w3-center"><?= $data['pview']?></div>
