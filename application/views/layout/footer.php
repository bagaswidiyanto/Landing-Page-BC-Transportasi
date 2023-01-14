<?php
$numberAPI = $website->phone;
$n1API = substr($numberAPI, 1);
$apiWa = $n1API;

$waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20$website->name..%21%0ASaya%20tertaik%20dengan%20penawaran%20yang%20Anda%20berikan,%0Amohon%20informasi%20lebih%20lanjut.%20Terimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
?>

<!-- Footer Start -->
<div class="container-fluid text-light footer" id="footer">
    <div class="container py-5 px-lg-5">
        <div class="row g-4 position-relative">
            <div class="col-lg-5 col-md-6">
                <div class="row align-items-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-2">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="contact-text">
                            <div class="heading-title">
                                <h5>Hubungi Kami</h5>
                            </div>
                            <p>E-mail : <?= $website->email; ?></p>
                            <p>Telp : <?= $website->phone; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-2">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="contact-text">
                            <div class="heading-title">
                                <h5>Lokasi Kami</h5>
                            </div>
                            <?= $website->address; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="link" data-aos="fade-up" data-aos-duration="1000">
                    <div class="heading-title">
                        <h5>Useful Links</h5>
                    </div>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">Tentang Kami</a></li>
                        <li><a href="#services">Layanan Kami</a></li>
                        <li><a href="#footer">Lokasi Kami</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="penawaran" data-aos="fade-up" data-aos-duration="1000">
                    <div class="heading-title mb-3">
                        <h5>Penawaran Spesial</h5>
                    </div>
                    <p>Dapatkan penawaran Khusus, untuk pengiriman-pengiriman barang Anda.</p>
                    <a href="<?= $waLink; ?>" target="_blank" class="btn py-2 px-3 rounded-2 mt-4 fw-bolder bg-green"><i
                            class="fa fa-arrow-circle-right"></i> Dapatkan
                        Penawaran</a>
                </div>
            </div>
        </div>
    </div>
    <div class="maps" data-aos="fade-up" data-aos-duration="1000">
        <div class="container px-lg-5">
            <?= $website->map; ?>
        </div>
    </div>
    <div class="container py-5 px-lg-5">
        <div class="copyright position-relative" data-aos="fade-up" data-aos-duration="1000">
            <div class="d-flex justify-content-center">
                <?php foreach ($sosmed as $s) { ?>
                <a class="btn btn-outline-light btn-social" href="<?= $s->link; ?>" target="_blank"
                    title="<?= $s->name; ?>"><i class="fa <?= $s->icon; ?>"></i></a>
                <?php } ?>
            </div>
            <div class="row d-flex justify-content-center  text-center mt-4">
                <div class="col-xl-5 col-lg-6 col-md-7 col-sm-9 col-12">
                    <p>Copyright © 2022 - <a href="https://progimedia.com/">PROGIMEDIA</a> All Rights Reserved. Powered
                        by <a href="https://digitalindo.co.id/">Digitalindo</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up "></i></a>

