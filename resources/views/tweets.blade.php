<!DOCTYPE html>
<html lang="en">
@include('shared.head')
<body>
  <div class="flex-center position-ref full-height" style="padding-bottom:50px;">
    <div class="center top-heading">
            @include('shared.header')
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
