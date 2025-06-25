<!-- Modal -->
    <div class="modal fade" id="exampleModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="subscribe-btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="zmdi zmdi-close s-close"></i></button>
                </div>
                <div class="modal-body">
                    <h5 id="exampleModalLabel">Email adresinizi bırakarak tüm videolardan haberdar olun...</h5>
                    <div class="create-membership-wrap modify">
                        <input placeholder="E-posta Adresiniz">
                        <button class="landing-btn-style" type="button">Hemen Başla</button> 
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="sifremiUnuttum">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="subscribe-btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="zmdi zmdi-close s-close"></i></button>
                </div>
                <div class="modal-body">
                    <h5 id="exampleModalLabel">Email adresinize yeni şifre gönderiliecek...</h5>
                    <div class="create-membership-wrap modify">
                        <form action="<?php echo base_url("sifremi-unuttum/");?>" method="post">
                        <input placeholder="E-posta Adresiniz" name="email" type="email">
                        <button class="landing-btn-style" type="submit">Şifremi Gönder</button> 
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal
    <div class="modal fade" id="giris-yap-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="subscribe-btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="zmdi zmdi-close s-close"></i></button>
                </div>
                <div class="modal-body">
                    <h5 id="exampleModalLabel">E-Posta Adresi ve Şifrenizi Giriniz</h5>
                    <div class="create-membership-wrap modify">
                        <input placeholder="E-posta Adresiniz">
                        <button class="landing-btn-style" type="button">Hemen Başla</button> 
                    </div>
                </div>
            </div>
        </div>
    </div> -->