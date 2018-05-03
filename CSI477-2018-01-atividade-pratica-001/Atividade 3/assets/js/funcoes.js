	
	$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

  $("#botao").click(function () {
    calcular();
  })

	function calcular() {

  //pega valores inseridos, e substitui virgula por ponto
  var peso = document.getElementById('peso').value.replace(/,/g, '.');;
  var altura = document.getElementById('altura').value.replace(/,/g, '.');;

  // valida se os campos não estão vazios
  if (peso == '' || altura == '') {
  	document.getElementById("titulo").innerHTML= 'Opss! Os campos estão vazios!';
    document.getElementById("message").innerHTML =  'Preencha os campos';
    return false;
  }

  // calcula IMC
  var resultado = (peso / (altura * altura));
  var pesoideal = (resultado*(altura*altura));
  var message = '';
  var titulo ='';
  var result = '';

  // verifica situação
  if (resultado < 18.5) {
    titulo= 'Você está subnutrido';
    message = 'Você está muito abaixo do peso!';
  } else if (resultado >= 18.5 && resultado <= 24.9) {
    titulo= 'Você está com o peso saudável!';
    message = 'Essa classificação garante um risco menor para diversas doenças que variam de anemia a infarto. Estar nessa classificação é estar no peso ideal para seu corpo, mas é bom lembrar de verificar a circunferência da cintura em busca de excesso de gordura. Para mulheres, a cintura deve ter até 80 cm. Para homens, até 94 cm. A cintura deve ser medida logo abaixo das costelas.';
  } else if (resultado >= 25.0 && resultado <= 29.9) {
    titulo= 'Você está com sobrepeso!';
    message = 'O sobrepeso pode causar alguns problemas de circulação no corpo, além de fadiga, mas assim como a magreza leve, se o IMC estiver pouco acima de 25, não é preocupante. Uma dieta com um pouco menos de calorias ou um pouco mais de exercícios na rotina pode resolver a situação.';
  } else if (resultado >= 30.0 && resultado <= 34.9) {
    titulo = 'Você está com obesidade grau 1!';
    message = 'Acima do IMC 30 a pessoa é considerada obesa, o que por si só já é uma doença. Graças ao peso, o risco para diversas condições aumenta consideravelmente. Um médico pode indicar um meio ideal para a regulação do peso.';
  } else if (resultado >= 35.0 && resultado <= 39.9) {
    titulo = 'Você está com obesidade grau 2!';
    message ='Estar com obesidade grau II é ter riscos elevados de diabetes, hipertensão, além de câncer e infarto. Procure um médico para lidar com a situação.';
  } else if (resultado >= 40) {
    titulo = 'Você está com obesidade grau 3!';
    message ='Chamada de obesidade mórbida, esta condição representa sérios riscos à saúde. Procure ajuda médica.'
  } 

  // mostra resultado
  resultado = resultado.toFixed(2).replace(/\./g, ',');
  pesoideal = pesoideal.toFixed(2).replace(/\./g, ',');
  document.getElementById("titulo").innerHTML= titulo;
  document.getElementById("result").innerHTML = 'Seu IMC é  ' + resultado;
  document.getElementById("pesoideal").innerHTML= 'O seu peso ideal é  ' + pesoideal; 
  document.getElementById("message").innerHTML = '<br><br>' + message;
}
