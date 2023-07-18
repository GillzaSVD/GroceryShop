ymaps.ready(init);

function init () {
    myMap = new ymaps.Map('map', {
        center: [55.030204, 82.920430],
        zoom: 12
    }, {
        searchControlProvider: 'yandex#search'
    });
}
