function postlabsubmit(){
    if(document.getElementById("qs1_op1").checked == true){
        document.getElementById("ans1").style.display = "block";
        document.getElementById("ans1").innerHTML = "Ans: Yes, that is correct. The superposition theorem states that the total response of a linear system to multiple independent sources is equal to the sum of the responses to each individual source considered separately. It is not necessary to consider only one independent source at a time, and in many cases, multiple independent sources are considered simultaneously. The superposition theorem applies to linear circuits, linear differential equations, and other linear systems.";
        document.getElementById("ans1").style.color = "green";
    }
    if(document.getElementById("qs1_op2").checked == true){
        document.getElementById("ans1").style.display = "block";
        document.getElementById("ans1").innerHTML = "Ans: No, that is incorrect. The superposition theorem states that the total response of a linear system to multiple independent sources is equal to the sum of the responses to each individual source considered separately. It is not necessary to consider only one independent source at a time, and in many cases, multiple independent sources are considered simultaneously. The superposition theorem applies to linear circuits, linear differential equations, and other linear systems.";
        document.getElementById("ans1").style.color = "red";
    }
    if(document.getElementById("qs2_op1").checked == true){
        document.getElementById("ans2").style.display = "block";
        document.getElementById("ans2").innerHTML = "Ans: Yes, that is correct. The superposition theorem principle can be applied to power calculation in electrical circuits. In a linear circuit, the total power can be calculated as the sum of the powers delivered by each independent source considered separately. This is because the power delivered by each source is proportional to the square of the voltage or current produced by that source, and the superposition theorem states that the total response of a linear system to multiple independent sources is equal to the sum of the responses to each individual source considered separately.";
        document.getElementById("ans2").style.color = "green";
    }
    if(document.getElementById("qs2_op2").checked == true){
        document.getElementById("ans2").style.display = "block";
        document.getElementById("ans2").innerHTML = "Ans: No, that is incorrect. The superposition theorem principle can be applied to power calculation in electrical circuits. In a linear circuit, the total power can be calculated as the sum of the powers delivered by each independent source considered separately. This is because the power delivered by each source is proportional to the square of the voltage or current produced by that source, and the superposition theorem states that the total response of a linear system to multiple independent sources is equal to the sum of the responses to each individual source considered separately.";
        document.getElementById("ans2").style.color = "red";
    }
    document.getElementById("ans3").style.display = "block";
    document.getElementById("ans3").innerHTML = "Ans: The major advantage of implementing the superposition theorem is that it provides a systematic and efficient method for analyzing complex electrical circuits with multiple sources. The theorem states that the voltage or current at any point in a linear circuit with multiple independent sources can be calculated as the sum of the voltages or currents produced by each source individually, as if they were the only source present in the circuit."
    document.getElementById("ans3").style.color = "green";
    if(document.getElementById("qs4_op1").checked == true){
        document.getElementById("ques_4_ans_div").style.display = "block";
        document.getElementById("ques_4_div").style.color = "red";
        document.getElementById("ques_4_ans_div").style.color = "red";
        document.getElementById("ques_4_ans_div").style.border = "0.066vw solid black"
    }
    if(document.getElementById("qs4_op2").checked == true){
        document.getElementById("ques_4_ans_div").style.display = "block";
        document.getElementById("ques_4_div").style.color = "green";
        document.getElementById("ques_4_ans_div").style.color = "green";
        document.getElementById("ques_4_ans_div").style.border = "0.066vw solid black"
    }
    if(document.getElementById("qs4_op3").checked == true){
        document.getElementById("ques_4_ans_div").style.display = "block";
        document.getElementById("ques_4_div").style.color = "red";
        document.getElementById("ques_4_ans_div").style.color = "red";
        document.getElementById("ques_4_ans_div").style.border = "0.066vw solid black"
    }
    if(document.getElementById("qs4_op4").checked == true){
        document.getElementById("ques_4_ans_div").style.display = "block";
        document.getElementById("ques_4_div").style.color = "red";
        document.getElementById("ques_4_ans_div").style.color = "red";
        document.getElementById("ques_4_ans_div").style.border = "0.066vw solid black"
    }
    document.getElementById("ans5").style.display = "block";
    document.getElementById("ans5").innerHTML = "Ans: The values of dependent sources depends upon other circuit parameters and killing them would result in incorrect answer."
    document.getElementById("ans5").style.color = "green";
    if(document.getElementById("qs6_op1").checked == true){
        document.getElementById("ques_6_ans_div").style.display = "block";
        document.getElementById("ques_6_div").style.color = "red";
        document.getElementById("ques_6_ans_div").style.color = "red";
        document.getElementById("ques_6_ans_div").style.border = "0.066vw solid black"
    }
    if(document.getElementById("qs6_op2").checked == true){
        document.getElementById("ques_6_ans_div").style.display = "block";
        document.getElementById("ques_6_div").style.color = "red";
        document.getElementById("ques_6_ans_div").style.color = "red";
        document.getElementById("ques_6_ans_div").style.border = "0.066vw solid black"
    }
    if(document.getElementById("qs6_op3").checked == true){
        document.getElementById("ques_6_ans_div").style.display = "block";
        document.getElementById("ques_6_div").style.color = "green";
        document.getElementById("ques_6_ans_div").style.color = "green";
        document.getElementById("ques_6_ans_div").style.border = "0.066vw solid black"
    }
    if(document.getElementById("qs6_op4").checked == true){
        document.getElementById("ques_6_ans_div").style.display = "block";
        document.getElementById("ques_6_div").style.color = "red";
        document.getElementById("ques_6_ans_div").style.color = "red";
        document.getElementById("ques_6_ans_div").style.border = "0.066vw solid black"
    }

}