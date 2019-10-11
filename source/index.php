<?php include 'includes/header.php' ?>
<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">The Food Google.</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <p>
        <a href="review/review.php" class="btn btn-primary my-2">Review a Dish</a>
        <a href="#" class="btn btn-secondary my-2">View Menu</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
      <?php include 'review/cards.php' ?>
    </div>

      

</main>

<?php include 'includes/footer.php' ?>