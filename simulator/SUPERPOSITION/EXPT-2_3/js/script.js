// --------------------POWER ON--------------------
function poweron(){
  if(document.getElementById("power-switch").checked == true){
    document.getElementById("am-value").value = "";
    document.getElementById("instance-1").disabled = false;
    document.getElementById("instance-1").style.background = "blue";
    document.getElementById("instance-2").disabled = false;
    document.getElementById("instance-2").style.background = "blue";
    document.getElementById("instance-3").disabled = false;
    document.getElementById("instance-3").style.background = "blue";
    document.getElementById("instance-4").disabled = false;
    document.getElementById("instance-4").style.background = "blue";
    document.getElementById("vs1-value").readOnly = false;
    document.getElementById("vs2-value").readOnly = false;
    document.getElementById("r1-value").readOnly = false;
    document.getElementById("r2-value").readOnly = false;
    document.getElementById("r3-value").readOnly = false;
    document.getElementById("r4-value").readOnly = false;
    document.getElementById("sim-1_s1").disabled = false;
    document.getElementById("sim-2_s2").disabled = false;
    document.getElementById("sim-1_s1").style.background = "green";
    document.getElementById("sim-2_s2").style.background = "red";
    document.getElementById("sim-1_s3").disabled = false;
    document.getElementById("sim-2_s4").disabled = false;
    document.getElementById("sim-1_s3").style.background = "green";
    document.getElementById("sim-2_s4").style.background = "red";
    document.getElementById("sim-1_s5").disabled = false;
    document.getElementById("sim-2_s6").disabled = false;
    document.getElementById("sim-1_s5").style.background = "green";
    document.getElementById("sim-2_s6").style.background = "red";
    document.getElementById("sim-1").disabled = false;
    document.getElementById("sim-2").disabled = false;
    document.getElementById("sim-1").style.background = "green";
    document.getElementById("sim-2").style.background = "red";
  }
  if(document.getElementById("power-switch").checked == false){
    document.getElementById("am-value").value = "";
    document.getElementById("instance-1").disabled = true;
    document.getElementById("instance-1").style.background = "rgba(0, 0, 255, 0.404)";
    document.getElementById("instance-2").disabled = true;
    document.getElementById("instance-2").style.background = "rgba(0, 0, 255, 0.404)";
    document.getElementById("instance-3").disabled = true;
    document.getElementById("instance-3").style.background = "rgba(0, 0, 255, 0.404)";
    document.getElementById("instance-4").disabled = true;
    document.getElementById("instance-4").style.background = "rgba(0, 0, 255, 0.404)";
    document.getElementById("vs1-value").readOnly = true;
    document.getElementById("vs2-value").readOnly = true;
    document.getElementById("r1-value").readOnly = true;
    document.getElementById("r2-value").readOnly = true;
    document.getElementById("r3-value").readOnly = true;
    document.getElementById("r4-value").readOnly = true;
    document.getElementById("sim-1_s1").disabled = true;
    document.getElementById("sim-2_s2").disabled = true;
    document.getElementById("sim-1_s1").style.background = "rgba(0, 128, 0, 0.386)";
    document.getElementById("sim-2_s2").style.background = "rgba(255, 0, 0, 0.404)";
    document.getElementById("sim-1_s3").disabled = true;
    document.getElementById("sim-2_s4").disabled = true;
    document.getElementById("sim-1_s3").style.background = "rgba(0, 128, 0, 0.386)";
    document.getElementById("sim-2_s4").style.background = "rgba(255, 0, 0, 0.404)";
    document.getElementById("sim-1_s5").disabled = true;
    document.getElementById("sim-2_s6").disabled = true;
    document.getElementById("sim-1_s5").style.background = "rgba(0, 128, 0, 0.386)";
    document.getElementById("sim-2_s6").style.background = "rgba(255, 0, 0, 0.404)";
    document.getElementById("sim-1").disabled = true;
    document.getElementById("sim-2").disabled = true;
    document.getElementById("sim-1").style.background = "rgba(0, 128, 0, 0.386)";
    document.getElementById("sim-2").style.background = "rgba(255, 0, 0, 0.404)";
  }
}
// --------------------INSTANCE ONE--------------------
function st1_ckt_sim(){
  alert("Computation of branch current I from main circuit in presence of both current sources is1 & is2");
  document.getElementById("instance-2-sim").style.display = "block";
  document.getElementById("instance-3-sim").style.display = "none";
  document.getElementById("instance-4-sim").style.display = "none";
  document.getElementById("instance-5-sim").style.display = "none";
  document.getElementById("input-fields-1").style.display = "block";
  document.getElementById("input-fields-2").style.display = "block";
  document.getElementById("input-fields-3").style.display = "block";
  document.getElementById("input-fields-4").style.display = "block";
  document.getElementById("input-fields-5").style.display = "block";
  document.getElementById("input-fields-6").style.display = "block";
  document.getElementById("input-fields-7").style.display = "none";
  document.getElementById("input-fields-8").style.display = "none";
  document.getElementById("input-fields-9").style.display = "none";
  document.getElementById("main_ckt").style.display = "block";
  document.getElementById("I1_ckt").style.display = "none";
  document.getElementById("I2_ckt").style.display = "none";
  document.getElementById("am-value").value = "0";
}
var is1,is2,r1,r2,r3,r4,I;
var tabrowindex = 0;
var arr = [];
var table;
var load1;
var columns;
    // --------------------CALCULATION OF I FOR INSTANCE 1--------------------
    function I_calc(){
      if (document.getElementById("vs1-value").value == ""){
        alert("Enter the value of current source is1")
      }
      else if (document.getElementById("vs2-value").value == ""){
        alert("Enter the value of current source is2")
      }
      else if (document.getElementById("r1-value").value == ""){
        alert("Enter the value of resistance R1")
      }
      else if (document.getElementById("r2-value").value == ""){
        alert("Enter the value of resistance R2")
      }
      else if (document.getElementById("r3-value").value == ""){
        alert("Enter the value of resistance R3")
      }
      else if (document.getElementById("r4-value").value == ""){
        alert("Enter the value of resistance R4")
      }
      else{
        is1 = document.getElementById("vs1-value").value;
        is2 = document.getElementById("vs2-value").value;
        r1 = document.getElementById("r1-value").value;
        r2 = document.getElementById("r2-value").value;
        r3 = document.getElementById("r3-value").value;
        r4 = document.getElementById("r4-value").value;

        I = ((parseFloat(is1)*parseFloat(r1))-(parseFloat(is2)*parseFloat(r3)))/(parseFloat(r1)+parseFloat(r3)+parseFloat(r4));
        document.getElementById("am-value").value = I.toPrecision(3);
        // --------------------TABLE CREATION--------------------
        table = document.getElementById("obs-table");
        arr[0] = tabrowindex + 1;
        arr[1] = document.getElementById("am-value").value;

        if (table.rows.length <= 15){
        var row = table.insertRow(++tabrowindex);
        for (var a = 0; a < 2; a++) {
        var cell = row.insertCell(a);
        cell.innerHTML = arr[a];
        }
      }
      columns = table.rows[tabrowindex].cells[1];
      load1 = columns.innerHTML;
    
      document.getElementById("r1-value").readOnly = true;
      document.getElementById("r2-value").readOnly = true;
      document.getElementById("r3-value").readOnly = true;
      document.getElementById("r4-value").readOnly = true;
    }
}
// --------------------INSTANCE TWO--------------------
function st2_ckt_sim(){
  alert("Computation of branch current I1, when current source is1 is open circuited and current source is2 is acting alone.");
  document.getElementById("instance-2-sim").style.display = "none";
  document.getElementById("instance-3-sim").style.display = "block";
  document.getElementById("instance-4-sim").style.display = "none";
  document.getElementById("instance-5-sim").style.display = "none";
  document.getElementById("input-fields-1").style.display = "none";
  document.getElementById("input-fields-2").style.display = "block";
  document.getElementById("input-fields-3").style.display = "block";
  document.getElementById("input-fields-4").style.display = "block";
  document.getElementById("input-fields-5").style.display = "block";
  document.getElementById("input-fields-6").style.display = "block";
  document.getElementById("input-fields-7").style.display = "none";
  document.getElementById("input-fields-8").style.display = "none";
  document.getElementById("input-fields-9").style.display = "none";
  document.getElementById("main_ckt").style.display = "none";
  document.getElementById("I1_ckt").style.display = "block";
  document.getElementById("I2_ckt").style.display = "none";
  document.getElementById("am-value").value = "0";
}
var is1,is2,r1,r2,r3,r4,I1;
var tabrowindex1 = 0;
var arr1 = [];
var table1;
var load2;
var columns1;
    // --------------------CALCULATION OF I1 FOR INSTANCE 2--------------------
    function I1_calc(){
      if (document.getElementById("vs1-value").value == ""){
        alert("Enter the value of current source is1")
      }
      else if (document.getElementById("vs2-value").value == ""){
        alert("Enter the value of current source is2")
      }
      else if (document.getElementById("r1-value").value == ""){
        alert("Enter the value of resistance R1")
      }
      else if (document.getElementById("r2-value").value == ""){
        alert("Enter the value of resistance R2")
      }
      else if (document.getElementById("r3-value").value == ""){
        alert("Enter the value of resistance R3")
      }
      else if (document.getElementById("r4-value").value == ""){
        alert("Enter the value of resistance R4")
      }
      else{
        is1 = document.getElementById("vs1-value").value;
        is2 = document.getElementById("vs2-value").value;
        r1 = document.getElementById("r1-value").value;
        r2 = document.getElementById("r2-value").value;
        r3 = document.getElementById("r3-value").value;
        r4 = document.getElementById("r4-value").value;

        I1 = (-(parseFloat(is2)*parseFloat(r3)))/(parseFloat(r1)+parseFloat(r3)+parseFloat(r4));
        document.getElementById("am-value").value = I1.toPrecision(3);
        document.getElementById("I1-value").value = I1.toPrecision(3);
        // --------------------TABLE CREATION--------------------
        table1 = document.getElementById("obs-table-2");
        arr1[0] = tabrowindex1 + 1;
        arr1[1] = document.getElementById("am-value").value;
    
    
        if (table1.rows.length <= 15){
            var row1 = table1.insertRow(++tabrowindex1);
            for (var a = 0; a < 2; a++) {
            var cell1 = row1.insertCell(a);
            cell1.innerHTML = arr1[a];
            }
        }
        columns1 = table1.rows[tabrowindex1].cells[1];
        load2 = columns1.innerHTML;
    }
}
// --------------------INSTANCE THREE--------------------
function st3_ckt_sim(){
  alert("Computation of branch current I2, when current source is2 is open circuited and current source is1 is acting alone.");
  document.getElementById("instance-2-sim").style.display = "none";
  document.getElementById("instance-3-sim").style.display = "none";
  document.getElementById("instance-4-sim").style.display = "block";
  document.getElementById("instance-5-sim").style.display = "none";
  document.getElementById("input-fields-1").style.display = "block";
  document.getElementById("input-fields-2").style.display = "none";
  document.getElementById("input-fields-3").style.display = "block";
  document.getElementById("input-fields-4").style.display = "block";
  document.getElementById("input-fields-5").style.display = "block";
  document.getElementById("input-fields-6").style.display = "block";
  document.getElementById("input-fields-7").style.display = "none";
  document.getElementById("input-fields-8").style.display = "none";
  document.getElementById("input-fields-9").style.display = "none";
  document.getElementById("main_ckt").style.display = "none";
  document.getElementById("I1_ckt").style.display = "none";
  document.getElementById("I2_ckt").style.display = "block";
  document.getElementById("am-value").value = "0";
}
var is1,is1,r1,r2,r3,r4,I2;
var tabrowindex2 = 0;
var arr2 = [];
var table2;
var load3;
var columns2;
    // --------------------CALCULATION OF I2 FOR INSTANCE 3--------------------
    function I2_calc(){
      if (document.getElementById("vs1-value").value == ""){
        alert("Enter the value of current source is1")
      }
      else if (document.getElementById("vs2-value").value == ""){
        alert("Enter the value of current source is2")
      }
      else if (document.getElementById("r1-value").value == ""){
        alert("Enter the value of resistance R1")
      }
      else if (document.getElementById("r2-value").value == ""){
        alert("Enter the value of resistance R2")
      }
      else if (document.getElementById("r3-value").value == ""){
        alert("Enter the value of resistance R3")
      }
      else if (document.getElementById("r4-value").value == ""){
        alert("Enter the value of resistance R4")
      }
      else{
        is1 = document.getElementById("vs1-value").value;
        is2 = document.getElementById("vs2-value").value;
        r1 = document.getElementById("r1-value").value;
        r2 = document.getElementById("r2-value").value;
        r3 = document.getElementById("r3-value").value;
        r4 = document.getElementById("r4-value").value;

        I2 = (parseFloat(is1)*parseFloat(r1))/(parseFloat(r1)+parseFloat(r3)+parseFloat(r4));
        document.getElementById("am-value").value = I2.toPrecision(3);
        document.getElementById("I2-value").value = I2.toPrecision(3);
        // --------------------TABLE CREATION--------------------
        table2 = document.getElementById("obs-table-3");
        arr2[0] = tabrowindex2 + 1;
        arr2[1] = document.getElementById("am-value").value;
    
        if (table2.rows.length <= 15){
            var row2 = table2.insertRow(++tabrowindex2);
            for (var a = 0; a < 2; a++) {
            var cell2 = row2.insertCell(a);
            cell2.innerHTML = arr2[a];
            }
        }
        columns2 = table2.rows[tabrowindex2].cells[1];
        load3 = columns2.innerHTML;
    }
}
// --------------------INSTANCE FOUR--------------------
function st4_ckt_sim(){
  alert("Verification of Superposition Theorem by adding I1 & I2 computed in stage 2 & stage 3 respectively");
  document.getElementById("instance-2-sim").style.display = "none";
  document.getElementById("instance-3-sim").style.display = "none";
  document.getElementById("instance-4-sim").style.display = "none";
  document.getElementById("instance-5-sim").style.display = "block";
  document.getElementById("input-fields-1").style.display = "none";
  document.getElementById("input-fields-2").style.display = "none";
  document.getElementById("input-fields-3").style.display = "none";
  document.getElementById("input-fields-4").style.display = "none";
  document.getElementById("input-fields-5").style.display = "none";
  document.getElementById("input-fields-6").style.display = "none";
  document.getElementById("input-fields-7").style.display = "block";
  document.getElementById("input-fields-8").style.display = "block";
  document.getElementById("input-fields-9").style.display = "block";
  document.getElementById("main_ckt").style.display = "none";
  document.getElementById("I1_ckt").style.display = "none";
  document.getElementById("I2_ckt").style.display = "none";
  document.getElementById("am-value").value = "";
}
var I1,I2,I_ver
var tabrowindex3 = 0;
var arr3 = [];
var table3;
var load4;
var columns3;
    // --------------------CALCULATION OF I FOR INSTANCE 4--------------------
    function I_ver_calc(){
      if (document.getElementById("I1-value").value == ""){
        alert("The value of I1 is not computed in stage 2")
      }
      if (document.getElementById("I2-value").value == ""){
        alert("The value of I2 is not computed in stage 3")
      }
      else{
        I1 = document.getElementById("I1-value").value;
        I2 = document.getElementById("I2-value").value;
  
        I_ver = parseFloat(I1) + parseFloat(I2);
        document.getElementById("I-value").value = I_ver.toPrecision(3);
        // --------------------TABLE CREATION--------------------
        table3 = document.getElementById("obs-table-4");
        arr3[0] = tabrowindex3 + 1;
        arr3[1] = document.getElementById("I-value").value;
    
        if (table3.rows.length <= 15){
            var row3 = table3.insertRow(++tabrowindex3);
            for (var a = 0; a < 2; a++) {
            var cell3 = row3.insertCell(a);
            cell3.innerHTML = arr3[a];
            }
        }
        columns3 = table3.rows[tabrowindex3].cells[1];
        load4 = columns3.innerHTML;
        document.getElementById("next-btn").style.display = "block";
      }
    }

