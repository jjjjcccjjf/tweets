<!DOCTYPE html>
<html lang="en">
@include('shared.head')
<body>
  <div class="flex-center position-ref full-height">
    <div class="center top-heading">
      <h1>Sometimes I tweet stuff about you 😊😚😘😋</h1>
    </div>
    <section id="pinBoot">
      <?php foreach ($html_tweets as $key => $value): ?>
        <article class="white-panel">
          <?= $value;?>
        </article>
      <?php endforeach; ?>
    </section>
  </div>
  @include('shared.scripts')
</body>
</html>
