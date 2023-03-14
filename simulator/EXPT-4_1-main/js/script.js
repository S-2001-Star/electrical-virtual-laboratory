// --------------------POWER ON--------------------
function poweron(){
  if(document.getElementById("power-switch").checked == true){
    document.getElementById("instance-1").disabled = false;
    document.getElementById("instance-1").style.background = "blue";
    document.getElementById("instance-2").disabled = false;
    document.getElementById("instance-2").style.background = "blue";
    document.getElementById("instance-3").disabled = false;
    document.getElementById("instance-3").style.background = "blue";
    document.getElementById("instance-4").disabled = false;
    document.getElementById("instance-4").style.background = "blue";
    document.getElementById("instance-5").disabled = false;
    document.getElementById("instance-5").style.background = "blue";
    document.getElementById("vs-value").readOnly = false;
    document.getElementById("vth-value").readOnly = false;
    document.getElementById("rth-value").readOnly = false;
    document.getElementById("r1-value").readOnly = false;
    document.getElementById("r2-value").readOnly = false;
    document.getElementById("r3-value").readOnly = false;
    document.getElementById("rl-value").readOnly = false;
    document.getElementById("vdc-value").readOnly = false;
    document.getElementById("sim-1_s1").disabled = false;
    document.getElementById("sim-2_s1").disabled = false;
    document.getElementById("sim-1_s1").style.background = "green";
    document.getElementById("sim-2_s1").style.background = "red";
  }
  if(document.getElementById("power-switch").checked == false){
      document.getElementById("instance-1").disabled = true;
      document.getElementById("instance-1").style.background = "rgba(0, 0, 255, 0.404)";
      document.getElementById("instance-2").disabled = true;
      document.getElementById("instance-2").style.background = "rgba(0, 0, 255, 0.404)";
      document.getElementById("instance-3").disabled = true;
      document.getElementById("instance-3").style.background = "rgba(0, 0, 255, 0.404)";
      document.getElementById("instance-4").disabled = true;
      document.getElementById("instance-4").style.background = "rgba(0, 0, 255, 0.404)";
      document.getElementById("instance-5").disabled = true;
      document.getElementById("instance-5").style.background = "rgba(0, 0, 255, 0.404)";
      document.getElementById("main_ckt").style.display = "none";
      document.getElementById("rth_ckt").style.display = "none";
      document.getElementById("vth_ckt").style.display = "none";
      document.getElementById("eqv_ckt").style.display = "none";
      document.getElementById("am-value").style.display = "none";
      document.getElementById("am-value1").style.display = "none";
      document.getElementById("vs-value").readOnly = true;
      document.getElementById("vth-value").readOnly = true;
      document.getElementById("rth-value").readOnly = true;
      document.getElementById("r1-value").readOnly = true;
      document.getElementById("r2-value").readOnly = true;
      document.getElementById("r3-value").readOnly = true;
      document.getElementById("rl-value").readOnly = true;
      document.getElementById("vdc-value").readOnly = true;
      document.getElementById("vs-value").value = "";
      document.getElementById("vth-value").value = "";
      document.getElementById("rth-value").value = "";
      document.getElementById("r1-value").value = "";
      document.getElementById("r2-value").value = "";
      document.getElementById("r3-value").value = "";
      document.getElementById("rl-value").value = "";
      document.getElementById("vdc-value").value = "";
      document.getElementById("sim-1_s1").disabled = true;
      document.getElementById("sim-2_s1").disabled = true;
      document.getElementById("sim-1").disabled = true;
      document.getElementById("sim-2").disabled = true;
      document.getElementById("sim-1_s1").style.background = "rgba(0, 128, 0, 0.386)";
      document.getElementById("sim-2_s1").style.background = "rgba(255, 0, 0, 0.404)";
      document.getElementById("sim-1").style.background = "rgba(0, 128, 0, 0.386)";
      document.getElementById("sim-2").style.background = "rgba(255, 0, 0, 0.404)";
    }
}


