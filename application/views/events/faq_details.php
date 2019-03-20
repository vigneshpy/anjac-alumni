<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>


    <link rel="stylesheet" href="<?php echo base_url();?>assets/css1/faq.css">
  </head>
  <body>
    <div class="container">

  <h1 class="h1-responsive text-center" style="padding:5px;margin-top:10px;">Getting started</h1>

  <div class="accordion">
    <div class="accordion-item">
      <a>Why is the moon sometimes out during the day?</a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Why is the sky blue?</a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Will we ever discover aliens?</a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>How much does the Earth weigh?</a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>How do airplanes stay up?</a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
  </div>

</div>
  <script type="text/javascript">
    const items = document.querySelectorAll(".accordion a");
    function toggleAccordion(){
    this.classList.toggle('active');
    this.nextElementSibling.classList.toggle('active');
    }
    items.forEach(item => item.addEventListener('click', toggleAccordion));
  </script>



  </body>
</html>
