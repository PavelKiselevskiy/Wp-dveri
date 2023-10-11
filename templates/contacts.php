<?php 
/* 
Template Name: Контакты
*/
get_header(); 
?>
  <div class="our-contacts">
    <div class="container">
      <div class="row">
        <div class="col-9 col-lg-12">
        <?php 
              $loop = CFS()->get('contacts_branches');
              foreach ($loop as $row) {
                ?>
            <div class="contacts-block">
                  <h2><?= $row['contact_title']; ?></h2>
                  <div class="contacts-inner">
                    <div class="contacts-card">
                      <img src="<?= CFS()-> get('contact_message_img'); ?>" alt="пишите">
                      <h3><?= CFS()-> get('contact_message'); ?></h3>
                      <p><?= $row['branches_email']; ?></p>
                    </div>
                    <div class="contacts-card">
                      <img src="<?= CFS()-> get('contact_call_img'); ?>" alt="звоните">
                      <h3><?= CFS()-> get('contact_call'); ?></h3>
                      <p><?= $row['branches_phone']; ?></p>
                    </div>
                    <div class="contacts-card">
                      <img src="<?= CFS()-> get('contact_address_img'); ?>" alt="приезжайте">
                      <h3><?= CFS()-> get('contact_address'); ?></h3>
                      <p><?= $row['branches_address']; ?></p>
                    </div>
                  </div>
                  <?= $row['branches_map']; ?>     
            </div>
                <?php
              }
            ?>
        </div>
        <div class="col-3 col-lg-12" id="cities">
          <h2><?= CFS()-> get('dealers_title'); ?></h2>
          <input type="text" class="search" placeholder="Поиск">
          <ul class="list">
          <?php 
              $loop = CFS()->get('dealers');
              foreach ($loop as $row) {
                ?>
                  <li><p class="city"><?= $row['dealers_address']; ?> </p></li>     
                <?php
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Футер -->
<?php get_footer(); ?>