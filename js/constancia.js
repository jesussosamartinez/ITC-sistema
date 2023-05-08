

function fnPDF(){

var doc = new                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        jsPDF();



doc.setFontSize(14);
doc.setTextColor(100);
doc.setFontType("bold");
doc.setFont("montserrat");
doc.text(35, 30, 'LISTA DE ASISTENCIA DE ACTIVIDAD COMPLEMENTARIA');

doc.html(document.querySelector('#tbllist'));



doc.save('constancia.pdf');
}

function fnEvaluacionDesempeño(){
    var formato = new jsPDF();

    formato.text(20, 20, 'FORMATO DE EVALUACIÓN AL DESEMPEÑO DE LA ACTIVIDAD COMPLEMENTARIA')
}