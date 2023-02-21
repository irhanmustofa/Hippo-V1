<?php
    if (isset($_GET['url'])) {
        $url = $_GET['url'];
    
        switch($url){
            case 'home';
            include 'pages/home/home.php';
            break;

            case 'tax-service';
            include 'pages/service/service-tax.php';
            break;

            case 'acc-service';
            include 'pages/service/service-acc.php';
            break;

            case 'legal-service';
            include 'pages/service/service-legal.php';
            break;

            case 'service-detail';
            include 'pages/service/service-detail.php';
            break;

            case 'checkout';
            include 'pages/service/checkout.php';
            break;

            case 'logout';
            include 'pages/profile/forget-password.php';
            break;

            case 'task';
            include 'pages/profile/task/task.php';
            break;

            case 'task-detail';
            include 'pages/profile/task/task-detail.php';
            break;

            case 'tagihan';
            include 'pages/profile/tagihan/tagihan.php';
            break;

            case 'tagihan-detail';
            include 'pages/profile/tagihan/tagihan-detail.php';
            break;

            case 'konfirmasi-pembayaran';
            include 'pages/profile/tagihan/konfirmasi_pembayaran.php';
            break;

            case 'cetak-tagihan';
            include 'pages/profile/tagihan/cetak_tagihan.php';
            break;

            case 'notifikasi';
            include 'pages/profile/notifikasi/notifikasi.php';
            break;

            case 'notifikasi-detail';
            include 'pages/profile/notifikasi/notifikasi-detail.php';
            break;

            case 'chat_cs';
            include 'pages/chat/chat-cs.php';
            break;

            case 'profile';
            include 'pages/profile/profile.php';
            break;

            case 'avatar';
            include 'pages/profile/foto-upload.php';
            break;

            case 'personal_list';
            include 'pages/personal/list.php';
            break;

            case 'pencatatan';
            include 'pages/personal/report_pencatatan.php';
            break;

            case 'cashflow';
            include 'pages/personal/report_cashflow.php';
            break;

            case 'dokumen';
            include 'pages/personal/dokumen.php';
            break;

            case 'bukti_pembayaran';
            include 'pages/personal/bukti_pembayaran.php';
            break;

            case 'spt_tahunan';
            include 'pages/personal/spt_tahunan.php';
            break;

            case 'sp2dk_pemeriksaan';
            include 'pages/personal/sp2dk_pemeriksaan.php';
            break;

            case 'bukti_potong';
            include 'pages/personal/bukti_potong.php';
            break;

            case 'company_list';
            include 'pages/company/list.php';
            break;

            case 'chat_users';
            include 'pages/chat/chat-users.php';
            break;

            case 'chat';
            include 'pages/chat/chat.php';
            break;

            case 'news';
            include 'pages/news/news.php';
            break;

            case 'news_detail1';
            include 'pages/news/news-details1.php';
            break;

            case 'news_detail2';
            include 'pages/news/news-details2.php';
            break;

            case 'news_detail3';
            include 'pages/news/news-details3.php';
            break;

            case 'news_detail4';
            include 'pages/news/news-details4.php';
            break;

            case 'news_detail5';
            include 'pages/news/news-details5.php';
            break;

            case 'news_detail6';
            include 'pages/news/news-details6.php';
            break;

            case 'list-harta';
            include 'pages/personal/list_harta.php';
            break;

            case 'report_harta';
            include 'pages/report/report_harta.php';
            break;
            
            case 'report_hutang';
            include 'pages/report/report_hutang.php';
            break;

            case 'perubahan';
            include 'pages/report/request_perubahan.php';
            break;

            case 'order-spt';
            include 'pages/report/order_spt.php';
            break;

            case 'report_pencatatan';
            include 'pages/report/report_pencatatan.php';
            break;

            default:
            include 'pages/home/home.php';
            break;
        }
    }
?>