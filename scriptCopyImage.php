<?php
$img = [
"button_camera.png",
 "back.png",
 "bg_success.png",
 "camera.png",
 "checked_confirm.png",
 "checked.png",
 "doc.png",
 "dummy_avatar.png",
 "home-header.png",
 "high_priority.png",
 "logo.png",
 "icon-invisible.png",
 "icon-visible.png",
 "ico_search3.png",
 "ico_contact_form.png",
 "ic_alert_biasa.png",
 "ic_alert.png",
 "ico-power.png",
 "ic_clip.png",
 "ic_share.png",
 "ic_trash.png",
 "ic_delete.png",
 "ic_download.png",
 "ic_book.png",
 "ic_add.png",
 "ic_calendar.png",
 "ic_notes.png",
 "ic_info_purple.png",
 "internet.png",
 "ico-bell-white-unread.png",
 "ico-filter-white.png",
 "ico-gear-white.png",
 "ico-project.png",
 "ico-attendance.png",
 "ico-laporan.png",
 "ico-approve.png",
 "ico-pencil.png",
 "ico-lock.png",
 "ico-status.png",
 "ico-megaphone-white.png",
 "ico-meeting.png",
 "ico-report.png",
 "ico_request.png",
 "fingerprint_white.png",
 "landing_img.jpg",
 "logo_shadow.png",
 "qr_box.png",
 "qr_top_left.png",
 "qr_top_right.png",
 "qr_bottom_left.png",
 "qr_bottom_right.png",
 "route_vector.jpg"
];

sort($img);
$filePath = 'D:\\personal\\porto\\android\\RnEbis\\app\assets'."\\";
for ($i=0; $i <count($img) ; $i++) { 
    $imgName = $filePath.$img[$i];
    if (file_exists($imgName)) {
        $fileToCopy = 'D:/personal/porto/android/RnEbis/app/assets/'.$img[$i];
        $destinationDirectory = 'D:/project/mobile/RnEbis073/app/assets/';
       
        if (copy($fileToCopy, $destinationDirectory . basename($fileToCopy))) {
            echo 'File copied successfully '. $img[$i]."\n";
        }else{
            echo 'failted coppy .'.$img[$i]."\n";
        }
       
    } else {
        echo 'The file does not exist. '.$img[$i]."\n";
    }

}

?>