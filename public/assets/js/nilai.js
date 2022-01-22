
    // console.log('johnn');
    const perColorUI = document.getElementById('grade');
    const perValidUI = document.getElementById('percentage-weightage');
    
    function masterClac() {
    
      // let peratus = 20; 
      // console.log(peratus);
      let skor_penyelia = Number(document.getElementById('skor_penyelia').value); 
        // console.log(skor_penyelia);
      // let skor_penyelia = Number(document.getElementById('skor_penyelia').value); 
      // console.log(skor_pekerja);
    
      // let skor_KPI = 0;
      let skor_sebenar = 0;
      let total_score = 0;
    
        if ( document.getElementById('skor_penyelia').value == "" ) {
          // console.log('john');
          document.getElementById("skor_penyelia").value = "";
          
        } else {
          
          // CONDITION ONE
            if (skor_penyelia == "0") {
            // console.log("john0");
            // console.log(skor_sebenar);
            // console.log(skor_pekerja);
            skor_sebenar = document.getElementById("skor_sebenar").value = 0;
            // skor_sebenar = document.getElementById("skor_sebenar").value = 0;
            // total_score = document.getElementById("percentage-total").value = skor_sebenar;
            // console.log (document.getElementById("percentage-total").value = skor_sebenar);
            // console.log('john00');
            
    
            } else if (skor_penyelia == "1") {
            // console.log('john1');
            skor_sebenar = document.getElementById("skor_sebenar").value = 5;
            total_score = document.getElementById("percentage-total").value = skor_sebenar;
            // console.log('john10');
            
    
            } else if (skor_penyelia == "2") {
            // console.log('john2');
            skor_sebenar = document.getElementById("skor_sebenar").value = 10;
            total_score = document.getElementById("percentage-total").value = skor_sebenar;
            // console.log('john20');
           
    
          } else if (skor_penyelia  == "3") {
            // console.log('john3');
            skor_sebenar = document.getElementById("skor_sebenar").value = 15;
            total_score = document.getElementById("percentage-total").value = skor_sebenar;
            // console.log('john30');
          
            
          } else if (skor_penyelia  == "4") {
            // console.log('john4');     
            skor_sebenar = document.getElementById("skor_sebenar").value = 20;
            total_score = document.getElementById("percentage-total").value = skor_sebenar;
            // console.log('john40');
           
        }
      } 
    
          gradeClass();
          percentageValid();
    }
    
    // if ( document.getElementById('skor_penyelia').value == "" ) {
    //       // console.log('john');
    //       document.getElementById("skor_penyelia").value = 0;
          
    //     } else {
          
    //       // CONDITION ONE
    //         if (skor_penyelia == "0") {
    //         console.log("john0");
    //         console.log(skor_sebenar);
    //         console.log(skor_penyelia);
    //         skor_sebenar = document.getElementById("skor_sebenar").value = 0;
    //         // skor_sebenar = document.getElementById("skor_sebenar").value = 0;
    //         // total_score = document.getElementById("percentage-total").value = skor_sebenar;
    //         // console.log (document.getElementById("percentage-total").value = skor_sebenar);
    //         console.log('john00');
            
    
    //         } else if (skor_penyelia == "1") {
    //         console.log('john1');
    //         skor_sebenar = document.getElementById("skor_sebenar").value = 25;
    //         total_score = document.getElementById("percentage-total").value = skor_sebenar;
    //         console.log('john10');
            
    
    //         } else if (skor_penyelia == "2") {
    //         console.log('john2');
    //         skor_sebenar = document.getElementById("skor_sebenar").value = 50;
    //         total_score = document.getElementById("percentage-total").value = skor_sebenar;
    //         console.log('john20');
           
    
    //       } else if (skor_penyelia  == "3") {
    //         console.log('john3');
    //         skor_sebenar = document.getElementById("skor_sebenar").value = 75;
    //         total_score = document.getElementById("percentage-total").value = skor_sebenar;
    //         console.log('john30');
          
            
    //       } else if (skor_penyelia  == "4") {
    //         console.log('john4');     
    //         skor_sebenar = document.getElementById("skor_sebenar").value = 100;
    //         total_score = document.getElementById("percentage-total").value = skor_sebenar;
    //         console.log('john40');
           
    //     }
    //   } 
    
    //       gradeClass2();
    //       percentageValid2();
    // }
    // // GRADE CLASS
    function gradeClass(){
      // console.log('john');
      let skor_penyelia = document.getElementById("skor_penyelia").value;
      // console.log(skor_pekerja);
      
    
      if ( skor_penyelia >= 80 ) {
    
        perColorUI.style.backgroundColor = "#9BC2E6" ;        
        document.getElementsByName("grade")[0].value = "PLATINUM";
    
      } else if ( skor_penyelia >= 75 && skor_penyelia <= 79.99 ) {
    
        perColorUI.style.backgroundColor = "#C6E0B4";
        document.getElementsByName("grade")[0].value = "HIGH GOLD";
    
      }  else if ( skor_penyelia >= 70 && skor_penyelia <= 74.99 ) {
    
        perColorUI.style.backgroundColor = "#9ba95b";
        document.getElementsByName("grade")[0].value = "MID GOLD";
    
      } else if ( skor_penyelia >= 65 && skor_penyelia <= 69.99 ) {
    
        perColorUI.style.backgroundColor = "#bfaf7f";
        document.getElementsByName("grade")[0].value = "LOW GOLD";
        
      } else if ( skor_penyelia >= 60 && skor_penyelia <= 64.99 ) {
    
        perColorUI.style.backgroundColor = "#FFFF99";
        document.getElementsByName("grade")[0].value = "HIGH SILVER";
    
      } else if ( skor_penyelia >= 50 && skor_penyelia <= 59.99 ) {
    
        perColorUI.style.backgroundColor = "#FFFF00";
        document.getElementsByName("grade")[0].value = "LOW SILVER";
    
      } else if ( skor_penyelia >= 1 && skor_penyelia <= 49.99 ) {
    
        perColorUI.style.backgroundColor = "#F4B084";
        document.getElementsByName("grade")[0].value = "BRONZE";
    
      } else {
    
        perColorUI.style.backgroundColor = "#FFFFFF";  
        document.getElementsByName("grade")[0].value = "NO GRED";
    
      }
      // console.log(skor_penyelia);
    }
    
    function percentageValid() {
    
        let weightageTotal = document.getElementById("peratus").value;
        
        if (weightageTotal > 100) {
    
          document.getElementsByName("weightage")[0].value = "NOT MORE THAN 100";
          perValidUI.style.color = "#FF0000";
          perValidUI.style.fontWeight = "bold";
    
        } else {
    
          document.getElementsByName("weightage")[0].value = weightageTotal;
          perValidUI.style.color = "#000000";
          perValidUI.style.fontWeight = "bold";
    
        }
        // console.log(weightageTotal);
    }
    
    // function gradeClass2(){
    //   console.log('john');
    //   let skor_penyelia = document.getElementById("skor_penyelia").value;
    //   console.log(skor_penyelia);
      
    //   if ( skor_penyelia >= 80 ) {
    
    //     perColorUI.style.backgroundColor = "#9BC2E6" ;        
    //     document.getElementsByName("grade")[0].value = "PLATINUM";
    
    //   } else if ( skor_penyelia >= 75 && skor_penyelia <= 79.99 ) {
    
    //     perColorUI.style.backgroundColor = "#C6E0B4";
    //     document.getElementsByName("grade")[0].value = "HIGH GOLD";
    
    //   }  else if ( skor_penyelia >= 70 && skor_penyelia <= 74.99 ) {
    
    //     perColorUI.style.backgroundColor = "#9ba95b";
    //     document.getElementsByName("grade")[0].value = "MID GOLD";
    
    //   } else if ( skor_penyelia >= 65 && skor_penyelia <= 69.99 ) {
    
    //     perColorUI.style.backgroundColor = "#bfaf7f";
    //     document.getElementsByName("grade")[0].value = "LOW GOLD";
        
    //   } else if ( skor_penyelia >= 60 && skor_penyelia <= 64.99 ) {
    
    //     perColorUI.style.backgroundColor = "#FFFF99";
    //     document.getElementsByName("grade")[0].value = "HIGH SILVER";
    
    //   } else if ( skor_penyelia >= 50 && skor_penyelia <= 59.99 ) {
    
    //     perColorUI.style.backgroundColor = "#FFFF00";
    //     document.getElementsByName("grade")[0].value = "LOW SILVER";
    
    //   } else if ( skor_penyelia >= 1 && skor_penyelia <= 49.99 ) {
    
    //     perColorUI.style.backgroundColor = "#F4B084";
    //     document.getElementsByName("grade")[0].value = "BRONZE";
    
    //   } else {
    
    //     perColorUI.style.backgroundColor = "#FFFFFF";  
    //     document.getElementsByName("grade")[0].value = "NO GRED";
    
    //   }
    
    // }
    
    // function percentageValid2() {
    
    //     let weightageTotal = document.getElementById("peratus").value;
    
    //     if (weightageTotal > 100) {
    
    //       document.getElementsByName("weightage")[0].value = "NOT MORE THAN 100";
    //       perValidUI.style.color = "#FF0000";
    //       perValidUI.style.fontWeight = "bold";
    
    //     } else {
    
    //       document.getElementsByName("weightage")[0].value = weightageTotal;
    //       perValidUI.style.color = "#000000";
    //       perValidUI.style.fontWeight = "bold";
    
    //     }
    // }
    