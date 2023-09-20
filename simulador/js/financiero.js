//inicia financiero
function mostrarInfo1(){
    let corridaFinanciera = document.getElementById('corridas');
    let corrida = corridaFinanciera.value;
     switch (corrida){
        case "0":
            document.getElementById('info1-1').style.display='none';
            document.getElementById('info1-2').style.display='none';
            document.getElementById('info1-3').style.display='none';
            document.getElementById('info1-4').style.display='none';
            break;

         case "1":
            document.getElementById('info1-1').style.display='flex';
            document.getElementById('info1-2').style.display='none';
            document.getElementById('info1-3').style.display='none';
            document.getElementById('info1-4').style.display='none';
            break;

        case "2":
            document.getElementById('info1-1').style.display='none';
            document.getElementById('info1-2').style.display='flex';
            document.getElementById('info1-3').style.display='none';
            document.getElementById('info1-4').style.display='none';
            break;

        case "3":
            document.getElementById('info1-1').style.display='none';
            document.getElementById('info1-2').style.display='none';
            document.getElementById('info1-3').style.display='flex';
            document.getElementById('info1-4').style.display='none';
            break;
        case "4":
            document.getElementById('info1-1').style.display='none';
            document.getElementById('info1-2').style.display='none';
            document.getElementById('info1-3').style.display='none';
            document.getElementById('info1-4').style.display='flex';
            break;       
        }
}