<div class="mySlides fade">
  <div class="news-container">
    <div class="row">
      <div class="col-3">
        <div class="timeline-column">
          <h1>News Archive</h1>
          <div class="archive-panel">
            <ul class='date-list'>
            <?php include 'php/Updates/FetchArchiveTable.php' ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-9">
        <div class="news-column">
          <h1>News & Events</h1>
          <div class="news-panel">
          <?php include 'php/Updates/DisplayUpdates.php' ?>
          <?php include 'php/Updates/modal-news.php' ?>
          <div id="modal-container" class="modal-container">
            <div class='modal-content'>
              <div class='modal-header'>
                <span id="close-button" class='close-button'>&times;</span>
                <h1><?php echo $modaltitle ?></h1>
              </div>
              <div class='modal-body'>
                <p><?php echo $modalcontent ?></p>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
