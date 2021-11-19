
<section class="contact__container px-3">
  <div class="contact__content" method="post" id="contact-form-content">
    <img src="<?php echo get_template_directory_uri() ?>/images/contact.png" alt="contact" class="contact__image" />
    <form class="contact__form">
      <div class="contact__top">Chúng tôi luôn ở đây để giúp bạn</div>
      <div class="contact__mid">Liên hệ với chúng tôi</div>
      <div class="contact__title">
        Tekup cam kết mang lại dịch vụ tốt nhất nhằm giúp doanh nghiệp của
        bạn phát triển thần tốc
      </div>
      <div class="d-flex justify-content-between">
        <div class="contact__input__group me-3 w-50">
          <img src="<?php echo get_template_directory_uri() ?>/images/contact_icon_user.svg" />
          <input class="contact__input__style" type="text" placeholder="Tên cá nhân" name="user" id="user"/>
        </div>
        <div class="contact__input__group ms-3 w-50">
          <img src="<?php echo get_template_directory_uri() ?>/images/email 2.svg" />
          <input class="contact__input__style" type="email" placeholder="Email" name="email" id="email" />
        </div>
      </div>
      <div class="contact__input__group w-100">
        <img src="<?php echo get_template_directory_uri() ?>/images/type.jpg" />
        <select class="contact__input__style" name="[areas_of_concern]" id="areas_of_concern">
          <option>Lĩnh vực quan tâm</option>
          <option value="Trí tuệ nhân tạo & Tầm nhìn máy tính">Trí tuệ nhân tạo & Tầm nhìn máy tính</option>
          <option value="Phát triển ứng dụng di động và web">Phát triển ứng dụng di động và web</option>
          <option value="Tư vấn quản lý">Tư vấn quản lý</option>
        </select>
      </div>
      <div class="contact__input__group w-100">
        <img src="<?php echo get_template_directory_uri() ?>/images/note.jpg" />
        <input class="contact__input__style" type="text" placeholder="Lời nhắn" name="note" id="note" />
      </div>
      <button class="contact__btn__warning" type="submit" name="submit" id="submit">
        Gửi tin nhắn
      </button>
    </form>
  </div>
</section>