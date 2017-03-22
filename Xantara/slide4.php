<div class="mySlides fade">
  <div class="news-container">
    <div class="row">
      <div class="col-6">
        <div class="news-column">
          <h1>News & Events</h1>
          <div class="news-panel">
          <?php include 'php/Updates/DisplayUpdates.php' ?>
          </div>
        </div>
      </div>
      <div class="col-6">
        <script>
        document.getElementsByClassName('.read-more').onclick = function() {readmore()};

        function readmore() {
          document.write("<?php include 'php/Updates/FetchFullNews.php?UpdatesID=$UpdatesID'; ?>");
        }
        </script>
        <?php include 'php/Updates/FetchFullNews.php'; ?>
      </div>
    </div>
  </div>
</div>
