document.addEventListener('DOMContentLoaded', function() {
    const logoPath = document.querySelector('.logo-path');
    const length = logoPath.getTotalLength();

    // Получаем координаты первой точки пути
    const firstPoint = logoPath.getPointAtLength(0);
    // Получаем координаты последней точки пути
    const lastPoint = logoPath.getPointAtLength(length);

    // Если последняя точка не совпадает с первой, корректируем путь
    if (lastPoint.x !== firstPoint.x || lastPoint.y !== firstPoint.y) {
        // Корректируем последнюю точку пути
        logoPath.setAttribute('d', `${logoPath.getAttribute('d')} L${firstPoint.x},${firstPoint.y}`);
    }

    // Устанавливаем начальное состояние анимации
    logoPath.style.transition = 'none';
    logoPath.style.strokeDasharray = length;
    logoPath.style.strokeDashoffset = length;

    // Запускаем анимацию
    setTimeout(() => {
        logoPath.style.transition = 'stroke-dashoffset 5s linear';
        logoPath.style.strokeDashoffset = 0;
    }, 500); // Через 0.5 секунды после загрузки страницы
});
