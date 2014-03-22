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
        return array (  70 => 26,  42 => 12,  38 => 13,  35 => 7,  26 => 3,  87 => 20,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  79 => 29,  75 => 28,  72 => 16,  64 => 12,  56 => 9,  199 => 91,  187 => 84,  183 => 82,  171 => 73,  168 => 72,  166 => 71,  158 => 67,  156 => 66,  151 => 63,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  105 => 40,  101 => 24,  69 => 25,  66 => 25,  51 => 15,  49 => 19,  19 => 1,  98 => 40,  93 => 9,  80 => 19,  78 => 40,  46 => 14,  32 => 6,  27 => 4,  22 => 2,  57 => 16,  40 => 8,  33 => 6,  30 => 5,  90 => 19,  88 => 6,  85 => 19,  82 => 16,  76 => 10,  71 => 9,  62 => 24,  54 => 21,  52 => 8,  48 => 7,  44 => 10,  41 => 9,  31 => 5,  29 => 4,  24 => 2,  407 => 237,  405 => 236,  391 => 224,  388 => 223,  383 => 241,  381 => 223,  366 => 213,  303 => 152,  295 => 145,  292 => 144,  286 => 133,  266 => 89,  260 => 88,  235 => 68,  229 => 67,  215 => 55,  213 => 54,  204 => 47,  201 => 92,  196 => 90,  194 => 144,  182 => 134,  180 => 133,  173 => 74,  163 => 70,  159 => 122,  155 => 121,  152 => 120,  142 => 59,  138 => 57,  134 => 113,  122 => 103,  120 => 46,  115 => 43,  112 => 42,  109 => 42,  103 => 23,  99 => 22,  95 => 18,  91 => 35,  86 => 28,  83 => 30,  74 => 36,  68 => 14,  61 => 29,  55 => 13,  53 => 18,  37 => 4,  50 => 15,  43 => 8,  39 => 6,  36 => 7,  34 => 16,  28 => 3,);
    }
}
