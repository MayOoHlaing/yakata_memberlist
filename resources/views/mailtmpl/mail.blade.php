<html>

<body>
  乗船名簿は以下の通りです。<br />
  <?php foreach ($_POST['data']['name'] as $i => $data) { ?>
    <p>お名前：　<?php echo $data ?></p>
    <p>場所　：　<?php echo $_POST['data']['address'][$i] ?></p>
    <p>年齢　：　<?php echo $_POST['data']['age'][$i] . "歳" ?></p>
    <p>性別　：　<?php echo $_POST['data']['gender'][$i] ?></p>
    <p>連絡先：　<?php echo $_POST['data']['contact'][$i] ?></p>
    <p>---------------------------------------------------</p>
  <?php } ?>
  <!-- <table rules='all' style='border-color: #666;' cellpadding='10'>
    <tr>
      <th>
        お名前
      </th>
      <th>
        場所
      </th>
      <th>
        年齢
      </th>
      <th>
        性別
      </th>
      <th>
        連絡先
      </th>
    </tr>
    <?php foreach ($_POST['data']['name'] as $i => $data) { ?>
      <tr>
        <td><?php echo $data ?></td>
        <td><?php echo $_POST['data']['address'][$i] ?></td>
        <td><?php echo $_POST['data']['age'][$i] . "歳" ?></td>
        <td><?php echo $_POST['data']['gender'][$i] ?></td>
        <td><?php echo $_POST['data']['contact'][$i] ?></td>
      </tr>
    <?php } ?>
  </table> -->
</body>

</html>