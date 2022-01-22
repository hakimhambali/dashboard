// UI variables
const perTotalUI = document.getElementById('percentage-total');
const perColorUI = document.getElementById('grade');
const perValidUI = document.getElementById('percentage-weightage');
const appendAreaUI = document.querySelector('.append-area');
const addButtonUI = document.getElementById('add');

// Program variables
const INITIAL_TABLE_ROWS = 1;

// Dynamically add rows when DOM content loaded
document.addEventListener('DOMContentLoaded', () => {
    for (let i = 0; i < INITIAL_TABLE_ROWS; i++) {
      addButtonUI.click();
    }
  });

// Append rows to table
addButtonUI.addEventListener('click', () => {
    let counter = parseInt(document.getElementById('counter').value);
   
    appendAreaUI.insertAdjacentHTML('beforeend', `
      <tr id="row-${counter}">
        <td style="word-break: keep-all;" class="border-dark">
            <textarea rows="10  id="bukti-${counter}" name="bukti[]" ></textarea>
        </td>

        <td class="border-dark">
          <select class="form-select form-select-sm" id="ukuran-${counter}" name="ukuran">
            <option selected value="N/A">N/A</option>
            <option value="Quantity" >Quantity</option>
            <option value="Ratio" >Ratio</option>
            <option value="Rating" >Rating</option>
            <option value="Percentage (%)" >Percentage(%)</option>  
            <option value="Date (dd/mm/yyyy)">Date (dd/mm/yyyy)</option> 
            <option value="Hours" >Hours</option> 
            <option value="RM (billion)" >RM (billion)</option>
            <option value="RM (million)" >RM (million)</option> 
            <option value="RM (*000)" >RM (*000)</option>
          </select>
        </td>
  
        <td class="font-weight-bold border-dark">
          <input type="text" maxlength="3" class="input_ukuran w-100" id="peratus-${counter}" name="peratus" onkeyup="setTotal();" min="0" >
        </td>
  
        <td class="font-weight-bold border-dark">
          <input type="text" maxlength="4" class="input_threshold w-75" id="threshold-${counter}" name="threshold" onkeyup="setTotal();" min="0" >
        </td>
  
        <td class="font-weight-bold border-dark">
          <input type="text" maxlength="4" class="input_base w-100" id="base-${counter}" name="base" onkeyup="setTotal();" min="0" >
        </td>
  
        <td class="font-weight-bold border-dark">
          <input type="text" maxlength="4" class="input_stretch w-100" id="stretch-${counter}" name="stretch" onkeyup="setTotal();" min="0" >
        </td>
  
        <td class="font-weight-bold border-dark">
          <input type="text" maxlength="4"  class="input_pencapaian w-75" id="pencapaian-${counter}" name="pencapaian" onkeyup="setTotal();" min="0" >
        </td>
  
        <td class="font-weight-bold border-dark">
          <input type="text"  id="skor_KPI-${counter}" class="form-control-sm w-100" name="skor_KPI" value="0" readonly>
        </td>
  
        <td class="font-weight-bold border-dark">
          <input type="text"  id="skor_sebenar-${counter}" class="form-control-sm w-100" name="skor_sebenar" value="0" readonly>
        </td>
        
        <td class="font-weight-bold border-dark">
        <button type="button" id="${counter}" class="btn btn-danger btn-sm remove"><i id="${counter}" <i class="fas fa-trash"></i></button>
        </td>

      </tr>
  
    `);

    counter++;
    document.getElementById('counter').value = counter;  
  
});

