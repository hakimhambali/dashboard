

const perColorUI = document.getElementById('grade');
const perValidUI = document.getElementById('percentage-weightage');

function masterClac() {
  
  // let peratus = Number(document.getElementById('ukuran').value);
  // console.log(ukuran);
  // console.log('john');
  let peratus = Number(document.getElementById('peratus').value);
  // console.log(peratus);
  let threshold = Number(document.getElementById('threshold').value); 
  let base = Number( document.getElementById('base').value);
  let stretch = Number(document.getElementById('stretch').value); 
  // console.log(stretch);
  let pencapaian = Number(document.getElementById('pencapaian').value); 
  // console.log(pencapaian);

    let skor_KPI = 0;
    let skor_sebenar = 0;
    let total_score = 0;

    if ( document.getElementById('peratus').value == "" || document.getElementById('threshold').value == "" || document.getElementById('base').value == "" || document.getElementById('stretch').value == "" || document.getElementById('pencapaian').value == "" ) {
      
      document.getElementById("skor_KPI").value = 0;
      document.getElementById("skor_sebenar").value = 0;
      
    } else {
      
      // CONDITION ONE
        if (pencapaian < threshold) {

        skor_KPI = document.getElementById("skor_KPI").value = 0;
        skor_sebenar = document.getElementById("skor_sebenar").value = 0;
        // console.log(skor_sebenar);
        total_score = document.getElementById("percentage-total").value = skor_sebenar;
        // console.log(total_score);

        // total_score = total_score + skor_sebenar;
        // console.log(total_score);

        } else if (pencapaian >= stretch) {

        skor_KPI = document.getElementById("skor_KPI").value = 100;
        // skor_sebenar = document.getElementById("skor_sebenar").value = 100 * (peratus/100);
        // console.log(skor_KPI);
        skor_sebenar = document.getElementById("skor_sebenar").value = (peratus / 100) * skor_KPI
        // console.log(skor_sebenar);
        total_score = document.getElementById("percentage-total").value = skor_sebenar;
        // console.log(total_score);
        // console.log(total_score);

        // total_score = total_score + skor_sebenar;
        // console.log(total_score);
        // let total_score = 0;
        // console.log(total_score);

        } else if (pencapaian >= threshold && pencapaian < base) {

        value1 = parseFloat(pencapaian) - parseFloat(threshold); 
        value2 = parseFloat(base) - parseFloat(threshold); 

        KPIScore = ((( value1 / value2 ) * 35) + 30);
        ScoreSebenar = ((peratus / 100) * KPIScore);

        total = document.getElementById("skor_KPI").value = KPIScore.toFixed(2) ;
        skor_sebenar = document.getElementById("skor_sebenar").value = ScoreSebenar.toFixed(2) ;
        total_score = document.getElementById("percentage-total").value = skor_sebenar;
        // console.log(total_score);

        // total_score = total_score + skor_sebenar;
        // console.log(total_score);

      } else if (pencapaian >= base && pencapaian < stretch) {

        value1 = parseFloat(pencapaian) - parseFloat(base);
        value2 = parseFloat(stretch) - parseFloat(base);

        KPIScore = ((( value1 / value2 ) * 35) + 65);
        ScoreSebenar = ((peratus / 100) * KPIScore);

        skor_KPI = document.getElementById("skor_KPI").value = KPIScore.toFixed(2) ;
        skor_sebenar = document.getElementById("skor_sebenar").value = ScoreSebenar.toFixed(2) ;
        total_score = document.getElementById("percentage-total").value = skor_sebenar;
        // console.log(total_score);
        // total_score = total_score + skor_sebenar;
        // console.log(total_score);

         //Condition Two (if threshold>Stretch)
       } else if (threshold > stretch) {

        } if ( pencapaian > threshold ) {
          skor_KPI = document.getElementById("skor_KPI").value = 0;
          skor_sebenar = document.getElementById("skor_sebenar").value = 0;
          total_score = document.getElementById("percentage-total").value = skor_sebenar;

        } else if (pencapaian <= stretch) {
          skor_KPI = document.getElementById("skor_KPI").value = 100;
          skor_sebenar = document.getElementById("skor_sebenar").value = (peratus / 100) * skor_KPI
          total_score = document.getElementById("percentage-total").value = skor_sebenar;

        } else if (pencapaian <= threshold && pencapaian > base) {
          value1 = parseFloat(pencapaian) - parseFloat(threshold); 
          value2 = parseFloat(base) - parseFloat(threshold); 
          KPIScore = ((( value1 / value2 ) * 35) + 30);
          ScoreSebenar = ((peratus / 100) * KPIScore);
          total = document.getElementById("skor_KPI").value = KPIScore.toFixed(2) ;
          skor_sebenar = document.getElementById("skor_sebenar").value = ScoreSebenar.toFixed(2) ;
          total_score = document.getElementById("percentage-total").value = skor_sebenar;

        } else if (pencapaian <= base && pencapaian > stretch) {
          value1 = parseFloat(pencapaian) - parseFloat(base);
          value2 = parseFloat(stretch) - parseFloat(base);
          KPIScore = ((( value1 / value2 ) * 35) + 65);
          ScoreSebenar = ((peratus / 100) * KPIScore);
          skor_KPI = document.getElementById("skor_KPI").value = KPIScore.toFixed(2) ;
          skor_sebenar = document.getElementById("skor_sebenar").value = ScoreSebenar.toFixed(2) ;
          total_score = document.getElementById("percentage-total").value = skor_sebenar;
        }
      // total_score = total_score + skor_sebenar;
      // console.log(total_score);
    }

      // // CONDITION TWO
      // if (base >= stretch && stretch <= base) {

      //   ScoreSebenar = ((peratus / 100) * 30);

      //   skor_KPI = document.getElementById("skor_KPI").value = 30 ;
      //   skor_sebenar = document.getElementById("skor_sebenar").value = ScoreSebenar ;
      //   total_score = document.getElementById("percentage-total").value = skor_sebenar;
      //   // console.log(total_score);

      // }

      // // CONDITION THREE
      // if (threshold >= base) {

      //   skor_KPI = document.getElementById("skor_KPI").value = 0 ;
      //   skor_sebenar = document.getElementById("skor_sebenar").value = 0;
      //   total_score = document.getElementById("percentage-total").value = skor_sebenar;
      //   // console.log(total_score);

      // }

      // CONDITION THREE

      
      gradeClass();
      percentageValid();

      // let totalperatus = 0;
      // totalperatus = totalperatus + peratus;
      // // console.log(totalperatus);
      // if (totalperatus > 100) {
      //   alert("Maaf, anda telah melebihi had KPI iaitu 100 peratus sahaja");
      // }
      // if (totalperatus < 100) {
      //   alert("Maaf, KPI anda tidak mencukupi 100 peratus");
      // }
      // console.log(totalperatus);
}

