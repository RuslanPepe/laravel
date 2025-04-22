let ymapsPromise = null;

export function loadYandexMap() {
  if (window.ymaps3) {
    return Promise.resolve(window.ymaps3);
  }

  if (!ymapsPromise) {
    ymapsPromise = new Promise((resolve, reject) => {
      const script = document.createElement('script');
      script.src = 'https://api-maps.yandex.ru/v3/?apikey=e7692a53-8e97-4a20-ae6f-ec1e70062c30&lang=ru_RU';
      script.async = true;
      script.onload = () => resolve(window.ymaps3);
      script.onerror = reject;
      document.head.appendChild(script);
    });
  }

  return ymapsPromise;
}
