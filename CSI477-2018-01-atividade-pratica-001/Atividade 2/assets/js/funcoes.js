	
    /*MODAL*/

	$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})


  $("#botao").click(function () {
    calcular();
  })

  /*ESCALA*/

	function calcular() {

  //pega valores inseridos, e substitui virgula por ponto
  var amplitude = document.getElementById('amplitude').value.replace(/,/g, '.');;
  var tempo = document.getElementById('tempo').value.replace(/,/g, '.');;

  // valida se os campos não estão vazios
  if (amplitude == '' || tempo == '') {
  	document.getElementById("titulo").innerHTML= 'Opss! Os campos estão vazios!';
    document.getElementById("message").innerHTML =  'Preencha os campos';
    return false;
  }

  // calcula IMC
  var resultado = Math.log10(amplitude) + 3*Math.log10(8*tempo) - 2.92;;
  var message = '';
  var titulo='';
  var result= '';

  // verifica situação
  if (resultado < 3.5) {
  	titulo= 'Magnitude menor que 3,5';
    message = 'Geralmente não se sente, mas é detectado/registrado.';
  } else if (resultado >= 3.5 && resultado <= 5.4) {
  	titulo= 'Magnitude entre 3,5 e 5,4';
    message = 'Frequentemente sentido, mas raramente causa danos.';
  } else if (resultado >= 5.5 && resultado <= 6.0) {
  	titulo= 'Magnitude entre 5,5 e 6,0';
    message = 'No máximo causa pequenos danos a prédios bem construídos, mas pode danificar seriamente casas mal construídas em regiões próximas.';
  } else if (resultado >= 6.1 && resultado <= 6.9) {
    titulo = 'Magnitude entre 6,1 e 6,9';
    message = 'Pode ser destrutivo em torno de até 100km do epicentro.';
  } else if (resultado >= 7.0 && resultado <= 7.9) {
    titulo = 'Magnitude entre 7,0 e 7,9';
    message ='Grande terremoto. Pode causar sérios danos numa grande faixa.';
  } else if (resultado >= 8) {
    titulo = 'Magnitude maior que 8';
    message ='Enorme terremoto. Pode causar graves danos em muitas áreas mesmo que estejam centenas de quilômetros.'
  } 

  // mostra resultado
  resultado = resultado.toFixed(2).replace(/\./g, ',');
  document.getElementById("titulo").innerHTML= titulo;
  document.getElementById("result").innerHTML = 'O grau de magnitude do terremoto é ' + resultado ; 
  document.getElementById("message").innerHTML = message;
}
