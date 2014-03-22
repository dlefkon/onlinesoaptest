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
        return array (  79 => 29,  75 => 28,  70 => 26,  66 => 25,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  30 => 5,  26 => 3,  19 => 1,  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 10,  71 => 9,  62 => 24,  54 => 12,  52 => 8,  48 => 7,  44 => 5,  41 => 4,  36 => 21,  31 => 15,  29 => 4,  24 => 2,  394 => 245,  381 => 234,  379 => 233,  365 => 221,  362 => 220,  357 => 249,  355 => 220,  340 => 210,  277 => 149,  269 => 142,  266 => 141,  260 => 130,  204 => 47,  201 => 46,  196 => 251,  194 => 141,  182 => 131,  180 => 130,  173 => 125,  163 => 121,  159 => 119,  155 => 118,  152 => 117,  142 => 113,  138 => 111,  134 => 110,  122 => 100,  120 => 46,  115 => 44,  112 => 43,  109 => 42,  103 => 23,  99 => 22,  95 => 18,  91 => 35,  86 => 19,  83 => 30,  74 => 36,  68 => 8,  61 => 29,  55 => 25,  53 => 18,  37 => 4,  34 => 16,  28 => 3,);
    }
}
