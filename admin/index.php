<?php
    include_once "inc/header.php";
    

?>
                  <div class="container-fluid page__heading-container">
                     <div class="page__heading d-flex align-items-end">
                        <div class="flex">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb mb-0">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                              </ol>
                           </nav>
                           <h1 class="m-0">Dashboard</h1>
                        </div>
                        <div class="flatpickr-wrapper ml-3">
                           <div id="recent_orders_date" data-toggle="flatpickr" data-flatpickr-wrap="true" data-flatpickr-mode="range" data-flatpickr-alt-format="d/m/Y" data-flatpickr-date-format="d/m/Y">
                              <a href="javascript:void(0)" class="link-date" data-toggle>15/11/2022 to 24/11/2022</a>
                              <input class="flatpickr-hidden-input" type="hidden" value="15/11/2022 to 24/11/2022" data-input>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="container-fluid page__container">
                 



                  </div>
<?php
    include "inc/footer.php";
?>