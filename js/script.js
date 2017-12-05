document.addEventListener('DOMContentLoaded', function () {
    var map = document.createElement('canvas');
    map.id = 'map';
    map.style.position = 'fixed';
    map.style.top = '0';
    map.style.right = '0';
    map.style.width = '200px';
    map.style.height = '100%';
    map.style.zIndex = '100';
    document.body.appendChild(map);
    pagemap(map);
});