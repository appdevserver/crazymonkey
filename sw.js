/*
	This is a service worker file, but is not used. It exists solely to trigger
	the Web App install banner in Chrome, which requires there to be a service worker
	registered. See: http://updates.html5rocks.com/2015/03/increasing-engagement-with-app-install-banners-in-chrome-for-android
*/

// use a cacheName for cache versioning
var cacheName = 'v1:static';

// during the install phase you usually want to cache static assets
self.addEventListener('install', function(e) {
    // once the SW is installed, go ahead and fetch the resources to make this work offline
    e.waitUntil(
        caches.open(cacheName).then(function(cache) {
            return cache.addAll([
                './',
                './c2runtime.js',
                './contact.html',
                './data.js',
                './index.html',
                './jquery-2.1.1.min.js',
                './privacy.html'
            ]).then(function() {
                self.skipWaiting();
            });
        })
    );
});

// when the browser fetches a url
self.addEventListener('fetch', function(event) {
    // either respond with the cached object or go ahead and fetch the actual url
    event.respondWith(
        caches.match(event.request).then(function(response) {
            if (response) {
                // retrieve from cache
                return response;
            }
            // fetch as normal
            return fetch(event.request);
        })
    );
});
