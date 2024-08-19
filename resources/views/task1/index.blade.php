<!DOCTYPE html>
<html>
<head>
  <title>Task1: lấy thông tin A & NS</title>
</head>
<body>
  <h1>Lấy thông tin DNS</h1>
  <form method="get">
    <label for="domain">Nhập domain:</label>
    <input type="text" name="domain" id="domain" required>
    <button type="submit">Lấy thông tin</button>
  </form>
<?php
// Hàm lấy thông tin DNS record
function getDNSRecords($domain) {
  $records = dns_get_record($domain, DNS_A | DNS_NS);
  return $records;
}

// Kiểm tra xem có submit form hay không
if (isset($_GET['domain'])) {
  $domain = $_GET['domain'];

  // Lấy thông tin DNS record
  $records = getDNSRecords($domain);

  // Hiển thị kết quả
  if ($records) {
    echo "<h2>Thông tin DNS của $domain:</h2>";
    echo "<ul>";
    foreach ($records as $record) {
      echo "<li>";
      echo "<strong>Type:</strong> " . $record['type'] . "<br>";
      if (isset($record['ip'])){

        echo "<strong>Value:</strong> " . $record['ip'];
      }

      elseif (isset($record['target'])){
        echo "<strong>Value:</strong> " . $record['target'];

      }
      else {
        echo "<strong>Value:</strong> n/a";
      }
      echo "</li>";

    }
    echo "</ul>";
  } else {
    echo "Không tìm thấy thông tin DNS cho $domain.";
  }
}
?>
</body>
</html>
