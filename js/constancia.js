
function fnPDF(){

var doc = new jsPDF();

doc.text(20, 20, 'CONSTANCIA DE CUMPLIMIENTO');

doc.save('constancia.pdf');
}
