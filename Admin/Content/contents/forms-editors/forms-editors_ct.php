<?php
if(!isset($_SESSION['login']))
{
    header("location:{$level}pages/page-login.php");
}
?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Editors</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo $level?>index.php">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Editors</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-6">
      <?php
        $section = array(
          array(
            'title' => 'Full',
            'class_name' => 'full'
          )          
          );
          foreach($section as $sect):      
      ?>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Quill Editor <?php echo $sect['title']?></h5>

          <!-- Quill Editor Default -->
          <div class="quill-editor-<?php echo $sect['class_name']?>">
            <p>Hello World!</p>
            <p>This is Quill <strong><?php echo $sect['class_name']?></strong> editor</p>
          </div>
          <!-- End Quill Editor Default -->

        </div>
      </div>
      <?php endforeach;?>      

    </div>

    
  </div>
</section>

</main>