

<html>
  <title>SMK MVP ARS INTERNASIONAL</title>
  <link rel="stylesheet" href="create account.css">
  <body>
    <section>
      <span></span>
      <h1>PEMBAYARAN UANG SEKOLAH</h1>
      <form method="POST" action="proses create account.php">
        <input placeholder='Your Name' type='text' name="nama">
        <input placeholder='UserName' type='text' name="username">
        <input placeholder='Password' type='password' name="password">
        <select name="typeuser" style=" width: 100%;  background: #e6f4fa; height: 50px; margin-bottom: 15px; border-radius: 5px; ">
            <option required>---------------------------- Type User --------------------------------</option>
            <option value="Admin">Admin</option>
            <option value="Petugas">Petugas</option>
        </select>
      <a href='#'></a>
      <button name='masuk'>CREATE</button>
      <a href='index.php'>Back</a>
      </form>
    </section>
  </body>      
</html>