// GRADE CLASS
function gradeClass(){

  let skor_sebenar = document.getElementById("skor_sebenar").value;

  if ( skor_sebenar >= 80 ) {

    perColorUI.style.backgroundColor = "#9BC2E6" ;        
    document.getElementsByName("grade")[0].value = "PLATINUM";

  } else if ( skor_sebenar >= 75 && skor_sebenar <= 79.99 ) {

    perColorUI.style.backgroundColor = "#C6E0B4";
    document.getElementsByName("grade")[0].value = "HIGH GOLD";

  }  else if ( skor_sebenar >= 70 && skor_sebenar <= 74.99 ) {

    perColorUI.style.backgroundColor = "#9ba95b";
    document.getElementsByName("grade")[0].value = "MID GOLD";

  } else if ( skor_sebenar >= 65 && skor_sebenar <= 69.99 ) {

    perColorUI.style.backgroundColor = "#bfaf7f";
    document.getElementsByName("grade")[0].value = "LOW GOLD";
    
  } else if ( skor_sebenar >= 60 && skor_sebenar <= 64.99 ) {

    perColorUI.style.backgroundColor = "#FFFF99";
    document.getElementsByName("grade")[0].value = "HIGH SILVER";

  } else if ( skor_sebenar >= 50 && skor_sebenar <= 59.99 ) {

    perColorUI.style.backgroundColor = "#FFFF00";
    document.getElementsByName("grade")[0].value = "LOW SILVER";

  } else if ( skor_sebenar >= 1 && skor_sebenar <= 49.99 ) {

    perColorUI.style.backgroundColor = "#F4B084";
    document.getElementsByName("grade")[0].value = "BRONZE";

  } else {

    perColorUI.style.backgroundColor = "#FFFFFF";  
    document.getElementsByName("grade")[0].value = "NO GRED";

  }

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
}
