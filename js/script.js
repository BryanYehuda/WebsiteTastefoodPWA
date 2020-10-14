if ("serviceWorker" in navigator) {
        window.addEventListener("load", function() {
            navigator.serviceWorker
                .register("/service-worker.js")
                .then(function() {
                console.log("Pendaftaran ServiceWorker berhasil");
                })
                .catch(function() {
                console.log("Pendaftaran ServiceWorker gagal");
                });
            });
        } else {
        console.log("ServiceWorker belum didukung browser ini.");
        }