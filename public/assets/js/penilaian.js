

function kecekapan() {
		
    // Kecekapan Teras Calculation
    var kepimpinan_penyelia = document.getElementById('kepimpinan-penyelia').value;
    var keupayaan_penyelia = document.getElementById('keupayaan-penyelia').value;
    var	pengurusan_penyelia = document.getElementById('pengurusan-penyelia').value;
    var berkepentingan_penyelia = document.getElementById('berkepentingan-penyelia').value;
    var ketangkasan_penyelia = document.getElementById('ketangkasan-penyelia').value;
    var kecekapan_teras = document.getElementById('kecekapan_teras');

    if (kepimpinan_penyelia) {

        total_one= ((kepimpinan_penyelia/4) * 20);

        var simpan = document.getElementsByName("skor_kepimpinan")[0].value = total_one + "%"; 
        // console.log(simpan);

    } 

    if (keupayaan_penyelia) {

        total_two = ((keupayaan_penyelia/4) * 20);

        var simpan = document.getElementsByName("skor_keupayaan")[0].value = total_two + "%"; 
        // console.log(simpan);
    }

    if (pengurusan_penyelia) {

        total_three = ((pengurusan_penyelia/4) * 20);

        var simpan = document.getElementsByName("skor_pengurusan")[0].value = total_three + "%"; 
        // console.log(simpan)
    }

    if (berkepentingan_penyelia) {

        total_fourth = ((berkepentingan_penyelia/4) * 20);

        var simpan = document.getElementsByName("skor_berkepentingan")[0].value = total_fourth + "%"; 
        // console.log(simpan)
    }


    if (ketangkasan_penyelia) {

        total_fifth = ((ketangkasan_penyelia/4) * 20);

        var simpan = document.getElementsByName("skor_ketangkasan")[0].value = total_fifth + "%"; 
        // console.log(simpan)
    }
    
    skor_kecekapan = parseInt(total_one + total_two + total_three + total_fourth + total_fifth);
    kecekapan_teras.innerHTML = skor_kecekapan + " %";
    document.getElementsByName("kecekapan_teras")[0].value = skor_kecekapan + "%";

     // Score Color Control
     score_color = document.getElementById("status_teras");
     score_color.style.backgroundColor = "";

     // Status Control
     status_control = document.getElementById("status_teras");
     status_control.innerHTML = "";
     

        // Level Color Class
        if ( skor_kecekapan >= 80 ) {

            score_color.style.backgroundColor = "#9BC2E6";
            // status_control.innerHTML = "PLATINUM";
            document.getElementsByName("status_teras")[0].value = "PLATINUM";

        } else if ( skor_kecekapan >= 75 && skor_kecekapan <= 79 ) {

            score_color.style.backgroundColor = "#C6E0B4";
            // status_control.innerHTML = "HIGH GOLD";
            document.getElementsByName("status_teras")[0].value = "HIGH GOLD";

        } else if ( skor_kecekapan >= 70 && skor_kecekapan <= 74.9 ) {

            score_color.style.backgroundColor = "#548235";
            // status_control.innerHTML = "MID GOLD";
            document.getElementsByName("status_teras")[0].value = "MID GOLD";


        } else if ( skor_kecekapan >= 65 && skor_kecekapan <= 69.9 ) {

            score_color.style.backgroundColor = "#806000";
            // status_control.innerHTML = "LOW GOLD";
            document.getElementsByName("status_teras")[0].value = "LOW GOLD";

        } else if ( skor_kecekapan >= 60 && skor_kecekapan <= 64.9 ) {

            score_color.style.backgroundColor = "#FFFF99";
            // status_control.innerHTML = "HIGH SILVER";
            document.getElementsByName("status_teras")[0].value = "HIGH SILVER";

        } else if ( skor_kecekapan >= 50 && skor_kecekapan <= 59.9 ) {

            score_color.style.backgroundColor = "#FFFF00";
            // status_control.innerHTML = "LOW SILVER";
            document.getElementsByName("status_teras")[0].value = "LOW SILVER";

        } else if ( skor_kecekapan >= 1 && skor_kecekapan <= 49.9 ) {

            score_color.style.backgroundColor = "#F4B084";
            // status_control.innerHTML = "BRONZE";
            document.getElementsByName("status_teras")[0].value = "BRONZE";

        } else {

            
            document.getElementsByName("status_teras")[0].value = "NO GRED";
        
        }

}




