;(function() {
'use strict';
var define = undefined;

var acessibilidade_text = '<article style="text-align: justify">\
    <p>Este portal segue as diretrizes do e-MAG (Modelo de Acessibilidade em Governo Eletr&ocirc;nico), conforme as normas do Governo Federal, em obedi&ecirc;ncia ao Decreto 5.296, de 2.12.2004<br />&nbsp;<br />O termo acessibilidade significa incluir a pessoa com defici&ecirc;ncia na participa&ccedil;&atilde;o de atividades como o uso de produtos, servi&ccedil;os e informa&ccedil;&otilde;es. Alguns exemplos s&atilde;o os pr&eacute;dios com rampas de acesso para cadeira de rodas e banheiros adaptados para deficientes.<br /><br />Na internet, acessibilidade refere-se principalmente &agrave;s recomenda&ccedil;&otilde;es do WCAG (World Content Accessibility Guide) do W3C e no caso do Governo Brasileiro ao e-MAG (Modelo de Acessibilidade em Governo Eletr&ocirc;nico). O e-MAG est&aacute; alinhado as recomenda&ccedil;&otilde;es internacionais, mas estabelece padr&otilde;es de comportamento acess&iacute;vel para sites governamentais.<br /><br />Na parte superior do portal existe uma barra de acessibilidade onde se encontra atalhos de navega&ccedil;&atilde;o padronizados e a op&ccedil;&atilde;o para alterar o contraste. Essas ferramentas est&atilde;o dispon&iacute;veis em todas as p&aacute;ginas do portal.</p>\
    <p>Os atalhos padr&otilde;es s&atilde;o:</p><br />\
    <ul>\
        <li><strong>Teclando-se AltGr + 0</strong> em qualquer p&aacute;gina do portal, chega-se diretamente a p&aacute;gina de Acessibilidade.</li>\
        <li><strong>Teclando-se AltGr + 1</strong> em qualquer p&aacute;gina do portal, chega-se diretamente ao in&iacute;cio do menu principal</li>\
        <li><strong>Teclando-se AltGr + 2</strong> em qualquer p&aacute;gina do portal, chega-se diretamente ao in&iacute;cio do menu principal.</li>\
        <li><strong>Teclando-se AltGr + 3</strong> em qualquer p&aacute;gina do portal, chega-se diretamente em sua busca interna.</li>\
    </ul><br />\
    <p>Ao final desse texto, voc&ecirc; poder&aacute; baixar alguns arquivos que explicam melhor o termo acessibilidade e como deve ser implementado nos sites da Internet.</p><br />\
    <p><b>Leis e decretos sobre acessibilidade:</b></p>\
    <ul>\
        <li><u><a title="" href="http://www.planalto.gov.br/ccivil_03/_Ato2004-2006/2004/Decreto/D5296.htm" target="_self">Decreto n&ordm; 5.296 de 02 de dezembro de 2004&nbsp;</a></u> (link externo)</li>\
        <li><u><a title="" href="http://www.planalto.gov.br/ccivil_03/_ato2007-2010/2009/decreto/d6949.htm" target="_self">Decreto n&ordm; 6.949, de 25 de agosto de 2009</a></u> (link externo)&nbsp;- Promulga a Conven&ccedil;&atilde;o Internacional sobre os Direitos das Pessoas com Defici&ecirc;ncia e seu Protocolo Facultativo, assinados em Nova York, em 30 de mar&ccedil;o de 2007&nbsp;</li>\
        <li><u><a title="" href="http://www.planalto.gov.br/ccivil_03/_ato2011-2014/2012/Decreto/D7724.htm" target="_self">Decreto n&ordm; 7.724, de 16 de Maio de 2012</a></u>&nbsp;(link externo) - Regulamenta a Lei No 12.527, que disp&otilde;e sobre o acesso a informa&ccedil;&otilde;es.</li>\
        <li><u><a title="" href="https://www.governodigital.gov.br/documentos-e-arquivos/e-MAG%20V3.pdf" target="_self">Modelo de Acessibilidade de Governo Eletr&ocirc;nico</a></u>(link externo)</li>\
        <li><u><a title="" href="https://www.governodigital.gov.br/documentos-e-arquivos/legislacao/portaria3_eMAG.pdf" target="_self">Portaria n&ordm; 03, de 07 de Maio de 2007 - formato .pdf (35,5Kb)</a></u> (link externo) - Institucionaliza o Modelo de Acessibilidade em Governo Eletr&ocirc;nico &ndash; e-MAG&nbsp;</li>\
    </ul>\
</article>\
'; 




// Copyright (c) 2015 Florian Hartmann, https://github.com/florian https://github.com/florian/cookie.js
!function (a, b) {
    var c = function () {
        return c.get.apply(c, arguments)
    }, d = c.utils = {
        isArray: Array.isArray || function (a) {
            return "[object Array]" === Object.prototype.toString.call(a)
        }, isPlainObject: function (a) {
            return !!a && "[object Object]" === Object.prototype.toString.call(a)
        }, toArray: function (a) {
            return Array.prototype.slice.call(a)
        }, getKeys: Object.keys || function (a) {
            var b = [], c = "";
            for (c in a) a.hasOwnProperty(c) && b.push(c);
            return b
        }, encode: function (a) {
            return String(a).replace(/[,;"\\=\s%]/g, function (a) {
                return encodeURIComponent(a)
            })
        }, decode: function (a) {
            return decodeURIComponent(a)
        }, retrieve: function (a, b) {
            return null == a ? b : a
        }
    };
    c.defaults = {}, c.expiresMultiplier = 86400, c.set = function (c, e, f) {
        if (d.isPlainObject(c)) for (var g in c) c.hasOwnProperty(g) && this.set(g, c[g], e); else {
            f = d.isPlainObject(f) ? f : {expires: f};
            var h = f.expires !== b ? f.expires : this.defaults.expires || "", i = typeof h;
            "string" === i && "" !== h ? h = new Date(h) : "number" === i && (h = new Date(+new Date + 1e3 * this.expiresMultiplier * h)), "" !== h && "toGMTString" in h && (h = ";expires=" + h.toGMTString());
            var j = f.path || this.defaults.path;
            j = j ? ";path=" + j : "";
            var k = f.domain || this.defaults.domain;
            k = k ? ";domain=" + k : "";
            var l = f.secure || this.defaults.secure ? ";secure" : "";
            f.secure === !1 && (l = ""), a.cookie = d.encode(c) + "=" + d.encode(e) + h + j + k + l
        }
        return this
    }, c.setDefault = function (a, e, f) {
        if (d.isPlainObject(a)) {
            for (var g in a) this.get(g) === b && this.set(g, a[g], e);
            return c
        }
        if (this.get(a) === b) return this.set.apply(this, arguments)
    }, c.remove = function (a) {
        a = d.isArray(a) ? a : d.toArray(arguments);
        for (var b = 0, c = a.length; b < c; b++) this.set(a[b], "", -1);
        return this
    }, c.removeSpecific = function (a, b) {
        if (!b) return this.remove(a);
        a = d.isArray(a) ? a : [a], b.expires = -1;
        for (var c = 0, e = a.length; c < e; c++) this.set(a[c], "", b);
        return this
    }, c.empty = function () {
        return this.remove(d.getKeys(this.all()))
    }, c.get = function (a, b) {
        var c = this.all();
        if (d.isArray(a)) {
            for (var e = {}, f = 0, g = a.length; f < g; f++) {
                var h = a[f];
                e[h] = d.retrieve(c[h], b)
            }
            return e
        }
        return d.retrieve(c[a], b)
    }, c.all = function () {
        if ("" === a.cookie) return {};
        for (var b = a.cookie.split("; "), c = {}, e = 0, f = b.length; e < f; e++) {
            var g = b[e].split("="), h = d.decode(g.shift()), i = d.decode(g.join("="));
            c[h] = i
        }
        return c
    }, c.enabled = function () {
        if (navigator.cookieEnabled) return !0;
        var a = "_" === c.set("_", "_").get("_");
        return c.remove("_"), a
    }, "function" == typeof define && define.amd ? define(function () {
        return {cookie: c}
    }) : "undefined" != typeof exports ? exports.cookie = c : window.cookie = c
}("undefined" == typeof document ? null : document);
window.integracao = function (data) {
    const BASE = "https://caldazinha.go.gov.br/v3/";
    //const BASE = "https://localhost/caldazinha/wordpress/";

    var view_acessibilidade = document.querySelectorAll("#ng-integracao-acessibilidade"),
        view_pagina_acessibilidade = document.querySelectorAll("#ng-integracao-pagina-acessibilidade"),
        sendForm = true,
        svg_acessibilidade = "<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"\n" +
            "\t viewBox=\"0 0 491.975 491.975\" style=\"enable-background:new 0 0 491.975 491.975;\" xml:space=\"preserve\">\n" +
            "<g id=\"XMLID_28_\">\n" +
            "\t<path id=\"XMLID_31_\" d=\"M225.315,96.963c26.748,0,48.479-21.706,48.479-48.481C273.794,21.699,252.063,0,225.315,0\n" +
            "\t\tc-26.779,0-48.492,21.699-48.492,48.482C176.823,75.257,198.536,96.963,225.315,96.963z\"/>\n" +
            "\t<path id=\"XMLID_30_\" d=\"M300.233,371.688c-12.883,44.732-54.121,77.583-102.946,77.583c-59.126,0-107.209-48.085-107.209-107.193\n" +
            "\t\tc0-43.754,26.396-81.413,64.066-98.054V198.58c-61.69,18.581-106.764,75.847-106.764,143.498\n" +
            "\t\tc0,82.649,67.247,149.897,149.906,149.897c60.238,0,112.159-35.801,135.966-87.169l-16.926-33.255\n" +
            "\t\tC311.575,371.59,306.071,371.64,300.233,371.688z\"/>\n" +
            "\t<path id=\"XMLID_29_\" d=\"M441.48,429.237l-64.939-127.672c-4.847-9.553-14.645-15.566-25.363-15.566h-83.173v-18.966h71.582\n" +
            "\t\tc7.148,0,13.156-3.736,17.037-9.118c2.522-3.506,4.316-7.579,4.316-12.236c0-11.789-9.549-21.351-21.353-21.351h-43.125h-28.457\n" +
            "\t\tV160c0-17.692-13.118-42.704-42.689-42.704c-23.584,0-42.703,19.122-42.703,42.704v139.372c0,24.058,19.503,43.561,43.562,43.561\n" +
            "\t\th78.265h29.284l57.024,112.117c5.011,9.875,15.011,15.573,25.389,15.573c4.35,0,8.761-0.994,12.883-3.104\n" +
            "\t\tC443.054,460.401,448.628,443.251,441.48,429.237z\"/>\n" +
            "</g>\n" +
            "<g>\n" +
            "</g>\n" +
            "<g>\n" +
            "</g>\n" +
            "<g>\n" +
            "</g>\n" +
            "<g>\n" +
            "</g>\n" +
            "<g>\n" +
            "</g>\n" +
            "<g>\n" +
            "</g>\n" +
            "<g>\n" +
            "</g>\n" +
            "<g>\n" +
            "</g>\n" +
            "<g>\n" +
            "</g>\n" +
            "<g>\n" +
            "</g>\n" +
            "<g>\n" +
            "</g>\n" +
            "<g>\n" +
            "</g>\n" +
            "<g>\n" +
            "</g>\n" +
            "<g>\n" +
            "</g>\n" +
            "<g>\n" +
            "</g>\n" +
            "</svg>",

        _construct = function () {

            boletimCoronaVirus();

            if (data.apiLite && typeof data.apiLite == 'object') {

                if (data.apiLite.pageAcessibilidade == true) {
                    addPageAcessibilidade();
                }

                if (data.apiLite.atalhos == true) {
                    teclasAtalhos();
                }

                if (data.apiLite.altoContraste == true) {
                    altoConstraste(data.elemAltoContraste);
                }

                if (data.apiLite.fonts == true) {
                    acessibilidade();
                }

                if (data.apiLite.paginas && data.apiLite.paginas == true) {
                    listaPaginas();
                }

                if (data.apiLite.faleconosco && data.apiLite.faleconosco == true) {
                    faleConosco();
                    addCss();
                }

            } else {
                acessibilidade();
                addCss();
                teclasAtalhos();
                faleConosco();
                listaPaginas();
            }
        },

        ajax = function (url, params, ajaxSuccess) {
            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function () {
                if (xhttp.readyState === 4 && xhttp.status === 200) {
                    if (ajaxSuccess) ajaxSuccess(xhttp.responseText);
                }
            };

            xhttp.open("post", url, true);
            xhttp.send(params);
        },

        /**
         * Estilo padrÃ£o
         */
        addCss = function () {
            var link = document.createElement('link');
            link.type = 'text/css';
            link.rel = 'stylesheet';
            link.href = BASE + 'css/estilo.css?dados=' + JSON.stringify(data).replace(/#/g, '%23');

            document.querySelector("head").append(link);
        },

        /**
         * CSS do alto contraste
         */
        addCssAlto = function () {
            var class_secundaria = 'alto_contraste';

            if (data.bodyClass && data.bodyClass.length > 0) {
                document.querySelector("body").classList.add(data.bodyClass);
                if (data.bodyClass == class_secundaria) class_secundaria = null;
            } else {

                var link = document.createElement('link');
                link.type = 'text/css';
                link.id = 'ng-integracao-altocontraste-css';
                link.rel = 'stylesheet';

                if (data.linkAltoContraste) {
                    link.href = data.linkAltoContraste;
                } else {
                    link.href = BASE + 'css/altocontraste.css';
                }

                document.querySelector("head").append(link);

                // Altocontraste covid 19 NÃºcleoAdm
                link = document.createElement('link');
                link.type = 'text/css';
                link.id = 'ng-integracao-altocontraste-css-covid19';
                link.rel = 'stylesheet';
                link.href = BASE + "css/altocontraste-covid19.css";

                document.querySelector("head").append(link);
            }

            if (class_secundaria != null) document.querySelector("body").classList.add(class_secundaria);

        },

        /**
         * Barra de acessibilidade
         */
        acessibilidade = function () {
            if (view_acessibilidade[0] != undefined && typeof view_acessibilidade[0] == 'object') {

                var html = document.createElement("div");
                html.innerHTML = htmlAcessibilidade();

                view_acessibilidade[0].appendChild(html);
                updateFontSize();
                altoConstraste();
            } else if (data.elementsFont) {
                updateFontSize();
            }

            addPageAcessibilidade();

        },

        addPageAcessibilidade = function () {
            //PÃ¡gina de acessibilidade
            if (typeof view_pagina_acessibilidade[0] == 'object') {
                var html = document.createElement("div");
                if (acessibilidade_text.length > 0) {
                    html.innerHTML = acessibilidade_text;
                } else {
                    html.innerHTML = "Em manutenÃ§Ã£o aguarde alguns instantes...";
                }
                view_pagina_acessibilidade[0].innerHTML = '';
                view_pagina_acessibilidade[0].appendChild(html);
            }
        },

        altoConstraste = function (elem) {
            if (window.cookie.get('altocontraste') == "on") {
                addCssAlto();
            }

            elem = document.querySelectorAll(elem)[0] || view_acessibilidade[0].querySelectorAll(".link.alto")[0];

            elem.addEventListener("click", function (e) {
                // Valida o cookie para o tamanho da fonte personalizada
                if (window.cookie.get('altocontraste') == "on") {
                    var class_segundaria = "alto_contraste";
                    window.cookie.set('altocontraste', "off", {expires: 365, path: window.path_cookie});
                    var elem = document.querySelector("#ng-integracao-altocontraste-css");
                    if (elem) {
                        elem.parentNode.removeChild(elem);
                    }

                    if (data.bodyClass && data.bodyClass.length > 0) {
                        document.querySelector("body").classList.remove(data.bodyClass);
                        if (class_segundaria == data.bodyClass) class_segundaria = null;
                    }

                    if (class_segundaria != null) document.querySelector("body").classList.remove(class_segundaria);

                } else {
                    window.cookie.set('altocontraste', "on", {expires: 365, path: window.path_cookie});
                    addCssAlto();
                }
            }, false);

        },

        /**
         * Aumenta e diminui as fontes
         */
        updateFontSize = function () {
            var font_padrao = 14,
                elem_font_up = {},
                elem_font_default = {},
                elem_font_down = {};

            if (view_acessibilidade[0]) {
                elem_font_up = view_acessibilidade[0].querySelectorAll('.fontUp')[0];
                elem_font_default = view_acessibilidade[0].querySelectorAll('.fontDefault')[0];
                elem_font_down = view_acessibilidade[0].querySelectorAll('.fontLow')[0];
            } else if (data.elementsFont && typeof data.elementsFont == 'object') {
                elem_font_up = document.querySelectorAll(data.elementsFont.up)[0] || {};
                elem_font_default = document.querySelectorAll(data.elementsFont.default)[0] || {};
                elem_font_down = document.querySelectorAll(data.elementsFont.down)[0] || {};
            }

            if (data.fontDefault && !isNaN(data.fontDefault)) {
                font_padrao = data.fontDefault;
            }

            var body = document.getElementsByTagName('html'),
                font_default = body[0].style['font-size'].split('px')[0] || font_padrao,
                font_min = data.fontMin || 12,
                font_max = data.fontMax || 18;

            // Valida o cookie para o tamanho da fonte personalizada
            if (!isNaN(window.cookie.get('fontePersonalizada')) == true) {
                body[0].style['font-size'] = window.cookie.get('fontePersonalizada') + "px";
            } else {
                window.cookie.set('fontePersonalizada', font_default, {
                    expires: 365,
                    path: window.path_cookie
                });
            }

            var font_root = Number(window.cookie.get('fontePersonalizada'));

            elem_font_up.addEventListener("click", function (e) {
                if (font_root < font_max) {
                    e.preventDefault();

                    font_root++;
                    window.cookie.set('fontePersonalizada', font_root, {expires: 365, path: window.path_cookie});
                    body[0].style['font-size'] = window.cookie.get('fontePersonalizada') + 'px';
                }
            });


            elem_font_down.addEventListener("click", function (e) {
                if (font_root > font_min) {
                    e.preventDefault();

                    font_root--;
                    window.cookie.set('fontePersonalizada', font_root, {expires: 365, path: window.path_cookie});
                    body[0].style['font-size'] = window.cookie.get('fontePersonalizada') + 'px';
                }
            });

            elem_font_default.addEventListener("click", function (e) {
                font_root = font_default;
                window.cookie.set('fontePersonalizada', font_default, {expires: 365, path: window.path_cookie});
                body[0].style['font-size'] = font_default + 'px';
            });
        },

        teclasAtalhos = function () {
            var keys = {};

            var updateKeys = function () {
                var pressed = [];

                for (var key in keys) {
                    pressed.push(key);
                }

                // Teclas AltGr + 0
                if ((pressed.includes('225') || (pressed.includes('17') && pressed.includes('18'))) && (pressed.includes('48') || pressed.includes('96'))) {
                    if (data.pgAcessibilidade) data.pgAcessibilidade();
                    keys = {}
                }

                // Teclas AltGr + 1
                if ((pressed.includes('225') || (pressed.includes('17') && pressed.includes('18'))) && (pressed.includes('49') || pressed.includes('97'))) {
                    if (data.pgPrincipal) data.pgPrincipal();
                    keys = {}
                }

                // Teclas AltGr + 2
                if ((pressed.includes('225') || (pressed.includes('17') && pressed.includes('18'))) && (pressed.includes('50') || pressed.includes('98'))) {
                    if (data.menuPrincipal) data.menuPrincipal();
                    keys = {}
                }

                // Teclas AltGr + 3
                if ((pressed.includes('225') || (pressed.includes('17') && pressed.includes('18'))) && (pressed.includes('51') || pressed.includes('99'))) {
                    if (data.pgBusca) data.pgBusca();
                    keys = {}
                }

            };

            document.onkeydown = function (e) {
                keys[e.keyCode] = true;
                updateKeys();
            };

            document.onkeyup = function () {
                keys = {};
                updateKeys();
            };

        },

        listaPaginas = function () {
            var view_lista = document.querySelectorAll("#ng-integracao-lista-paginas");
            if (typeof view_lista[0] == 'object') {
                var html = document.createElement("div"),
                    lista = tratarUrl();

                html.innerHTML = '<span>VOCÃŠ ESTÃ AQUI: </span>' + lista.join(" > ");

                view_lista[0].appendChild(html);
            }
        },

        /**
         * URL[2] No local deve o indice 2
         * URL[1] No online deve ser o indice 1
         *
         * @return {string[]}
         */
        tratarUrl = function () {
            var url = window.location.pathname.split('/'),
                res = ['<a class="link" href=\'home\'>PÃ¡gina Inicial</a>'];

            if (url[1]) {
                var path = url[1].trim();

                if (path == "noticia") {
                    res.push("<a class='link' href='noticias'>NotÃ­cias</a>");
                }
                if (path == "noticias") {
                    res.push("<a class='link' href='noticias'>NotÃ­cias</a>");
                }
                if (path == "estrutura_organizacional") {
                    res.push("<a class='link' href='estrutura_organizacional'>estrutura organizacional</a>");
                }
                if (path == "servico-de-informacao-ao-cidadao") {
                    res.push("<a class='link' href='servico-de-informacao-ao-cidadao'>sic-serviÃ§o de informaÃ§Ã£o ao cidadÃ£o</a>");
                }
                if (path == "mapa-do-site") {
                    res.push("<a class='link' href='mapa-do-site'>mapa do site</a>");
                }
                if (path == "galeria") {
                    res.push("<a class='link' href='galerias'>Galerias</a>");
                }
                if (path == "galerias") {
                    res.push("<a class='link' href='galerias'>Galerias</a>");
                }
                if (path == "contato") {
                    res.push("<a class='link' href='contato'>Fale conosco</a>");
                }
                if (path == "buscar") {
                    res.push("<a class='link' href='buscar'>Buscar</a>");
                }
            }

            if (data.elemTitulo &&
                typeof document.querySelectorAll(data.elemTitulo)[0] == 'object'
            ) {
                var str = document.querySelectorAll(data.elemTitulo)[0].innerHTML;

                if (res.length > 0 && str.length > 0) {
                    res.forEach(function (v, i) {
                        if (v.toUpperCase().indexOf(str.toUpperCase()) >= 0) {
                            str = null;
                        }
                    });
                }

                if (str != null) res.push("<a class='link' href='" + window.location + "'>" + str + "</a>");
            }

            return res;
        },

        faleConosco = function () {
            var view_fale = document.querySelectorAll("#ng-integracao-fale-conosco");

            if (typeof view_fale[0] == 'object') {
                var html = document.createElement("div");
                html.innerHTML = htmlFaleConosco();

                view_fale[0].appendChild(html);

                view_fale[0].querySelectorAll("form")[0].addEventListener("submit", function (e) {
                    e.preventDefault();

                    var formdata = new URLSearchParams();
                    formdata.append('nome', view_fale[0].querySelectorAll("form input[name=nome]")[0].value);
                    formdata.append('email', view_fale[0].querySelectorAll("form input[name=email]")[0].value);
                    formdata.append('telefone', view_fale[0].querySelectorAll("form input[name=fone]")[0].value);
                    formdata.append('mensagem', view_fale[0].querySelectorAll("form textarea[name=msg]")[0].value);

                    view_fale[0].querySelectorAll("form input[type=submit]")[0].value = "Enviando...";

                    if (sendForm == true){
                        sendForm = false;
                        ajax(BASE + "func/request.php", formdata, function (responseText) {
                            sendForm = true;
                            view_fale[0].querySelectorAll("form input[type=submit]")[0].value = "Enviar";

                            if (parseInt(responseText) == 1) {
                                alert("Mensagem enviada!");
                                view_fale[0].querySelectorAll("form input[name=nome]")[0].value = "";
                                view_fale[0].querySelectorAll("form input[name=email]")[0].value = "";
                                view_fale[0].querySelectorAll("form input[name=fone]")[0].value = "";
                                view_fale[0].querySelectorAll("form textarea[name=msg]")[0].value = "";
                            } else {
                                alert("Erro ao enviar. Tente novamente");
                            }
                        });
                    }
                });
            }
        },

        boletimCoronaVirus = function () {
            var view_page_covid = document.querySelectorAll("#page-adm-boletim-coronavirus");

            if (view_page_covid.length > 0) {
                view_page_covid[0].innerHTML = htmlLoader();

                var http = new XMLHttpRequest();
                var params = 'origin=' + window.location.origin;
                http.open('POST', 'https://api.nucleogov.com.br/integracaosites/covid.php', true);
                http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                http.onreadystatechange = function () {
                    if (http.readyState == 4 && http.status == 200) {
                        view_page_covid[0].innerHTML = http.responseText;
                    }
                };
                http.send(params);
            }
        },

        htmlLoader = function () {
            return '<div class="loader-page-covid"></div>';
        },

        /**
         * Menu de acessibilidade
         * @return {string}
         */
        htmlAcessibilidade = function () {
            var barra = "";

            if (data.linkMapaSite) {
                barra += '<section><span class="link"><a href="' + data.linkMapaSite + '">MAPA DO SITE</a></span></section>';
            }

            barra += '<section id="ng-redimensionar-fontes">\
                        <span class="text">TAMANHO DA FONTE:</span>\
                        <span class="fontUp font" title="Aumentar fonte">A+</span>\
                        <span class="fontDefault font" title="Tamanho padrÃ£o de fonte">A</span>\
                        <span class="fontLow font" title="Diminuir fonte">A-</span>\
                      </section>';

            barra += '<section id="ng-integracao-altocon">\
                        <span class="link alto">ALTO CONTRASTE</span>\
                      </section>';

            if (data.linkAcessibilidade) {
                barra += '<section><span class="link"><a href="' + data.linkAcessibilidade + '" style="display: none" class="icone">' + svg_acessibilidade + '</a><a href="' + data.linkAcessibilidade + '">ACESSIBILIDADE</a></span></section>';
            }

            return barra;
        },

        htmlFaleConosco = function () {
            return '<form method="post">\
            <span>*Envie nos uma mensagem utilizando o formulário abaixo:</span>\
                        <input type="text" name="nome" placeholder="Nome" required/>\
                        <input type="email" name="email" placeholder="E-mail" required/>\
                        <input type="text" name="fone" placeholder="Telefone"/>\
                        <textarea name="msg" rows="2" placeholder="Mensagem" required></textarea>\
                        <input type="submit" value="Enviar mensagem"/>\
                    </form>';
        };

    _construct();
};

})();