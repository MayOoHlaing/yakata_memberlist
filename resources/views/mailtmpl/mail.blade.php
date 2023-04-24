<!-- foreach ($_POST['data']['name'] as $i => $data) {
  $message .= "お名前   :  " . $data . "\r\n場所   :  " . $_POST['data']['address'][$i] . "\r\n年齢   :  " . $_POST['data']['age'][$i] . "歳\r\n性別   :  " . $_POST['data']['gender'][$i] . "\r\n連絡先   :  " . $_POST['data']['contact'][$i];
} -->
<html>

<body>
  乗船名簿は以下の通りです。<br />
  <table rules='all' style='border-color: #666;' cellpadding='10'>
    <tr>
      <th>
        お名前:
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
        <td><?php echo $_POST['data']['age'][$i] . "歳"?></td>
        <td><?php echo $_POST['data']['gender'][$i] ?></td>
        <td><?php echo $_POST['data']['contact'][$i] ?></td>
      </tr>
    <?php } ?>
  </table>
</body>

</html>