function nilai() {
    
    // Kecekapan Teras Calculation
    var kepimpinan_penyelia = document.getElementById('kepimpinan-nilai-penyelia').value;
    var perkembangan_penyelia = document.getElementById('perkembangan-penyelia').value;
    var	keputusan_penyelia = document.getElementById('keputusan-penyelia').value;
    var sumbangan_penyelia = document.getElementById('sumbangan-penyelia').value;
    var rohani_penyelia = document.getElementById('rohani-penyelia').value;
    var nilai_teras = document.getElementById('nilai_teras');

    if (kepimpinan_penyelia) {

        total_one= ((kepimpinan_penyelia/4) * 20);

        var simpan = document.getElementsByName("skor_kepimpinan_nilai")[0].value = total_one + "%"; 

    } 

    if (perkembangan_penyelia) {

        total_two = ((perkembangan_penyelia/4) * 20);

        var simpan = document.getElementsByName("skor_perkembangan")[0].value = total_two + "%"; 
        
        
    }

    if (keputusan_penyelia) {

        total_three = ((keputusan_penyelia/4) * 20);

        var simpan = document.getElementsByName("skor_keputusan")[0].value = total_three + "%"; 
    }

    if (sumbangan_penyelia) {

        total_fourth = ((sumbangan_penyelia/4) * 20);

        var simpan = document.getElementsByName("skor_sumbangan")[0].value = total_fourth + "%"; 
    }


    if (rohani_penyelia) {

        total_fifth = ((rohani_penyelia/4) * 20);

        var simpan = document.getElementsByName("skor_rohani")[0].value = total_fifth + "%"; 
    }
    
    skor_nilai = parseInt(total_one + total_two + total_three + total_fourth + total_fifth);
    nilai_teras.innerHTML = skor_nilai + " %";
    document.getElementsByName("nilai_teras")[0].value = skor_nilai + "%";

    console.log(skor_nilai);
     // Score Color Control
     score_color = document.getElementById("status_nilai");
     score_color.style.backgroundColor = "";

     // Status Control
     status_control = document.getElementById("status_nilai");
     status_control.innerHTML = "";

        // Level Color Class
        if ( skor_nilai >= 80 ) {

            score_color.style.backgroundColor = "#9BC2E6";
            // status_control.innerHTML = "PLATINUM";
            document.getElementsByName("status_nilai")[0].value = "PLATINUM";


        } else if ( skor_nilai >= 75 && skor_nilai <= 79 ) {

            score_color.style.backgroundColor = "#C6E0B4";
            // status_control.innerHTML = "HIGH GOLD";
            document.getElementsByName("status_nilai")[0].value = "HIGH GOLD";

        } else if ( skor_nilai >= 70 && skor_nilai <= 74.9 ) {

            score_color.style.backgroundColor = "#548235";
            // status_control.innerHTML = "MID GOLD";
            document.getElementsByName("status_nilai")[0].value = "MID GOLD";


        } else if ( skor_nilai >= 65 && skor_nilai <= 69.9 ) {

            score_color.style.backgroundColor = "#806000";
            // status_control.innerHTML = "LOW GOLD";
            document.getElementsByName("status_nilai")[0].value = "LOW GOLD";

        } else if ( skor_nilai >= 60 && skor_nilai <= 64.9 ) {

            score_color.style.backgroundColor = "#FFFF99";
            // status_control.innerHTML = "HIGH SILVER";
            document.getElementsByName("status_nilai")[0].value = "HIGH SILVER";

        } else if ( skor_nilai >= 50 && skor_nilai <= 59.9 ) {

            score_color.style.backgroundColor = "#FFFF00";
            // status_control.innerHTML = "LOW SILVER";
            document.getElementsByName("status_nilai")[0].value = "LOW SILVER";

        } else if ( skor_nilai >= 1 && skor_nilai <= 49.9 ) {

            score_color.style.backgroundColor = "#F4B084";
            // status_control.innerHTML = "BRONZE";
            document.getElementsByName("status_nilai")[0].value = "BRONZE";

        } else {

            status_control.innerHTML = "NO GRED";
            document.getElementsByName("status_nilai")[0].value = "NO GRED";
        
        }

}

