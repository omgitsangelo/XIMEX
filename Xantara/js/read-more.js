var updates_title = <?php echo json_encode($title) ?>;
var updates_content = <?php echo json_encode($content) ?>;
var updates_id = <?php echo json_encode($id) ?>;


document.getElementsByClassName('.read-more').onclick = function() {readmore()};

function readmore() {
  document.write("<?php include 'php/Updates/FetchFullNews.php?UpdatesID=$UpdatesID'; ?>");
}
