<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Study Materials</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Student</a></li>
                    <li class="breadcrumb-item active">Study Materials</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="card">
          <div class="card-header py-2">
            <h3 class="card-title">
              Study Materials
            </h3>      
          </div>
          <div class="card-body">
            <div class="table-responsive bg-white">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Title</th>
                    <th>Attachment</th>
                    <th>Class</th>
                    <th>Subject</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                      <?php
                      //$usermeta = get_user_metadata($std_id);
                      $count = 1;
                      $query = mysqli_query($db_conn, "SELECT * FROM `posts` WHERE `type` = 'study-material' AND author = 1");
                      while ($att = mysqli_fetch_object($query)) {
                        
                          $class_id = get_metadata($att->id, 'class')[0]->meta_value;

                          $class = get_post(['id' => $class_id]);

                          $subject_id = get_metadata($att->id, 'subject')[0]->meta_value;

                          $subject = get_post(['id' => $subject_id]);


                          $file_attachment = get_metadata($att->id, 'file_attachment')[0]->meta_value;

                        //   $file_attachment = get_post(['id' => $file_attachment]);
                        //   echo '<pre>';
                        //   print_r($class);
                        //   echo '</pre>';
                          ?>
                      <tr>
                          <td><?=$count++?></td>
                          <td><?=$att->title?></td>
                          <td><a href="<?="../dist/uploads/".$file_attachment; ?>">Download File</a></td>
                          <td><?=$class->title?></td>
                          <td><?=$subject->title?></td>
                          <td><?=$att->publish_date?></td>
                          
                      </tr>

                      <?php } ?>

                    </toby>
              </table>
            </div>
          </div>
        </div>     
    </div>
</section>

<?php include('footer.php') ?>