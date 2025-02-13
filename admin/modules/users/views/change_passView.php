<?php get_header(); ?>

<div id="main-content-wp" class="change-pass-page">
    <div class="section" id="title-page">
        <div class="clearfix">
            <a href="?mod=users&action=create" title="" id="add-new" class="fl-left">Thêm mới</a>
            <h3 id="index" class="fl-left">Đổi mật khẩu</h3>
        </div>
    </div>
    
    <div class="wrap clearfix">
        <?php get_sidebar('user') ?>
        <div id="content" class="fl-right">
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <?php
                    set_value('success');
                    ?>
                    <form method="POST">
                        <label for="old-pass">Mật khẩu cũ</label>
                        <input type="password" name="pass-old" id="pass-old">
                        <?php form_error('pass-old'); ?>
                        <label for="new-pass">Mật khẩu mới</label>
                        <input type="password" name="pass-new" id="pass-new">
                        <?php form_error('pass-new'); ?>
                        <label for="confirm-pass">Xác nhận mật khẩu</label>
                        <input type="password" name="confirm-pass" id="confirm-pass">
                        <?php form_error('confirm-pass'); ?>
                        <button type="submit" name="btn-change-pass" id="btn-submit">Cập nhật</button>
                        
                    </form>
                    <!-- <button onclick="showSuccessToast();" class="btn btn--success">Show success toast</button> -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>