// Delete table rows
document.addEventListener('click', (e) => {
    let elClassList = e.target.classList;
    if (elClassList.contains('fa-minus-circle') || elClassList.contains('remove')) {
      let removeButtonID = e.target.id;
      document.getElementById('row-' + removeButtonID).remove();
  
      let tableRows = document.querySelectorAll('.append-area tr').length;
      for (let i = 0; i < tableRows; i++) {
        document.querySelectorAll('.append-area tr')[i].id = 'row-' + i;
        document.querySelectorAll('.append-area tr#row-' + i + ' td input')[1].id = 'ukuran-' + i;
        document.querySelectorAll('.append-area tr#row-' + i + ' td input')[2].id = 'peratus-' + i;
        document.querySelectorAll('.append-area tr#row-' + i + ' td input')[3].id = 'threshold-' + i;
        document.querySelectorAll('.append-area tr#row-' + i + ' td input')[4].id = 'base-' + i;
        document.querySelectorAll('.append-area tr#row-' + i + ' td input')[5].id = 'stretch-' + i;
        document.querySelectorAll('.append-area tr#row-' + i + ' td input')[6].id = 'pencapaian-' + i;
        document.querySelectorAll('.append-area tr#row-' + i + ' td input')[7].id = 'skor_KPI-' + i;
        document.querySelectorAll('.append-area tr#row-' + i + ' td input')[8].id = 'skor_sebenar-' + i;
  
        document.querySelectorAll('.append-area tr td button')[i].id = i;
        document.querySelectorAll('.append-area tr td button i')[i].id = i;
      }
  
      document.getElementById('counter').value = tableRows;
      setTotal();
  
    }
  
  });
  
  // Calculate row TOTAL
  function setTotal() {
    let tableRows = document.querySelectorAll('tbody.append-area tr').length;
  
    // let subTotal = 0;
    let percentageTotal = 0;
    let weightageTotal = 0;
  
  
    for (let i = 0; i < tableRows; i++) {
      let peratus = Number(document.getElementById("peratus-" + i).value);
      let threshold = Number(document.getElementById("threshold-" + i).value);
      let base = Number(document.getElementById("base-" + i).value);
      let stretch = Number(document.getElementById("stretch-" + i).value);
      let pencapaian = Number(document.getElementById("pencapaian-" + i).value);
  
      
      let rowTotal = 0;
      let scoreTotal = 0;
  
      if ( document.getElementById("peratus-" + i).value == "" || document.getElementById("threshold-" + i).value == "" || document.getElementById("base-" + i).value == "" || document.getElementById("stretch-" + i).value == "" || document.getElementById("pencapaian-" + i).value == "" ) 
      
      {
  
        document.getElementById("skor_KPI-" + i).value = 0;
        document.getElementById("skor_sebenar-" + i).value = 0;
  
      } else {
  
        // CONDITION ONE
        if (pencapaian <= threshold) {
  
          rowTotal = document.getElementById("skor_KPI-" + i).value = 0 ;
          scoreTotal = document.getElementById("skor_sebenar-" + i).value = 0;
  
          
  
        } else if (pencapaian >= stretch) {
  
          rowTotal = document.getElementById("skor_KPI-" + i).value = 100 ;
          scoreTotal = document.getElementById("skor_sebenar-" + i).value = peratus ;
  
          
  
        } else if (pencapaian >= threshold && pencapaian <= base) {
  
          value1 = parseFloat(pencapaian) - parseFloat(threshold); 
          value2 = parseFloat(base) - parseFloat(threshold); 
  
          KPIScore = ((( value1 / value2 ) * 35) + 30);
          ScoreSebenar = ((peratus / 100) * KPIScore);
  
          rowTotal = document.getElementById("skor_KPI-" + i).value = KPIScore ;
          scoreTotal = document.getElementById("skor_sebenar-" + i).value = ScoreSebenar ;
  
          
  
        } else if (pencapaian >= base && pencapaian < stretch) {
  
          value1 = parseFloat(pencapaian) - parseFloat(base);
          value2 = parseFloat(stretch) - parseFloat(base);
  
          KPIScore = ((( value1 / value2 ) * 35) + 65);
          ScoreSebenar = ((peratus / 100) * KPIScore);
  
          rowTotal = document.getElementById("skor_KPI-" + i).value = KPIScore ;
          scoreTotal = document.getElementById("skor_sebenar-" + i).value = ScoreSebenar ;
  
          
        } 
  
        // CONDITION TWO
        if (base >= stretch && stretch <= base) {
  
          ScoreSebenar = ((peratus / 100) * 30);
  
          rowTotal = document.getElementById("skor_KPI-" + i).value = 30 ;
          scoreTotal = document.getElementById("skor_sebenar-" + i).value = ScoreSebenar ;
  
        }
  
        // CONDITION THREE
        if (threshold >= base) {
  
          rowTotal = document.getElementById("skor_KPI-" + i).value = 0 ;
          scoreTotal = document.getElementById("skor_sebenar-" + i).value = 0;
   
        }
  
      }
  
      percentageTotal += scoreTotal;
      weightageTotal += peratus;
      
    }
  
    // Set weightageTotal & percentageTotal values
    perTotalUI.value = percentageTotal.toFixed(2);
    perValidUI.value = weightageTotal;
  
    colorClass();
    percentageValid();
  }
  
  // Level Color Class
  function colorClass() {
  
        let percentageTotal = document.getElementById("percentage-total").value;
              
  
        if ( percentageTotal >= 80 ) {
  
          perColorUI.style.backgroundColor = "#9BC2E6" ;        
          document.getElementsByName("grade")[0].value = "PLATINUM";
  
        } else if ( percentageTotal >= 75 && percentageTotal <= 79 ) {
  
          perColorUI.style.backgroundColor = "#C6E0B4";
          document.getElementsByName("grade")[0].value = "HIGH GOLD";
  
        } else if ( percentageTotal >= 70 && percentageTotal <= 74.9 ) {
  
          perColorUI.style.backgroundColor = "#548235";
          document.getElementsByName("grade")[0].value = "MID GOLD";
  
        } else if ( percentageTotal >= 65 && percentageTotal <= 69.9 ) {
  
          perColorUI.style.backgroundColor = "#806000";
          document.getElementsByName("grade")[0].value = "LOW GOLD";
  
        } else if ( percentageTotal >= 60 && percentageTotal <= 64.9 ) {
  
          perColorUI.style.backgroundColor = "#FFFF99";
          document.getElementsByName("grade")[0].value = "HIGH SILVER";
  
        } else if ( percentageTotal >= 50 && percentageTotal <= 59.9 ) {
  
          perColorUI.style.backgroundColor = "#FFFF00";
          document.getElementsByName("grade")[0].value = "LOW SILVER";
  
        } else if ( percentageTotal >= 1 && percentageTotal <= 49.9 ) {
  
          perColorUI.style.backgroundColor = "#F4B084";
          document.getElementsByName("grade")[0].value = "BRONZE";
  
        } else {

          perColorUI.style.backgroundColor = "#FFFFFF";  
          document.getElementsByName("grade")[0].value = "NO GRED";
  
        }
  
  }
  
  // Percentage Valid
  function percentageValid() {
  
      let weightageTotal = document.getElementById("percentage-weightage").value;
  
      if (weightageTotal > 100) {
  
        document.getElementsByName("weightage")[0].value = "Not more than 100 !!";
        perValidUI.style.color = "#FF0000";
        perValidUI.style.fontWeight = "bold";
  
      } else {
  
        document.getElementsByName("weightage")[0].value = weightageTotal;
        perValidUI.style.color = "#000000";
        perValidUI.style.fontWeight = "bold";
  
      }
  }