// --------------------INSTANCE ONE--------------------
function vxil_ckt_sim() {
  alert("Finding Load Current (IL) across load resistance (RL)");
  document.getElementById("main_ckt").style.display = "block";
  document.getElementById("instance-4-sim").style.display = "none";
  document.getElementById("instance-3-sim").style.display = "none";
  document.getElementById("instance-2-sim").style.display = "none";
  document.getElementById("instance-1-sim").style.display = "block";
  document.getElementById("instance-5-sim").style.display = "none";
  document.getElementById("rth_ckt").style.display = "none";
  document.getElementById("vth_ckt").style.display = "none";
  document.getElementById("eqv_ckt").style.display = "none";
  document.getElementById("rl-value").style.display = "block";
  document.getElementById("rl-label").style.display = "block";
  document.getElementById("vdc-value").style.display = "none";
  document.getElementById("vdc-label").style.display = "none";
  document.getElementById("vs-value").style.display = "block";
  document.getElementById("vs-label").style.display = "block";
  document.getElementById("r1-value").style.display = "block";
  document.getElementById("r1-label").style.display = "block";
  document.getElementById("r2-value").style.display = "block";
  document.getElementById("r2-label").style.display = "block";
  document.getElementById("r3-value").style.display = "block";
  document.getElementById("r3-label").style.display = "block";
  document.getElementById("vth-value").style.display = "none";
  document.getElementById("vth-label").style.display = "none";
  document.getElementById("rth-value").style.display = "none";
  document.getElementById("rth-label").style.display = "none";
  document.getElementById("am-value").style.display = "block";
  document.getElementById("am-value1").style.display = "none";
  document.getElementById("am-value2").style.display = "none";
  document.getElementById("am-value3").style.display = "none";
  document.getElementById("instance-5-text").style.display = "none";
  document.getElementById("input-fields-3").style.marginTop = "0vw";
  document.getElementById("am-value").value = "0";
  document.getElementById("am-value1").value = "";
  document.getElementById("am-value2").value = "";
  document.getElementById("am-value3").value = "";
}


var vs, r1, r2, r3, rl,Il,a;
var tabrowindex = 0;
var arr = [];
var table;
var load1;
var columns;

function vxil_calc(){
  vs = document.getElementById("vs-value").value;
  r1 = document.getElementById("r1-value").value;
  r2 = document.getElementById("r2-value").value;
  r3 = document.getElementById("r3-value").value;
  rl = document.getElementById("rl-value").value;

  // --------------------CALCULATION OF Il FOR INSTANCE 1--------------------
  a = (parseFloat(r1)+parseFloat(r2))
  Il = ((parseFloat(vs)*parseFloat(r2))/((parseFloat(r1)*parseFloat(r2))+(parseFloat(r3)+parseFloat(rl))*(parseFloat(a))))
  document.getElementById("am-value").value = Il.toPrecision(3);
  // --------------------TABLE CREATION--------------------
  table = document.getElementById("obs-table");
  arr[0] = tabrowindex + 1;
  arr[1] = document.getElementById("vs-value").value;
  arr[2] = document.getElementById("am-value").value;

  if (table.rows.length <= 15){
      var row = table.insertRow(++tabrowindex);
      for (var a = 0; a < 3; a++) {
      var cell = row.insertCell(a);
      cell.innerHTML = arr[a];
      }
  }
  columns = table.rows[tabrowindex].cells[1];
  load1 = columns.innerHTML;
  

  document.getElementById("r1-value").readOnly = true;
  document.getElementById("r2-value").readOnly = true;
  document.getElementById("r3-value").readOnly = true;
}