<?php
date_default_timezone_set('ASIA/JAKARTA');
$curr_time     = date('H:i:s');
?>
<div class="whatsapp-chat-section">
    <div class="icon-section">
        <img src="<?= base_url(); ?>assets/whatsapp/ic_whatsapp.png" id="whatsapp_chat" onclick="chatWhatsApp();">
    </div>
    <div id="whatsapp-chat-popup" class="animate__animated animate__bounceOutDown"
        style="z-index: 999999; display: none;">
        <div id="list-chat-section" class="list-chat-section animate__animated animate__fadeIn" style="display: block;">
            <div class="header-section" style="background:  #00FF02">
                <img class="close-chat-section" src="<?= base_url(); ?>assets/whatsapp/ic_close_btn.png"
                    onclick="closechatWhatsApp();">
                <div class="header-avatar-section">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa order by id asc")->result() as $sec1) { ?>
                    <div class="avatar">
                        <img class="avatar"
                            style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;"
                            src="https://admin103.bctransportasi.com/upload/wa_image/<?= $sec1->image; ?>">
                    </div>
                    <? } ?>
                </div>
                <div class="header-desc-section" style="margin-top: 15px;">
                    <p>Kami siap membantu Anda, Silahkan chat dengan customer service kami. </p>
                </div>
            </div>
            <div class="chat-section">
                <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa")->result() as $sec2) { ?>
                <div class="cs-section" onclick="chatCustomer(<?= $sec2->id; ?>);">
                    <div class="avatar">
                        <img class="avatar"
                            src="https://admin103.bctransportasi.com/upload/wa_image/<?= $sec2->image; ?>">
                    </div>
                    <div class="profile">
                        <p class="position">Customer Service </p>
                        <h3 class="name"><?= strtoupper($sec2->nama); ?></h3>
                        <?php if (($curr_time >= $sec2->startOnline) && ($curr_time < $sec2->endOnline)) { ?>
                        <small class="status">Online <span class="online"><i class="fa fa-circle "></i></span>
                        </small>
                        <? } else { ?>
                        <small class="status">Offline <span class="offline"><i class="fa fa-circle "></i></span>
                        </small>
                        <? } ?>
                    </div>
                </div>
                <? } ?>
            </div>
        </div>
        <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa")->result() as $sec3) { ?>
        <div class="chat-section animate__animated animate__fadeIn" id="customer_chat_<?= $sec3->id; ?>"
            style="display: none;">
            <div class="header-section" style="background: #00FF02">
                <img class="back-chat-section" src="<?= base_url(); ?>assets/whatsapp/ic_back_btn.png"
                    onclick="backListChat(<?= $sec3->id; ?>);">
                <div class="header-avatar-section">
                    <div class="avatar">
                        <img class="avatar"
                            style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;"
                            src="https://admin103.bctransportasi.com/upload/wa_image/<?= $sec3->image; ?>">
                    </div>
                </div>
                <div class="header-desc-section">
                    <h3><?= $sec3->nama; ?></h3>
                    <?php
                        $phone_split = implode(" ", str_split('+62' . $sec3->phone, 4)) . " ";
                        ?>
                    <p><i class="fa fa-phone"></i> <?php echo $phone_split; ?></p>
                </div>
            </div>
            <div class="inside-chat-section">
                <div class="chat">
                    <div class="inside-chat">
                        <span>Halo saya <?= ucwords(strtolower($sec3->nama)); ?>, dari <?= $website->name; ?></span>
                    </div>
                    <div class="time">
                        <span><?php echo date('H:i'); ?><img
                                src="<?= base_url(); ?>assets/whatsapp/ic_check_wa.png"></span>
                    </div>
                </div>
                <div class="chat">
                    <div class="inside-chat">
                        <span>Ada yang bisa saya bantu ?</span>
                    </div>
                    <div class="time">
                        <span><?php echo date('H:i'); ?><img
                                src="<?= base_url(); ?>assets/whatsapp/ic_check_wa.png"></span>
                    </div>
                </div>
            </div>
            <div class="box-chat-section">
                <div class="text">
                    <input type="hidden" id="telp_wa_<?= $sec3->id; ?>" name="telp_wa_<?= $sec3->id; ?>"
                        value="<?= $sec3->phone; ?>">
                    <input type="text" class="input-message-whatsapp" id="chat_wa_<?= $sec3->id; ?>"
                        name="chat_wa_<?= $sec3->id; ?>" onchange="textChatWhatsapp(<?= $sec3->id; ?>);"
                        onclick="textChatWhatsapp(<?= $sec3->id; ?>);"
                        onmouseover="textChatWhatsapp(<?= $sec3->id; ?>);"
                        onmouseout="textChatWhatsapp(<?= $sec3->id; ?>);"
                        onkeydown="textChatWhatsapp(<?= $sec3->id; ?>);" value="" placeholder="Type a message">
                </div>
                <div class="button-send">
                    <a href="" id="btn_wa_<?= $sec3->id; ?>" target="_blank"><img
                            src="<?= base_url(); ?>assets/whatsapp/ic_send_message.png"></a>
                </div>
            </div>
        </div>
        <? } ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="<?= base_url(); ?>assets/lib/wow/wow.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/easing/easing.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/waypoints/waypoints.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/counterup/counterup.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/glightbox/js/glightbox.min.js"></script>

<!-- Template Javascript -->
<script src="<?= base_url(); ?>assets/js/swiper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/main.js"></script>


<script type="text/javascript">
function chatWhatsApp() {
    var cek_class = document.getElementById('whatsapp-chat-popup');
    if (cek_class.classList.contains('animate__bounceOutDown')) {
        cek_class.classList.remove("animate__bounceOutDown");
        cek_class.classList.add("animate__bounceInUp");
        cek_class.style.display = "block";
    } else {
        cek_class.classList.remove("animate__bounceInUp");
        cek_class.classList.add("animate__bounceOutDown");
    }
}

function chatCustomer(id) {
    var list_chat = document.getElementById("list-chat-section");
    var chat = document.getElementById('customer_chat_' + id);

    if (id != 0 && id != '') {
        list_chat.style.display = "none";
        chat.style.display = "block";
    }
}

function closechatWhatsApp() {
    var cek_class = document.getElementById('whatsapp-chat-popup');
    if (cek_class.classList.contains('animate__bounceInUp')) {
        cek_class.classList.remove("animate__bounceInUp");
        cek_class.classList.add("animate__bounceOutDown");
    }
}


function backListChat(id) {
    var list_chat = document.getElementById("list-chat-section");
    var chat = document.getElementById('customer_chat_' + id);
    if (id != 0 && id != '') {
        chat.style.display = "none";
        list_chat.style.display = "block";
        $("#chat_wa_" + id).val('');
    }
}


function textChatWhatsapp(id) {
    var link_wa = 'https://api.whatsapp.com/send?';
    if (id != 0 && id != '') {
        var telp = $("#telp_wa_" + id).val();
        var chat = $("#chat_wa_" + id).val();
        var link = 'https://api.whatsapp.com/send?phone=62' + telp + '&text=' + chat;
        var btn = document.getElementById("btn_wa_" + id);
        btn.setAttribute("href", link);
    }
}

function myFunction() {
    var x = document.getElementById("contact");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("fa").style.transform = "rotate(90deg)";
    } else {
        x.style.display = "none";
        document.getElementById("fa").style.transform = "rotate(0)";
    }
}
</script>

</body>

</html>