/**
 * Скрипт загрузчик небилдовой версии клиентского кода страницы.
 */
define(
    [ 'config' ],

    /**
     * @exports loader
     * @classdesc
     * Входная точка для режима разработки, загружающая модуль объявленный в атрибуте data-page.
     */
    function() {
        var scripts   = document.getElementsByTagName('script'),
            attribute = 'data-page',
            check     = 'data-main',
            modules   = [];

        window.less = {
            env          : "development",
            strictImports: false,
            relativeUrls : true
        };

        modules.push('less');

        for (var i = 0, len = scripts.length; i < len; i++) {
            var script = scripts[i],
                module = script.getAttribute(attribute);

            if (module && script.getAttribute(check)) {
                modules.push(module);

                script.removeAttribute(attribute);
            }
        }

        require(modules);
    }
);
