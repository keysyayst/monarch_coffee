<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  echo "<div style='text-align:center; font-family:sans-serif; padding:2rem;'>";
  echo "<h2>Terima Kasih, $name!</h2>";
  echo "<p>Pesan Anda telah diterima. Kami akan menghubungi Anda kembali di <strong>$email</strong>.</p>";
  echo "<blockquote style='background:#f5f1e9; padding:1rem; border-left:4px solid #800000;'>$message</blockquote>";
  echo "<a href='index.php' style='color:#800000; text-decoration:none;'>← Kembali ke beranda</a>";
  echo "</div>";
}
?>
