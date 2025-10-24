<?php include('includes/header.php'); ?>

<main class="contact-page">
  <section class="contact-section">
    <h1>HUBUNGI KAMI</h1>
    <p>
      Kami ingin mendengar kabar dan menjawab pertanyaan Anda.
      Silakan isi formulir kontak kami, dan anggota tim kami akan segera menghubungi Anda.
    </p>
    <p>
      Pertanyaan umum lainnya atau koneksi dapat dikirim ke <a href="mailto:hello@monarchcoffee.com">hello@monarchcoffee.com</a>
    </p>

    <form action="process_form.php" method="POST" class="contact-form">
      <div class="form-row">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="E-mail" required>
      </div>
      <textarea name="message" placeholder="Message" rows="6" required></textarea>
      <button type="submit" class="send-btn">KIRIM PESAN</button>
    </form>
  </section>
</main>

<?php include('includes/footer.php'); ?>
