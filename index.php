<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style1.css?<?php echo filemtime("style1.css"); ?>" />
  </head>
  <body>
  <div class="container-fluid">
    <div class="row mt-3">
        <div class="col-12 col-md-3">
            <div class="card roundCorder smallCard">
                <div class="card-body">
                    <button name="loadTimeTable" id="loadTimeTable" class="btn btn-primary mb-3" type="button">Load Time Table</button>
                    <input class="d-none" name="timeTable" id="timeTable" type="file">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-book" aria-hidden="true"></i></span>
                        <input name="courseCode" id="courseCode"  type="text" class="form-control" placeholder="Course Code">

                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input name="lecturerName" id="lecturerName" type="text" class="form-control" placeholder="Lecturer Name">

                    </div>

                    <button id="download" name="download" class="btn btn-secondary" type="button">Download File</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-9">
            <div class="card roundCorder largeCard">

              <div id="spinner-container" class="spinner-container text-center d-none">
                <div class="spinner-border" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
                <p class="loading-text">Processing ...</p>
              </div>


            </div>
        </div>
    </div>
</div>



    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
      integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
      integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.7.0.min.js"
      integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/c1db89cf54.js"
      crossorigin="anonymous"
    ></script>

    <?php
    include 'aeM.php';
    ?>

<script src="ae.js?version=<?php echo filemtime('ae.js'); ?>"></script>
<script src="loadTimeTable.js?version=<?php echo filemtime('loadTimeTable.js'); ?>"></script>
  </body>
</html>
