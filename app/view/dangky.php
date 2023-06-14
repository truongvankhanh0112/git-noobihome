<style>
    .layout-account>.container{
       width: 1000px;
       text-align: center;
    }
    .large_form input{
        width: 50%;
        height: 60px;
        padding: 10px;
        background-color: #ededed;
        outline: none;
        border: 0px;
        cursor: pointer;
        margin: 10px 0px;
    }
    #field-gender input{
        width: 20px;
        margin: 0px 10px;
        padding: 10px 0px;
        cursor: pointer;
        height: 20px;
    }
    .btn {
    display: inline-block;
    border-radius: 0;
    padding: 0 30px;
    height: 45px;
    line-height: 45px;
    text-transform: uppercase;
    font-weight: 600;
    background: #a0816c;
    cursor: pointer;
    border: 0;
    color: #fff;
    font-size: 14px;
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    -o-appearance: none;
    appearance: none;
}
</style>
<main class="wrapperMain_content">	
    <div class="layout-account">
        <div class="container">
            <div class="wrapbox-heading-account">
                <div class="header-page clearfix"><br><br>
                    <h1>Tạo tài khoản</h1>
                </div>
            </div>
            <div class="wrapbox-content-account ">
            <?php
                        if (!empty($_GET['msg'])) {
                            $msg = unserialize(urldecode($_GET['msg']));
                            foreach ($msg as $key => $value) {
                    ?>
                    <div class="alert text-danger alert-dismissible show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong><?php echo "$value";?>!</strong>
                    </div>
                    <?php 
                            }
                        }
                    ?>
                <div class="userbox customers_accountForm">
                    <form accept-charset="UTF-8" action="<?php echo BASE_URL?>login/inserttk" id="create_customer" method="post">
                    <input name="form_type" type="hidden" value="create_customer">
                    <input name="utf8" type="hidden" value="✓">
                    <div id="field-lastname" class="clearfix large_form">
                        <label for="last_name" class="label icon-field"><i class="icon-login icon-user "></i></label>
                        <input required="" type="text" value="" name="hoten" placeholder="Họ Tên" id="last_name" class="text" size="30">
                    </div>
                    <div id="field-gender" class="clearfix">
                        <input id="radio1" type="radio" value="0" name="gioitinh"> 
                        <label for="radio1">Nữ</label>
                        <input id="radio2" type="radio" value="1" name="gioitinh"> 
                        <label for="radio2">Nam</label>
                    </div>
                    <div id="field-email" class="clearfix large_form">
                        <label for="sdt" class="label icon-field"><i class="icon-login icon-envelope "></i></label>
                        <input required="" type="tel" value="" placeholder="Số điện thoại" name="sdt" class="text" size="10">
                    </div>
                    <div id="field-email" class="clearfix large_form">
                        <label for="email" class="label icon-field"><i class="icon-login icon-envelope "></i></label>
                        <input required="" type="email" value="" placeholder="Email" name="email" id="email" class="text" size="30">
                    </div>
                    <div id="field-password" class="clearfix large_form large_form-mrb">
                        <label for="password" class="label icon-field"><i class="icon-login icon-shield "></i></label>
                        <input required="" type="password" value="" placeholder="Mật khẩu" name="pass" id="password" class="password text" size="30">
                    </div>
                    <div class="clearfix custommer_account_action">
                        <div class=""><br>
                            <input class="btn" type="submit" value="Đăng ký">			
                        </div>						
                    </div>
                    <div class="clearfix req_pass"><br>
                        <a class="come-back" href="<?php echo BASE_URL?>"><i class="fa fa-long-arrow-left"></i> Quay lại trang chủ</a>
                    </div>
                    <input id="7ae1453affd145db9276e00cf29e28ba" name="g-recaptcha-response" type="hidden" value="03AKH6MRFAj9yNeVllJMuPYhMjc1-U2HIrvsrWB1Q3qtHsScoAmC2Eh6mH6ZUyxzsuqsP4O_AdQml5-y7-FFeuLqb_shQax1AY9XzJvj7mM5d6VOVFhFsu6a7_OiBaOe_3DPDYMDiWjgP_SULYuZ9OLHp5MRBJ9dkeneUJMbkV79TUcu_tVT6VNAwRM8qiK3cuuZfGtAkMTBlz44fMqkJW8j2FHLyMG_Yg292VtDljp_lUOAaOzUeYZT5BBczKe6rA5usviBAwejq4bQdrETy4PbFeDegFJW6TL_pGkhXfGlIDhrCzZOOpkTmkhFQ29qOjDhvhVWUM0YSvqpyN0k7SRnU4LnMya6NmTsYqjbSrUcoyhKtAUOYI3QubzBN-lQatA1DjJ5zgkhfP7zGe3XIutpfk8DkafLXBz3cHSUbnrXdxNBXBiL860Ww6WNew3N-m-UNYpvz8IxXaqIztrw2iMelmKK2Gk-HzRuLfAgAwJOzIXPBkeC1ACvjsKPFS7OiIzLLdrIjMBHMlZjkl2nA1nsJK0LtvsFE5IGJulHfV_aUdeRsI73FiTnO4397FO_HYkGlwC2_ufug2"><script src="https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-"></script><script>grecaptcha.ready(function() {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {document.getElementById('7ae1453affd145db9276e00cf29e28ba').value = token;});});</script>
                </form>
                </div>
            </div>
            <!-- #register -->
            <!-- #customer-register -->
        </div>
    </div>		
</main>