// --------------------INSTANCE TWO--------------------
function vxrth_ckt_sim() {
  alert("Finding Thevenin Resistance");
  document.getElementById("main_ckt").style.display = "none";
  document.getElementById("instance-1-sim").style.display = "none";
  document.getElementById("instance-2-sim").style.display = "block";
  document.getElementById("instance-3-sim").style.display = "none";
  document.getElementById("instance-4-sim").style.display = "none";
  document.getElementById("instance-5-sim").style.display = "none";
  document.getElementById("rth_ckt").style.display = "block";
  document.getElementById("vdc-value").style.display = "block";
  document.getElementById("vdc-value").readOnly = true;
  document.getElementById("vdc-label").style.display = "block";
  document.getElementById("vth_ckt").style.display = "none";
  document.getElementById("eqv_ckt").style.display = "none";
  document.getElementById("rl-value").style.display = "block";
  document.getElementById("rl-label").style.display = "block";
  document.getElementById("vs-value").style.display = "block";
  document.getElementById("vs-label").style.display = "block";
  document.getElementById("r1-value").style.display = "block";
  document.getElementById("r1-label").style.display = "block";
  document.getElementById("r2-value").style.display = "block";
  document.getElementById("r2-label").style.display = "block";
  document.getElementById("r3-value").style.display = "block";
  document.getElementById("r3-label").style.display = "block";
  document.getElementById("vth-value").style.display = "none";
  document.getElementById("vth-label").style.display = "none";
  document.getElementById("rth-value").style.display = "none";
  document.getElementById("rth-label").style.display = "none";
  document.getElementById("am-value").style.display = "none";
  document.getElementById("am-value1").style.display = "block";
  document.getElementById("am-value2").style.display = "none";
  document.getElementById("am-value3").style.display = "none";
  document.getElementById("instance-5-text").style.display = "none";
  document.getElementById("input-fields-3").style.marginTop = "0vw";
  document.getElementById("am-value").value = "";
  document.getElementById("am-value1").value = "0";
  document.getElementById("am-value2").value = "";
  document.getElementById("am-value3").value = "";

}


var vdc,idc,rth,vs,r1,r2,r3,rl;
var tabrowindex1 = 0;
var arr1 = [];
var table1;
var load2;
var columns1;

