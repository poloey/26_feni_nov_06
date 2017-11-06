<?php require 'partials/header.php'; ?>
    <div class="container">
      <h1>Contact us</h1>
      <form action="" class="form">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="message">Your message</label>
          <textarea name="message" id="message" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <button class="btn btn-primary">Contact us</button>
        </div>
      </form>
    </div>

<?php require 'partials/footer.php'; ?>