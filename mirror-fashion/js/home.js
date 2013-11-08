var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
var bannerAtual = 0;

function validaBusca() {
	if (document.querySelector("#q").value == '') {
		//alert("Não podia ter deixado em branco a busca!!");
		document.querySelector("#form-busca").style.background = 'red';
		return false;
	}
}

function trocaBanner() {
	bannerAtual = (bannerAtual +1) % banners.length;
	document.querySelector(".destaque img").src = banners[bannerAtual];
}

document.querySelector("#form-busca").onsubmit = validaBusca;
setInterval(trocaBanner, 4000);

$('.painel').addClass('painel-compacto');

$('.painel button').click(function() {
	$(this).parent().removeClass('painel-compacto');
});
