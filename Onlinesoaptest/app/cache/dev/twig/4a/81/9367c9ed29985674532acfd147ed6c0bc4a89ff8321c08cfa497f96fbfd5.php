<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_4a819367c9ed29985674532acfd147ed6c0bc4a89ff8321c08cfa497f96fbfd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  70 => 26,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  30 => 5,  26 => 3,  22 => 2,  19 => 1,  95 => 18,  88 => 18,  85 => 17,  82 => 16,  68 => 8,  54 => 12,  44 => 5,  41 => 4,  36 => 21,  31 => 15,  29 => 4,  24 => 2,  418 => 242,  416 => 241,  402 => 229,  399 => 228,  394 => 246,  392 => 228,  377 => 218,  347 => 190,  345 => 189,  308 => 154,  300 => 147,  297 => 146,  291 => 135,  271 => 91,  265 => 90,  240 => 70,  234 => 69,  214 => 51,  211 => 50,  206 => 248,  204 => 146,  192 => 136,  190 => 135,  183 => 130,  173 => 126,  169 => 124,  165 => 123,  162 => 122,  152 => 118,  148 => 116,  144 => 115,  132 => 105,  130 => 50,  125 => 48,  122 => 47,  119 => 46,  113 => 27,  109 => 26,  105 => 25,  96 => 23,  93 => 22,  84 => 40,  78 => 37,  71 => 9,  65 => 29,  63 => 22,  53 => 15,  49 => 14,  37 => 4,  34 => 16,  101 => 24,  94 => 35,  90 => 19,  87 => 33,  80 => 29,  76 => 10,  73 => 27,  66 => 25,  62 => 24,  59 => 21,  52 => 8,  48 => 7,  45 => 15,  43 => 14,  28 => 3,);
    }
}
