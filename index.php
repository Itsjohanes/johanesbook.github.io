<?php 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Bookshelf Apps</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header class="head_bar">
      <h1 class="head_bar__title">Bookshelf Apps</h1>
    </header>
    <main>
      <section class="input_section">
        <h2>Masukkan Buku Baru</h2>
        <form id="inputBook">
          <div class="input">
            <label for="inputBookTitle">Judul</label>
            <input id="inputBookTitle" type="text" required />
          </div>
          <div class="input">
            <label for="inputBookAuthor">Penulis</label>
            <input id="inputBookAuthor" type="text" required />
          </div>
          <div class="input">
            <label for="inputBookYear">Tahun</label>
            <input id="inputBookYear" type="number" required />
          </div>
          <div class="input_inline">
            <label for="inputBookIsComplete">Selesai dibaca</label>
            <input id="inputBookIsComplete" type="checkbox" />
          </div>
          <button id="bookSubmit" type="submit" value="Submit" name="Submit">
            Masukkan Buku ke rak
          </button>
        </form>
      </section>

      <section class="book_shelf">
        <h2>Belum selesai dibaca</h2>

        <div id="incompleteBookshelfList" class="book_list">
          <article class="book_item">
            <h3></h3>

            <p></p>
            <p></p>

            <div class="action">
              <!--    <button class="green">Selesai dibaca</button>-->
              <!--
              <button class="red">Hapus buku</button>-->
            </div>
          </article>
        </div>
      </section>

      <section class="book_shelf">
        <h2>Selesai dibaca</h2>

        <div id="completeBookshelfList" class="book_list">
          <article class="book_item">
            <h3></h3>

            <p></p>

            <p></p>

            <div class="action">
              <!--  <button class="green">Belum selesai di Baca</button> -->
              <!-- <button class="red">Hapus buku</button> -->
            </div>
          </article>
        </div>
      </section>
    </main>
    <script src="js/main.js"></script>

  </body>
</html>
