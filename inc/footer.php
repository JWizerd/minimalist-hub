<footer class="footer">
    <button class="fa fa-plus-circle add-widget"></button>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 text-center widget-form-wrapper">
          <h2>Add a New RSS Feed</h2>
          <form action="<? $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="url" placeholder="Enter URL to RSS Feed">
              <input type="submit" class="btn-success form-control" name="add_webscraper_widget" value="Add Widget">
            </div>
          </form>
        </div>
      </div>
    </div>
</footer>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>