function vxrth_calc(){
  vs = document.getElementById("vs-value").value;
  r1 = document.getElementById("r1-value").value;
  r2 = document.getElementById("r2-value").value;
  r3 = document.getElementById("r3-value").value;
  rl = document.getElementById("rl-value").value;
  vdc = document.getElementById("vdc-value").value;

  // --------------------CALCULATION OF Rth FOR INSTANCE 2--------------------
  rth = (((parseFloat(r1)*parseFloat(r2))+(parseFloat(r2)*parseFloat(r3))+(parseFloat(r1)*parseFloat(r3)))/(parseFloat(r1)+parseFloat(r2)))

  document.getElementById("am-value1").value = rth.toPrecision(3);
  // document.getElementById("idc-value").value = idc.toPrecision(3);
  document.getElementById("rth-value").value = rth.toPrecision(3);
  // --------------------TABLE CREATION--------------------
  table1 = document.getElementById("obs-table-2");
  arr1[0] = tabrowindex1 + 1;
  arr1[1] = document.getElementById("rth-value").value;


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


// --------------------INSTANCE THREE--------------------
function vxvth_ckt_sim() {
  alert("Finding Thevenin Voltage");
  document.getElementById("main_ckt").style.display = "none";
  document.getElementById("rth_ckt").style.display = "none";
  document.getElementById("vth_ckt").style.display = "block";
  document.getElementById("eqv_ckt").style.display = "none";
  document.getElementById("instance-1-sim").style.display = "none";
  document.getElementById("instance-2-sim").style.display = "none";
  document.getElementById("instance-3-sim").style.display = "block";
  document.getElementById("instance-4-sim").style.display = "none";
  document.getElementById("instance-5-sim").style.display = "none";
  document.getElementById("vdc-value").style.display = "none";
  document.getElementById("vdc-label").style.display = "none";
  document.getElementById("rl-value").style.display = "none";
  document.getElementById("rl-label").style.display = "none";
  document.getElementById("vs-value").style.display = "block";
  document.getElementById("vs-label").style.display = "block";
  document.getElementById("r1-value").style.display = "block";
  document.getElementById("r1-label").style.display = "block";
  document.getElementById("r2-value").style.display = "block";
  document.getElementById("r2-label").style.display = "block";
  document.getElementById("r3-value").style.display = "block";
  document.getElementById("r3-label").style.display = "block";
  document.getElementById("vth-value").style.display = "none";
  document.getElementById("vth-label").style.display = "none";
  document.getElementById("rth-value").style.display = "none";
  document.getElementById("rth-label").style.display = "none";
  document.getElementById("instance-5-text").style.display = "none";
  document.getElementById("input-fields-3").style.marginTop = "0vw";
  document.getElementById("am-value").value = "";
  document.getElementById("am-value1").value = "";
  document.getElementById("am-value2").value = "0";
  document.getElementById("am-value3").value = "";
  document.getElementById("am-value").style.display = "none";
  document.getElementById("am-value1").style.display = "none";
  document.getElementById("am-value2").style.display = "block";
  document.getElementById("am-value3").style.display = "none";
}


var vs,r1,r2,r3,vth;
var tabrowindex2 = 0;
var arr2 = [];
var table2;
var load3;
var columns2;

function vxvth_calc(){
  vs = document.getElementById("vs-value").value;
  r1 = document.getElementById("r1-value").value;
  r2 = document.getElementById("r2-value").value;
  r3 = document.getElementById("r3-value").value;

  // --------------------CALCULATION OF Vth FOR INSTANCE 3--------------------
  vth = ((parseFloat(vs)*parseFloat(r2))/(parseFloat(r1)+parseFloat(r2)))

  document.getElementById("am-value2").value = vth.toPrecision(3);
  document.getElementById("vth-value").value = vth.toPrecision(3);
  // --------------------TABLE CREATION--------------------
  table2 = document.getElementById("obs-table-3");
  arr2[0] = tabrowindex2 + 1;
  arr2[1] = document.getElementById("am-value2").value;


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


// --------------------INSTANCE FOUR--------------------
function eqv_ckt_sim() {
  alert("Finding Load Current (IL) from Thevenin equivalent circuit");
  document.getElementById("main_ckt").style.display = "none";
  document.getElementById("instance-1-sim").style.display = "none";
  document.getElementById("instance-2-sim").style.display = "none";
  document.getElementById("instance-3-sim").style.display = "none";
  document.getElementById("instance-4-sim").style.display = "block";
  document.getElementById("instance-5-sim").style.display = "none";
  document.getElementById("rth_ckt").style.display = "none";
  document.getElementById("vdc-value").style.display = "none";
  document.getElementById("vdc-label").style.display = "none";
  document.getElementById("rl-value").style.display = "block";
  document.getElementById("rl-label").style.display = "block";
  document.getElementById("vs-value").style.display = "none";
  document.getElementById("vs-label").style.display = "none";
  document.getElementById("r1-value").style.display = "none";
  document.getElementById("r1-label").style.display = "none";
  document.getElementById("r2-value").style.display = "none";
  document.getElementById("r2-label").style.display = "none";
  document.getElementById("r3-value").style.display = "none";
  document.getElementById("r3-label").style.display = "none";
  document.getElementById("vth_ckt").style.display = "none";
  document.getElementById("eqv_ckt").style.display = "block";
  document.getElementById("vth-value").style.display = "block";
  document.getElementById("vth-label").style.display = "block";
  document.getElementById("rth-value").style.display = "block";
  document.getElementById("rth-label").style.display = "block";
  document.getElementById("instance-5-text").style.display = "none";
  document.getElementById("input-fields-3").style.marginTop = "5vw";
  document.getElementById("am-value").value = "";
  document.getElementById("am-value1").value = "";
  document.getElementById("am-value2").value = "";
  document.getElementById("am-value3").value = "0";
  document.getElementById("am-value").style.display = "none";
  document.getElementById("am-value1").style.display = "none";
  document.getElementById("am-value2").style.display = "none";
  document.getElementById("am-value3").style.display = "block";
}


var Il_eqv,vth,rth,rl;
var tabrowindex3 = 0;
var arr3 = [];
var table3;
var load4;
var columns3;

var tabrowindex4 = 0;
var arr4 = [];
var table4;
var load5;
var columns4;

function eqv_calc(){
  vth = document.getElementById("vth-value").value;
  rth = document.getElementById("rth-value").value;
  rl = document.getElementById("rl-value").value;

  // --------------------CALCULATION OF Il FOR INSTANCE 4--------------------
  Il_eqv = ((parseFloat(vth))/(parseFloat(rth)+parseFloat(rl)));

  document.getElementById("am-value3").value = Il_eqv.toPrecision(3);
  // --------------------TABLE CREATION--------------------
  table3 = document.getElementById("obs-table-4");
  arr3[0] = tabrowindex3 + 1;
  arr3[1] = document.getElementById("am-value3").value;

  if (table3.rows.length <= 15){
      var row3 = table3.insertRow(++tabrowindex3);
      for (var a = 0; a < 2; a++) {
      var cell3 = row3.insertCell(a);
      cell3.innerHTML = arr3[a];
      }
  }
  columns3 = table3.rows[tabrowindex3].cells[1];
  load4 = columns3.innerHTML;

  table4 = document.getElementById("obs-table-5");
  arr4[0] = tabrowindex4 + 1;
  arr4[1] = document.getElementById("vs-value").value;
  arr4[2] = document.getElementById("vth-value").value;
  if (table4.rows.length <= 30){
      var row4 = table4.insertRow(++tabrowindex4);
      for (var a = 0; a < 3; a++) {
      var cell4 = row4.insertCell(a);
      cell4.innerHTML = arr4[a];
      }
  }
  if (table4.rows.length >= 6) {
      document.getElementById("plot-btn").style.backgroundColor = "green";
      document.getElementById("plot-btn").disabled = false;
  }
  columns4 = table4.rows[tabrowindex4].cells[1];
  load5 = columns4.innerHTML;
}


// --------------------INSTANCE FIVE--------------------
function vsvth_plot(){
  document.getElementById("main_ckt").style.display = "none";
  document.getElementById("instance-1-sim").style.display = "none";
  document.getElementById("instance-2-sim").style.display = "none";
  document.getElementById("instance-3-sim").style.display = "none";
  document.getElementById("instance-4-sim").style.display = "none";
  document.getElementById("instance-5-sim").style.display = "block";
  document.getElementById("rth_ckt").style.display = "none";
  document.getElementById("vdc-value").style.display = "none";
  document.getElementById("vdc-label").style.display = "none";
  document.getElementById("rl-value").style.display = "none";
  document.getElementById("rl-label").style.display = "none";
  document.getElementById("vs-value").style.display = "none";
  document.getElementById("vs-label").style.display = "none";
  document.getElementById("r1-value").style.display = "none";
  document.getElementById("r1-label").style.display = "none";
  document.getElementById("r2-value").style.display = "none";
  document.getElementById("r2-label").style.display = "none";
  document.getElementById("r3-value").style.display = "none";
  document.getElementById("r3-label").style.display = "none";
  document.getElementById("vth_ckt").style.display = "none";
  document.getElementById("eqv_ckt").style.display = "none";
  document.getElementById("vth-value").style.display = "none";
  document.getElementById("vth-label").style.display = "none";
  document.getElementById("rth-value").style.display = "none";
  document.getElementById("rth-label").style.display = "none";
  document.getElementById("instance-5-text").style.display = "block";
  document.getElementById("am-value").value = "";
  document.getElementById("am-value1").value = "";
  document.getElementById("am-value2").value = "";
  document.getElementById("am-value3").value = "";
  document.getElementById("am-value").style.display = "none";
  document.getElementById("am-value1").style.display = "none";
  document.getElementById("am-value2").style.display = "none";
  document.getElementById("am-value3").style.display = "none";
}


// --------------------PLOTTING--------------------
function plotting() {
  Highcharts.chart("pr-plot", {
    data: {
      table: "obs-table-5",
      startRow: 1,
      startColumn: 1,
      endColumn: 2
    },
    chart: {
      type: "spline"
    },
    title: {
      text: "SOURCE VOLTAGE VERSUS THEVENIN VOLTAGE PLOT"
    },
    yAxis: {
      title: {
        text: "THEVENIN VOLTAGE"
      }
    },
    legend: {
      enabled: false
    },
    xAxis: {
      
      title: {
        text: "SOURCE VOLTAGE"
      }
    },
    tooltip: {
      pointFormat: "{point.x}<b>{point.y}</b>"
    }
  });
  alert("Graph Plotted Successfully");
  document.getElementById("next-btn").style.display = "block";
}