// --------------------DC SLIDER--------------------
var dcsliderval;
function dcsliderChange() {
  dcsliderval = document.getElementById("dc-slider").value;
  document.getElementById("dc-value").value = dcsliderval;
  fbias();
}

var tc;
function txtchng() {
    tc = document.getElementById("dc-value").value;
    document.getElementById("dc-slider").value = tc;
}
// --------------------R SLIDER--------------------
var rsliderval;
function rsliderChange() {
  dcsliderval = document.getElementById("r-slider").value;
  document.getElementById("r-value").value = dcsliderval;
  fbias();
}

var td;
function txtchng1() {
    td = document.getElementById("r-value").value;
    document.getElementById("r-slider").value = td;
}
// --------------------L SLIDER--------------------
var lsliderval;
function lsliderChange() {
  dcsliderval = document.getElementById("l-slider").value;
  document.getElementById("l-value").value = dcsliderval;
  fbias();
}

var te;
function txtchng2() {
    te = document.getElementById("l-value").value;
    document.getElementById("l-slider").value = te;
}

// --------------------C SLIDER--------------------
var rsliderval;
function csliderChange() {
  dcsliderval = document.getElementById("c-slider").value;
  document.getElementById("c-value").value = dcsliderval;
  fbias();
}

var tf;
function txtchng3() {
    tf = document.getElementById("c-value").value;
    document.getElementById("c-slider").value = tf;
}
// --------------------POWER ON--------------------
function poweron(){
    if(document.getElementById("power-switch").checked==true){
        document.getElementById("dc-slider").disabled=false;
        document.getElementById("r-slider").disabled=false;
        document.getElementById("l-slider").disabled=false;
        document.getElementById("c-slider").disabled=false;
        document.getElementById("dc-value").value="0";
        document.getElementById("am-value").value="0";
        document.getElementById("am-value1").value="0";
    }
    if(document.getElementById("power-switch").checked==false){
        document.getElementById("dc-slider").disabled=true;
        document.getElementById("r-slider").disabled=true;
        document.getElementById("l-slider").disabled=true;
        document.getElementById("c-slider").disabled=true;
        document.getElementById("dc-value").value="";
        document.getElementById("am-value").value="";
        document.getElementById("am-value1").value="";
    }
}

var vs, frq, vin, x, xl, w, xc, c, r,mz,fi,a,b,imp,i,pf,p,d,e,f,g,h;
var aa, bb, cc;


function sim_calc(){

    //---------------------VOLTMETER--------------
    vs = 230;
    frq = 50;
    x= document.getElementById("dc-value").value;

    vin= parseFloat(x)*vs;
    document.getElementById("am-value1").value= vin.toPrecision(8);
    //---------------------INDUCTIVE REACTANCE--------------
    w = 314.16;
    aa = document.getElementById("l-value").value;
    l = parseInt(aa)*Math.pow(10,-3);

    xl = parseFloat(w)*parseFloat(l);
    document.getElementById("XL_out").value = xl.toPrecision(8);
    //---------------------INDUCTIVE CAPACITANCE--------------
    bb = document.getElementById("c-value").value;
    c = parseFloat(bb)*Math.pow(10,-6);

    xc = (1/(parseFloat(w)*parseFloat(c)));
    document.getElementById("XC_out").value = xc.toPrecision(16);
    //---------------MAGNITUDE OF IMPEDANCE-------------------
    r = document.getElementById("r-value").value;
    d = parseFloat(xc);
    e = parseFloat(xl);
    g = Math.pow(r,2);
    h = e - d;
    mz = Math.sqrt(g + Math.pow(h,2));
    document.getElementById("Z_out").value = mz.toPrecision(16);

    //---------------PHASE OF IMPEDANCE-------------------
    a = ((e-d)/parseFloat(r));
    b = (180/Math.PI);
    fi = ((Math.atan(a))*b);
    document.getElementById("fi_out").value = fi.toPrecision(8);
    
    //---------------IMPEDANCE-------------------
    document.getElementById("imp_out").value = mz.toPrecision(8);
    document.getElementById("ang_out").value = fi.toPrecision(8);

     //---------------NET CURRENT-------------------

     i = (parseFloat(vin)/parseFloat(mz));
     document.getElementById("I_out").value = i.toPrecision(4);
     document.getElementById("am-value").value = i.toPrecision(4);
     cc = -parseFloat(fi);
     document.getElementById("ang_out1").value = cc.toPrecision(4);


     //---------------POWER FACTOR-------------------
     pf = (parseFloat(r)/parseFloat(mz));
     document.getElementById("pf_out").value = pf.toPrecision(4);

     //---------------POWER------------------
     p = parseFloat(vin)*parseFloat(i)*parseFloat(pf);
     document.getElementById("P_out").value = p.toPrecision(8);
}