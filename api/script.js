$(document).ready(function () {
    $("#localizarcep").click(function () {
        let cep = $("#cep").val();
        $.get("https://brasilapi.com.br/api/cep/v2/" + cep,
            function (data) {
                let endereco = data.street;
                let bairro = data.neighborhood;
                let cidade = data.city;
                let estado = data.state;
                $("#endereco").val(endereco);
                $("#bairro").val(bairro);
                $("#cidade").val(cidade);
                $("#estado").val(estado);
                $("#showCep").show();
            }
        );
    });
    $("#buscarcod").click(function () {
        let codTabela = $("#codtabela").val();
        $.get("https://brasilapi.com.br/api/fipe/preco/v1/" + codTabela,
            function (data) {
                dados = data;
                $("#selects").html("<option selected disabled hidden>Selecione o ano do veículo</option>");
                for (var i = 0; i < dados.length; i++) {
                    let item = document.createElement('option');
                    item.appendChild(document.createTextNode(dados[i].anoModelo));
                    item.setAttribute("id", "opcao" + i);
                    item.setAttribute("value", i);
                    selects.appendChild(item);
                }
                $("#showAno").show();
                $("#showHideFipe").hide();
                $("#selects").change(function () {
                    let indice = $(this).children(":selected").attr("value");
                    let tipo = dados[indice].tipoVeiculo;
                    let marca = dados[indice].marca;
                    let modelo = dados[indice].modelo;
                    let combustivel = dados[indice].combustivel;
                    let valor = dados[indice].valor;
                    let mesr = dados[indice].mesReferencia;
                    $("#tipo").val(tipo);
                    $("#marca").val(marca);
                    $("#modelo").val(modelo);
                    $("#combustivel").val(combustivel);
                    $("#valor").val(valor);
                    $("#mesref").val(mesr);
                    $("#showHideFipe").show();
                });
            }
        );
    });
});